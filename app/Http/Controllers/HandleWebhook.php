<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountMetadata;
use App\Models\Block;
use App\Models\Entity;
use App\Models\Transaction;
use App\Models\TransactionMetadata;
use App\Models\TransactionReceipt;
use App\Models\ValidatorUpdate;
use Illuminate\Http\Request;

class HandleWebhook
{
    public function __invoke(Request $request)
    {
        $type = $request->input('descriptor.type');

        if (! empty($request->input('descriptor.subType'))) {
            $type .= '_'.$request->input('descriptor.subType');
        }

        return match ($type) {
            'account'           => $this->handleAccount($request),
            'account_metadata'  => $this->handleAccountMetadata($request),
            'block'             => $this->handleBlock($request),
            'entity'            => $this->handleEntity($request),
            'tx'                => $this->handleTransaction($request),
            'tx_metadata'       => $this->handleTransactionMetadata($request),
            'tx_receipt'        => $this->handleTransactionReceipt($request),
            'validator_updates' => $this->handleValidatorUpdates($request),
        };
    }

    private function handleAccount(Request $request)
    {
        return Account::upsert([
            'address'         => $request->input('data.address'),
            'public_key'      => $request->input('data.publicKey'),
            'name'            => $request->input('data.name'),
            'nonce'           => $request->input('data.nonce'),
            'balances'        => json_encode($request->input('data.balances')),
            'locked_balances' => json_encode($request->input('data.lockedBalances')),
            'stakes'          => json_encode($request->input('data.stakes')),
            'validator'       => json_encode($request->input('data.validator')),
            'metadata'        => json_encode($request->input('data.metadata')),
        ], ['address']);
    }

    private function handleAccountMetadata(Request $request)
    {
        return AccountMetadata::upsert([
            'account_id'     => Account::where('address', $request->input('descriptor.id'))->firstOrFail()->id,
            'module'         => $request->input('module'),
            'key'            => $request->input('data.key'),
            'value'          => json_encode($request->input('data.value')),
        ], ['account_id', 'module', 'key']);
    }

    private function handleBlock(Request $request)
    {
        $data = $this->protoJsonDecode($request->input('data'));

        return Block::upsert([
            'hash'                 => $data['hash'],
            'height'               => $request->input('data.header.height'),
            'header'               => json_encode($data['header']),
            'byzantine_validators' => json_encode($data['byzantineValidators'] ?? []),
            'last_commit_info'     => json_encode($data['lastCommitInfo']),
        ], ['height']);
    }

    private function handleEntity(Request $request)
    {
        return Entity::upsert([
            'module' => $request->input('module'),
            'type'   => $request->input('data.type'),
            'key'    => $request->input('data.key'),
            'value'  => json_encode($request->input('data.value')),
        ], ['module', 'type', 'key']);
    }

    private function handleTransaction(Request $request)
    {
        return Transaction::upsert([
            'block_id'             => Block::where('height', $request->input('data.blockNumber'))->firstOrFail()->id,
            'hash'                 => $request->input('descriptor.id'),
            'sender'               => $request->input('data.sender'),
            'recipient'            => $request->input('data.recipient'),
            'gas'                  => $request->input('data.gas'),
            'nonce'                => $request->input('data.nonce'),
            'signature'            => $request->input('data.signature'),
            'version'              => $request->input('data.version'),
            'message'              => json_encode($request->input('data.message')),
            'message_deserialized' => json_encode($request->input('data.deserialized')),
        ], ['hash']);
    }

    private function handleTransactionMetadata(Request $request)
    {
        return TransactionMetadata::upsert([
            'transaction_id' => Transaction::where('hash', $request->input('descriptor.id'))->firstOrFail()->id,
            'module'         => $request->input('module'),
            'key'            => $request->input('data.key'),
            'value'          => json_encode($request->input('data.value')),
        ], ['transaction_id', 'module', 'key']);
    }

    private function handleTransactionReceipt(Request $request)
    {
        return TransactionReceipt::upsert([
            'transaction_id' => Transaction::where('hash', $request->input('descriptor.id'))->firstOrFail()->id,
            'block_hash'     => bin2hex(base64_decode($request->input('data.blockHash'))),
            'block_number'   => $request->input('data.blockNumber'),
            'logs'           => json_encode($request->input('data.logs')),
        ], ['transaction_id']);
    }

    private function handleValidatorUpdates(Request $request)
    {
        return ValidatorUpdate::upsert([
            'block_id' => Block::where('height', $request->input('data.blockNumber'))->firstOrFail()->id,
            'value'    => json_encode($this->protoJsonDecode($request->input('data.value'))),
        ], ['block_id']);
    }

    private function protoJsonDecode(array $data)
    {
        $result = [];

        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $result[$key] = $this->protoJsonDecode($value);

                continue;
            }

            if ($this->isBase64($value)) {
                $result[$key] = bin2hex(base64_decode($value));
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    // https://stackoverflow.com/a/23810738
    private function isBase64(mixed $value)
    {
        if (! is_string($value)) {
            return false;
        }

        // Check if there are valid base64 characters
        if (! preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $value)) {
            return false;
        }

        // Decode the string in strict mode and check the results
        $decoded = base64_decode($value, true);
        if (false === $decoded) {
            return false;
        }

        // Encode the string again
        if (base64_encode($decoded) != $value) {
            return false;
        }

        return true;
    }
}
