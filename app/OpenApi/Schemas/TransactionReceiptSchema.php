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

class TransactionReceiptSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('TransactionReceipt')->properties(
            Schema::integer('id')
                ->description('The id of the object.')
                ->example(1),
            Schema::integer('transaction_id')
                ->description('The id of the object.')
                ->example(2),
            Schema::string('block_hash')
                ->description('The id of the object.')
                ->example('Cda8V4lhwCNGlm2DIFKX7asRiHHD8XWtxNp/fKTFLPQ='),
            Schema::integer('block_number')
                ->description('The id of the object.')
                ->example(5),
            Schema::array('logs')
                ->description('The id of the object.')
                ->example([
                    [
                        'event' => 'MetadataCreated',
                        'args'  => [
                            '_modelKey'     => 'ec667f03c0d3d929d09a80c947dbce6ac3b65193fca08c3543b1a4b0a27bd03b',
                            '_modelSubType' => 'metadata',
                            '_modelType'    => 'tx',
                            '_module'       => '@bearmint/bep-131',
                            '_opIndex'      => '0',
                            'key'           => 'id',
                            'value'         => [
                                'id' => 1,
                            ],
                        ],
                    ],
                    [
                        'event' => 'MetadataCreated',
                        'args'  => [
                            '_modelKey'     => 'ec667f03c0d3d929d09a80c947dbce6ac3b65193fca08c3543b1a4b0a27bd03b',
                            '_modelSubType' => 'metadata',
                            '_modelType'    => 'tx',
                            '_module'       => '@bearmint/bep-131',
                            '_opIndex'      => '0',
                            'key'           => 'hash',
                            'value'         => [
                                'hash' => '3d262af20ff9158e8194eadb43a06609dd82dfc3d515eb539cb3e945655538cb',
                            ],
                        ],
                    ],
                    [
                        'event' => 'OwnerChanged',
                        'args'  => [
                            '_modelKey'     => 'bear1j4vvs55nfkjffkewadw5atzyqsmmtvtj2rcwjcvk2qfc85k5w52j545nzgez4hsw67h9vzyu958rj3g20zt',
                            '_modelSubType' => 'metadata',
                            '_modelType'    => 'account',
                            '_module'       => '@bearmint/bep-131',
                            '_opIndex'      => '0',
                            'key'           => 'inventory',
                            'value'         => [
                                '3d262af20ff9158e8194eadb43a06609dd82dfc3d515eb539cb3e945655538cb',
                            ],
                        ],
                    ],
                    [
                        'event' => 'MetadataCreated',
                        'args'  => [
                            '_modelKey'     => 'ec667f03c0d3d929d09a80c947dbce6ac3b65193fca08c3543b1a4b0a27bd03b',
                            '_modelSubType' => 'metadata',
                            '_modelType'    => 'tx',
                            '_module'       => '@bearmint/bep-131',
                            '_opIndex'      => '0',
                            'key'           => 'token',
                            'value'         => [
                                'id'         => 1,
                                'hash'       => '3d262af20ff9158e8194eadb43a06609dd82dfc3d515eb539cb3e945655538cb',
                                'collection' => '51e24f910c4b539280a8e0c8e3fc8119312d236aea36428165ab11f2c1ce2f18',
                                'owner'      => 'bear1j4vvs55nfkjffkewadw5atzyqsmmtvtj2rcwjcvk2qfc85k5w52j545nzgez4hsw67h9vzyu958rj3g20zt',
                            ],
                        ],
                    ],
                    [
                        'event' => 'MetadataUpdated',
                        'args'  => [
                            '_modelKey'     => 'ec667f03c0d3d929d09a80c947dbce6ac3b65193fca08c3543b1a4b0a27bd03b',
                            '_modelSubType' => 'metadata',
                            '_modelType'    => 'tx',
                            '_module'       => '@bearmint/bep-126',
                            'key'           => 'collection',
                            'value'         => [
                                'id'        => '51e24f910c4b539280a8e0c8e3fc8119312d236aea36428165ab11f2c1ce2f18',
                                'name'      => 'fc3296116a5b-42f8-8c41-5b51dd3813cb',
                                'symbol'    => 'f4af54f78243-4cd9-8ef5-09db6190c69a',
                                'uriPrefix' => 'https://bearmint.com/',
                                'uriSuffix' => '.json',
                                'tokens'    => [
                                    '3d262af20ff9158e8194eadb43a06609dd82dfc3d515eb539cb3e945655538cb',
                                ],
                                'initialOwner'      => 'bear1j4vvs55nfkjffkewadw5atzyqsmmtvtj2rcwjcvk2qfc85k5w52j545nzgez4hsw67h9vzyu958rj3g20zt',
                                'currentOwner'      => 'bear1j4vvs55nfkjffkewadw5atzyqsmmtvtj2rcwjcvk2qfc85k5w52j545nzgez4hsw67h9vzyu958rj3g20zt',
                                'accessControlList' => [
                                    'bear1j4vvs55nfkjffkewadw5atzyqsmmtvtj2rcwjcvk2qfc85k5w52j545nzgez4hsw67h9vzyu958rj3g20zt' => [
                                        'permissions' => [
                                            0,
                                            1,
                                            2,
                                        ],
                                    ],
                                ],
                                'policies' => [
                                    [
                                        'name' => '@bearmint/bep-145',
                                    ],
                                    [
                                        'type' => 1,
                                        'name' => '@bearmint/bep-145',
                                    ],
                                    [
                                        'type' => 2,
                                        'name' => '@bearmint/bep-145',
                                    ],
                                ],
                            ],
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
