<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListAccountsMetadataResponse extends ResponseFactory
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
                                'account_id' => 3,
                                'module'     => '@bearmint/bep-131',
                                'key'        => 'inventory',
                                'value'      => [
                                    'befaffab63b43b4689f2273b32c969abcb9b03af7902d523181e2be7b5b521f4',
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                            [
                                'id'         => 2,
                                'account_id' => 3,
                                'module'     => '@bearmint/bep-126',
                                'key'        => 'inventory',
                                'value'      => [
                                    '47be426fe6373cf104636a38e57f82624cb44b6389e2e954887c4a6be9921535',
                                ],
                                'created_at' => '2022-10-09T02:12:30.000000Z',
                                'updated_at' => '2022-10-09T02:12:30.000000Z',
                            ],
                        ]),
                        Schema::object('links')->example([
                            'first' => '/api/accounts/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'last'  => '/api/accounts/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev'  => '/api/accounts/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'next'  => '/api/accounts/metadata?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                        ]),
                        Schema::object('meta')->example([
                            'path'        => '/api/accounts/metadata',
                            'per_page'    => 100,
                            'next_cursor' => 'eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev_cursor' => 'eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                        ]),
                    )
                )
            );
    }
}
