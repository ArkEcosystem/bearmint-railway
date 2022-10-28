<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListTransactionsResponse extends ResponseFactory
{
    public function build(): Response
    {
        return Response::ok()
            ->description('Success')
            ->content(
                MediaType::json()->schema(
                    Schema::object()->properties(
                        Schema::array('data')->example([
                            [
                                'id'        => 1,
                                'block_id'  => 2,
                                'hash'      => '3a84b182c61b7cb0554a4134416998e86b9440e943ad085e2c21fccdc472d079',
                                'sender'    => '90d9012e313e004e9d93aa012289bc216d81e96aaacb1cb815ec2c13ab6944fc8ce6d99b5a4403bf05bd1c94eb96875e',
                                'recipient' => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                                'gas'       => 100000000,
                                'nonce'     => 1,
                                'signature' => '10c41c357456a96375f60dad79cbfbe834b5357c2c17653145e6a156fc6ce7391f77b9c4e17f26374cbfc1a1777d714a0fe415c2e79c8ed33768134ea3405bbe958563dfa3dfa87fc07e75f036d2debd32710718d4a7ff497db2b41e31b0bee2131367d58d8fc8d7e6503b9fb9ffd592ea4198fab4aa5d252b89dfafa5ee9cb606825b66a98b5077a9e904141d5924ea087a230884a6810c2c9f4e5ee4a7e49bf5cc43476f71bc9620fd9a3364779bacd05706838750b552c59286352a91224a',
                                'version'   => '1.0.0',
                                'message'   => [
                                    'handler' => '@bearmint/bep-126',
                                    'version' => '0.0.0',
                                    'network' => '9a17e870d800a6c9cbc585355aff04c13de2770cc15bc88fefa1836d10092d4f',
                                    'content' => '0aab010a233431383438623433313462322d343362662d383139642d34316165323161346237363312236436623936623862393637372d343636392d613061612d3862373462353435643631311a1568747470733a2f2f626561726d696e742e636f6d2f22052e6a736f6e2a13121140626561726d696e742f6265702d3134352a150801121140626561726d696e742f6265702d3134352a150802121140626561726d696e742f6265702d313435',
                                ],
                                'message_deserialized' => [
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
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'        => 2,
                                'block_id'  => 4,
                                'hash'      => 'b0cb57687f8ccb8e2f430064824a2f954ab59e161b8f7aa81f84dbdf1aa034f3',
                                'sender'    => '90d9012e313e004e9d93aa012289bc216d81e96aaacb1cb815ec2c13ab6944fc8ce6d99b5a4403bf05bd1c94eb96875e',
                                'recipient' => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                                'gas'       => 100000000,
                                'nonce'     => 2,
                                'signature' => '08f031252e5027f7682c2de796233f8f863b1828195451cec37a38dab7433d685ad0a7644215bdb6d26477e19d6e01260e0ac634a6fb27f1665009ad0943a31ff528d67625d94d485c474b24e4bf8cf732eaf39958e4892f599437e3fe108258162443869843474df1938937ad6e94392d8cc0d3bba6a62bf7285340d955ad1b88d59e5f0eaa312dd3f65658d6bb48490072b2801790f98f858d44ecac87afd3a721b158010df129734467d3eefb27b95f8ebadfd3c5c4d1d4ccaa45060b06a6',
                                'version'   => '1.0.0',
                                'message'   => [
                                    'handler' => '@bearmint/bep-131',
                                    'version' => '0.0.0',
                                    'network' => '9a17e870d800a6c9cbc585355aff04c13de2770cc15bc88fefa1836d10092d4f',
                                    'content' => '0a9c010a4034376265343236666536333733636631303436333661333865353766383236323463623434623633383965326539353438383763346136626539393231353335125862656172316a7276737a743333386371796138766e3467716a397a647579396b6372367432347439336577713461736b7038326d66676e376765656b656e6464796771616c716b3733653938746a36723475396d77656a6c',
                                ],
                                'message_deserialized' => [
                                    'ops' => [
                                        [
                                            'hash'      => '47be426fe6373cf104636a38e57f82624cb44b6389e2e954887c4a6be9921535',
                                            'recipient' => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                                        ],
                                    ],
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                        ]),
                        Schema::object('links')->example([
                            'first' => '/api/transactions?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'last'  => '/api/transactions?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev'  => '/api/transactions?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'next'  => '/api/transactions?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                        ]),
                        Schema::object('meta')->example([
                            'path'        => '/api/transactions',
                            'per_page'    => 100,
                            'next_cursor' => 'eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev_cursor' => 'eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                        ]),
                    )
                )
            );
    }
}
