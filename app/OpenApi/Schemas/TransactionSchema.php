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

class TransactionSchema extends SchemaFactory implements Reusable
{
    /**
     * @return AllOf|OneOf|AnyOf|Not|Schema
     */
    public function build(): SchemaContract
    {
        return Schema::object('Transaction')->properties(
            Schema::integer('id')
                ->description('The internal id of the object.')
                ->example(1),
            Schema::integer('block_id')
                ->description('The id of the block associated with the object.')
                ->example(2),
            Schema::string('hash')
                ->description('The unique hash of the object.')
                ->example('3a84b182c61b7cb0554a4134416998e86b9440e943ad085e2c21fccdc472d079'),
            Schema::string('sender')
                ->description('The public key of the recipient associated with the object.')
                ->example('90d9012e313e004e9d93aa012289bc216d81e96aaacb1cb815ec2c13ab6944fc8ce6d99b5a4403bf05bd1c94eb96875e'),
            Schema::string('recipient')
                ->description('The address of the recipient associated with the object.')
                ->example('bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl'),
            Schema::integer('gas')
                ->description('The amount of gas of the object.')
                ->example(100000000),
            Schema::integer('nonce')
                ->description('The nonce of the account associated with the object.')
                ->example(1),
            Schema::string('signature')
                ->description('The signature of the object.')
                ->example('10c41c357456a96375f60dad79cbfbe834b5357c2c17653145e6a156fc6ce7391f77b9c4e17f26374cbfc1a1777d714a0fe415c2e79c8ed33768134ea3405bbe958563dfa3dfa87fc07e75f036d2debd32710718d4a7ff497db2b41e31b0bee2131367d58d8fc8d7e6503b9fb9ffd592ea4198fab4aa5d252b89dfafa5ee9cb606825b66a98b5077a9e904141d5924ea087a230884a6810c2c9f4e5ee4a7e49bf5cc43476f71bc9620fd9a3364779bacd05706838750b552c59286352a91224a'),
            Schema::string('version')
                ->description('The version of the object.')
                ->example('1.0.0'),
            Schema::array('message')
                ->description('The message of the object.')
                ->example([
                    'handler' => '@bearmint/bep-126',
                    'version' => '0.0.0',
                    'network' => '9a17e870d800a6c9cbc585355aff04c13de2770cc15bc88fefa1836d10092d4f',
                    'content' => '0aab010a233431383438623433313462322d343362662d383139642d34316165323161346237363312236436623936623862393637372d343636392d613061612d3862373462353435643631311a1568747470733a2f2f626561726d696e742e636f6d2f22052e6a736f6e2a13121140626561726d696e742f6265702d3134352a150801121140626561726d696e742f6265702d3134352a150802121140626561726d696e742f6265702d313435',
                ]),
            Schema::array('message_deserialized')
                ->description('The deserialized message of the object.')
                ->example([
                    'ops' => [
                        [
                            'name'      => '41848b4314b2-43bf-819d-41ae21a4b763',
                            'symbol'    => 'd6b96b8b9677-4669-a0aa-8b74b545d611',
                            'uriPrefix' => 'https://bearmint.com/',
                            'uriSuffix' => '.json',
                            'policies'  => [
                                [
                                    'type' => 0,
                                    'name' => '@bearmint/bep-145',
                                    'args' => null,
                                ],
                                [
                                    'type' => 1,
                                    'name' => '@bearmint/bep-145',
                                    'args' => null,
                                ],
                                [
                                    'type' => 2,
                                    'name' => '@bearmint/bep-145',
                                    'args' => null,
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
