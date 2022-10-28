<?php

use App\Models\Account;
use App\Models\AccountMetadata;
use App\Models\Block;
use App\Models\Entity;
use App\Models\Transaction;
use App\Models\TransactionMetadata;
use App\Models\TransactionReceipt;
use App\Models\ValidatorUpdate;

it('should handle (type=account)', function () {
    $data = Account::factory()->make();

    $this->assertDatabaseCount('accounts', 0);

    $this->post('/api', [
        'descriptor' => [
            'type' => 'account',
        ],
        'data' => $data->toArray(),
    ])->assertStatus(200);

    $this->assertDatabaseCount('accounts', 1);

    $this->assertDatabaseHas('accounts', ['address' => $data->address]);
});

it('should handle (type=account_metadata)', function () {
    $data = AccountMetadata::factory()->make();

    $this->assertDatabaseCount('account_metadata', 0);

    $this->post('/api', [
        'descriptor' => [
            'id'      => $data->account->address,
            'type'    => 'account',
            'subType' => 'metadata',
        ],
        'data'   => $data->toArray(),
        'module' => $data->module,
    ])->assertStatus(200);

    $this->assertDatabaseCount('account_metadata', 1);

    $this->assertDatabaseHas('account_metadata', [
        'module' => $data->module,
        'key'    => $data->key,
    ]);
});

it('should handle (type=block)', function () {
    $data = Block::factory()->make();

    $this->assertDatabaseCount('blocks', 0);

    $this->post('/api', [
        'descriptor' => [
            'type' => 'block',
        ],
        'data' => [
            'hash'                => $data->hash,
            'height'              => $data->height,
            'header'              => ['height' => $data->height],
            'byzantineValidators' => $data->byzantine_validators,
            'lastCommitInfo'      => $data->last_commit_info,
        ],
    ])->assertStatus(200);

    $this->assertDatabaseCount('blocks', 1);

    $this->assertDatabaseHas('blocks', ['height' => $data->height]);
});

it('should handle (type=entity)', function () {
    $data = Entity::factory()->make();

    $this->assertDatabaseCount('entities', 0);

    $this->post('/api', [
        'descriptor' => [
            'type' => 'entity',
        ],
        'data'   => $data,
        'module' => $data->module,
    ])->assertStatus(200);

    $this->assertDatabaseCount('entities', 1);

    $this->assertDatabaseHas('entities', [
        'module' => $data->module,
        'key'    => $data->key,
    ]);
});

it('should handle (type=tx)', function () {
    $data = Transaction::factory()->make();

    $this->assertDatabaseCount('transactions', 0);

    $this->post('/api', [
        'descriptor' => [
            'id'   => $data->hash,
            'type' => 'tx',
        ],
        'data' => [
            'blockNumber' => $data->block->height,
            ...$data->toArray(),
        ],
    ])->assertStatus(200);

    $this->assertDatabaseCount('transactions', 1);

    $this->assertDatabaseHas('transactions', ['hash' => $data->hash]);
});

it('should handle (type=tx_metadata)', function () {
    $data = TransactionMetadata::factory()->make();

    $this->assertDatabaseCount('transaction_metadata', 0);

    $this->post('/api', [
        'descriptor' => [
            'id'      => $data->transaction->hash,
            'type'    => 'tx',
            'subType' => 'metadata',
        ],
        'data'   => $data->toArray(),
        'module' => 'module',
    ])->assertStatus(200);

    $this->assertDatabaseCount('transaction_metadata', 1);

    $this->assertDatabaseHas('transaction_metadata', ['key' => $data->key]);
});

it('should handle (type=tx_receipt)', function () {
    $data = TransactionReceipt::factory()->make();

    $this->assertDatabaseCount('transaction_receipts', 0);

    $this->post('/api', [
        'descriptor' => [
            'id'      => $data->transaction->hash,
            'type'    => 'tx',
            'subType' => 'receipt',
        ],
        'data' => [
            'blockHash'   => $data->transaction->block->hash,
            'blockNumber' => $data->transaction->block->height,
            ...$data->toArray(),
        ],
    ])->assertStatus(200);

    $this->assertDatabaseCount('transaction_receipts', 1);

    $this->assertDatabaseHas('transaction_receipts', [
        'block_hash'   => bin2hex(base64_decode($data->transaction->block->hash)),
        'block_number' => $data->transaction->block->height,
    ]);
});

it('should handle (type=validator_updates)', function () {
    $data = ValidatorUpdate::factory()->make();

    $this->assertDatabaseCount('validator_updates', 0);

    $this->post('/api', [
        'descriptor' => [
            'type' => 'validator_updates',
        ],
        'data' => [
            'blockNumber' => $data->block->height,
            ...$data->toArray(),
        ],
    ])->assertStatus(200);

    $this->assertDatabaseCount('validator_updates', 1);

    $this->assertDatabaseHas('validator_updates', ['block_id' => $data->block_id]);
});
