<?php

namespace App\OpenApi\Schemas;

use GoldSpecDigital\ObjectOrientedOAS\Contracts\SchemaContract;
use GoldSpecDigital\ObjectOrientedOAS\Objects\AllOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\AnyOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Not;
use GoldSpecDigital\ObjectOrientedOAS\Objects\OneOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\SchemaFactory;

class BlockSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('Block')->properties(
            Schema::integer('id')
                ->description('The id of the object.')
                ->example(1),
            Schema::string('hash')
                ->description('The hash of the object.')
                ->example('gm4XrAp6aJ/+oKAcnCoJwafhNJ0HD20DWg1epsEG6+o='),
            Schema::integer('height')
                ->description('The height of the object.')
                ->example(1),
            Schema::array('header')
                ->description('The id of the object.')
                ->example([
                    'version' => [
                        'block' => '11',
                    ],
                    'chainId'     => 'bearmint-testnet',
                    'height'      => '1',
                    'time'        => '2022-10-09T02:12:21.361Z',
                    'lastBlockId' => [
                        'partSetHeader' => [
                            'hash'          => 'gm4XrAp6aJ/+oKAcnCoJwafhNJ0HD20DWg1epsEG6+o=',
                            'partSetHeader' => [
                                'total' => 1,
                                'hash'  => 'FASNnBqJ2g7aBGvQFoPdLRXhO6C/lbl+VNqYM0GTgps=',
                            ],
                        ],
                    ],
                    'lastCommitHash'     => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                    'dataHash'           => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                    'validatorsHash'     => 'ayn8KqIdjdg0za9pl/QPzJbOaSAkVIJWCXrctRWaR7s=',
                    'nextValidatorsHash' => 'ayn8KqIdjdg0za9pl/QPzJbOaSAkVIJWCXrctRWaR7s=',
                    'consensusHash'      => 'BICRvH3cKD93v7+R1zxE2ljD34qcvIZ0Bdi389qtoi8=',
                    'appHash'            => 'mhfocNgApsnLxYU1Wv8EwT3idwzBW8iP76GDbRAJLU8=',
                    'lastResultsHash'    => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                    'evidenceHash'       => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                    'proposerAddress'    => 'XGuFiLDMzeAcQyhrHmmFGd0nzu4=',
                ]),
            Schema::array('byzantine_validators')
                ->description('The id of the object.')
                ->example([]),
            Schema::array('last_commit_info')
                ->description('The id of the object.')
                ->example([
                    'votes' => [
                        [
                            'validator' => [
                                'address' => 'XGuFiLDMzeAcQyhrHmmFGd0nzu4=',
                                'power'   => '1',
                            ],
                            'signedLastBlock' => true,
                        ],
                    ],
                ]),
            Schema::string('created_at')
                ->format(Schema::FORMAT_DATE_TIME)
                ->description('The creation date of the object.')
                ->example('2022-10-09T02:12:24.000000Z'),
            Schema::string('updated_at')
                ->format(Schema::FORMAT_DATE_TIME)
                ->description('The updating date of the object.')
                ->example('2022-10-09T02:12:24.000000Z')
        );
    }
}
