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

class TransactionMetadataSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('TransactionMetadata')->properties(
            Schema::integer('id')
                ->description('The id of the object.')
                ->example(1),
            Schema::integer('transaction_id')
                ->description('The id of the object.')
                ->example(1),
            Schema::string('module')
                ->description('The id of the object.')
                ->example('@bearmint/bep-126'),
            Schema::string('key')
                ->description('The id of the object.')
                ->example('collection'),
            Schema::string('value')
                ->description('The id of the object.')
                ->example([
                    'id'                => '47be426fe6373cf104636a38e57f82624cb44b6389e2e954887c4a6be9921535',
                    'name'              => '41848b4314b2-43bf-819d-41ae21a4b763',
                    'symbol'            => 'd6b96b8b9677-4669-a0aa-8b74b545d611',
                    'uriPrefix'         => 'https://bearmint.com/',
                    'uriSuffix'         => '.json',
                    'initialOwner'      => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                    'currentOwner'      => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                    'accessControlList' => [
                        'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl' => [
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
