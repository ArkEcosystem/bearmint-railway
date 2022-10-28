<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListTransactionsMetadataResponse extends ResponseFactory
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
                                'id'             => 1,
                                'transaction_id' => 1,
                                'module'         => '@bearmint/bep-126',
                                'key'            => 'id',
                                'value'          => [
                                    'id' => '47be426fe6373cf104636a38e57f82624cb44b6389e2e954887c4a6be9921535',
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'             => 2,
                                'transaction_id' => 1,
                                'module'         => '@bearmint/bep-126',
                                'key'            => 'collection',
                                'value'          => [
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
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'             => 3,
                                'transaction_id' => 2,
                                'module'         => '@bearmint/bep-126',
                                'key'            => 'collection',
                                'value'          => [
                                    'id'        => '47be426fe6373cf104636a38e57f82624cb44b6389e2e954887c4a6be9921535',
                                    'name'      => '41848b4314b2-43bf-819d-41ae21a4b763',
                                    'symbol'    => 'd6b96b8b9677-4669-a0aa-8b74b545d611',
                                    'uriPrefix' => 'https://bearmint.com/',
                                    'uriSuffix' => '.json',
                                    'tokens'    => [
                                        'befaffab63b43b4689f2273b32c969abcb9b03af7902d523181e2be7b5b521f4',
                                    ],
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
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'             => 4,
                                'transaction_id' => 2,
                                'module'         => '@bearmint/bep-131',
                                'key'            => 'id',
                                'value'          => [
                                    'id' => 1,
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'             => 5,
                                'transaction_id' => 2,
                                'module'         => '@bearmint/bep-131',
                                'key'            => 'token',
                                'value'          => [
                                    'id'         => 1,
                                    'hash'       => 'befaffab63b43b4689f2273b32c969abcb9b03af7902d523181e2be7b5b521f4',
                                    'collection' => '47be426fe6373cf104636a38e57f82624cb44b6389e2e954887c4a6be9921535',
                                    'owner'      => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'             => 6,
                                'transaction_id' => 2,
                                'module'         => '@bearmint/bep-131',
                                'key'            => 'hash',
                                'value'          => [
                                    'hash' => 'befaffab63b43b4689f2273b32c969abcb9b03af7902d523181e2be7b5b521f4',
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                        ]),
                        Schema::object('links')->example([
                            'first' => '/api/transactions/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'last'  => '/api/transactions/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev'  => '/api/transactions/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'next'  => '/api/transactions/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                        ]),
                        Schema::object('meta')->example([
                            'path'        => '/api/transactions/metadata',
                            'per_page'    => 100,
                            'next_cursor' => 'eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev_cursor' => 'eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                        ]),
                    )
                )
            );
    }
}
