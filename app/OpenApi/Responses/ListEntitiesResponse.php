<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListEntitiesResponse extends ResponseFactory
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
                                'id'     => 1,
                                'module' => '@bearmint/bep-126',
                                'type'   => 'collection',
                                'key'    => '51e24f910c4b539280a8e0c8e3fc8119312d236aea36428165ab11f2c1ce2f18',
                                'value'  => [
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
                                'created_at' => '2022-10-12T03:02:06.000000Z',
                                'updated_at' => '2022-10-12T03:02:06.000000Z',
                            ],
                            [
                                'id'     => 2,
                                'module' => '@bearmint/bep-131',
                                'type'   => 'token',
                                'key'    => '3d262af20ff9158e8194eadb43a06609dd82dfc3d515eb539cb3e945655538cb',
                                'value'  => [
                                    'id'         => 1,
                                    'hash'       => '3d262af20ff9158e8194eadb43a06609dd82dfc3d515eb539cb3e945655538cb',
                                    'collection' => '51e24f910c4b539280a8e0c8e3fc8119312d236aea36428165ab11f2c1ce2f18',
                                    'owner'      => 'bear1j4vvs55nfkjffkewadw5atzyqsmmtvtj2rcwjcvk2qfc85k5w52j545nzgez4hsw67h9vzyu958rj3g20zt',
                                ],
                                'created_at' => '2022-10-12T03:02:06.000000Z',
                                'updated_at' => '2022-10-12T03:02:06.000000Z',
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
