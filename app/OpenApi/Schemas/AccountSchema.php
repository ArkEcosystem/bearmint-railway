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

class AccountSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('Account')->properties(
            Schema::integer('id')
                ->description('The internal id of the object.')
                ->example(1),
            Schema::string('address')
                ->description('The id of the object.')
                ->example('bear14v4nt0x5jryeagz2x6nad02pk9y6kjlwcav365l20emh8ht2q275ttfg8yq3ch43lpp8z22xyfxqxkpm0f7'),
            Schema::string('public_key')
                ->description('The id of the object.')
                ->example('ab2b35bcd490c99ea04a36a7d6bd41b149ab4beec7591d53ea7e7773dd6a02bd45ad2839011c5eb1f842712946224c03'),
            Schema::string('name')
                ->description('The id of the object.')
                ->example('johndoe'),
            Schema::integer('nonce')
                ->description('The id of the object.')
                ->example(1),
            Schema::string('balances')
                ->description('The id of the object.')
                ->example([
                    'BEAR' => '9999999900000000',
                    'FIRE' => '9999999900000000',
                    'GOLD' => '9999999900000000',
                    'SEED' => '9999999900000000',
                ]),
            Schema::string('locked_balances')
                ->description('The id of the object.')
                ->example([
                    'BEAR' => '0',
                    'FIRE' => '0',
                    'GOLD' => '0',
                    'SEED' => '0',
                ]),
            Schema::string('stakes')
                ->description('The id of the object.')
                ->example([
                    'johndoe' => '9999999900000000',
                ]),
            Schema::string('validator')
                ->description('The id of the object.')
                ->example([
                    'address'   => '5c6b8588b0cccde01c43286b1e698519dd27ceee',
                    'publicKey' => 'fc795a9741081019b15ef5e34131e3d41bb59fccb99b6bae1419820fd300bfcf',
                    'power'     => '1',
                ]),
            Schema::string('metadata')
                ->description('The id of the object.')
                ->example([]),
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
