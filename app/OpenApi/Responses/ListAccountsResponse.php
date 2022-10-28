<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListAccountsResponse extends ResponseFactory
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
                                'id'         => 1,
                                'address'    => 'bear14v4nt0x5jryeagz2x6nad02pk9y6kjlwcav365l20emh8ht2q275ttfg8yq3ch43lpp8z22xyfxqxkpm0f7',
                                'public_key' => 'ab2b35bcd490c99ea04a36a7d6bd41b149ab4beec7591d53ea7e7773dd6a02bd45ad2839011c5eb1f842712946224c03',
                                'name'       => null,
                                'nonce'      => null,
                                'balances'   => [
                                    'BEAR' => '10000002200000000',
                                ],
                                'locked_balances' => [
                                    'BEAR' => '0',
                                ],
                                'stakes'    => null,
                                'validator' => [
                                    'address'   => '5c6b8588b0cccde01c43286b1e698519dd27ceee',
                                    'publicKey' => 'fc795a9741081019b15ef5e34131e3d41bb59fccb99b6bae1419820fd300bfcf',
                                    'power'     => '1',
                                ],
                                'metadata' => [
                                ],
                                'created_at' => '2022-10-09T02:12:24.000000Z',
                                'updated_at' => '2022-10-09T02:12:36.000000Z',
                            ],
                            [
                                'id'         => 3,
                                'address'    => 'bear1jrvszt338cqya8vn4gqj9zduy9kcr6t24t93ewq4askp82mfgn7geekenddygqalqk73e98tj6r4u9mwejl',
                                'public_key' => '90d9012e313e004e9d93aa012289bc216d81e96aaacb1cb815ec2c13ab6944fc8ce6d99b5a4403bf05bd1c94eb96875e',
                                'name'       => null,
                                'nonce'      => 1,
                                'balances'   => [
                                    'BEAR' => '9999999900000000',
                                ],
                                'locked_balances' => [
                                    'BEAR' => '0',
                                ],
                                'stakes'    => null,
                                'validator' => null,
                                'metadata'  => [
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                        ]),
                        Schema::object('links')->example([
                            'first' => '/api/accounts?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'last'  => '/api/accounts?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev'  => '/api/accounts?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'next'  => '/api/accounts?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                        ]),
                        Schema::object('meta')->example([
                            'path'        => '/api/accounts',
                            'per_page'    => 100,
                            'next_cursor' => 'eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev_cursor' => 'eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                        ]),
                    )
                )
            );
    }
}
