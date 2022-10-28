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

class AccountMetadataSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('AccountMetadata')->properties(
            Schema::integer('id')
                ->description('The id of the object.')
                ->example(1),
            Schema::integer('account_id')
                ->description('The id of the object.')
                ->example(3),
            Schema::string('module')
                ->description('The id of the object.')
                ->example('@bearmint/bep-131'),
            Schema::string('key')
                ->description('The id of the object.')
                ->example('inventory'),
            Schema::string('value')
                ->description('The id of the object.')
                ->example([
                    'befaffab63b43b4689f2273b32c969abcb9b03af7902d523181e2be7b5b521f4',
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
