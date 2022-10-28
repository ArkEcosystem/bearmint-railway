<?php

namespace App\OpenApi\Responses;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListBlocksResponse extends ResponseFactory
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
                                'hash'   => 'gm4XrAp6aJ/+oKAcnCoJwafhNJ0HD20DWg1epsEG6+o=',
                                'height' => 1,
                                'header' => [
                                    'version' => [
                                        'block' => '11',
                                    ],
                                    'chainId'     => 'bearmint-testnet',
                                    'height'      => '1',
                                    'time'        => '2022-10-09T02:12:21.361Z',
                                    'lastBlockId' => [
                                        'partSetHeader' => [
                                            'hash'          => 'gm4XrAp6aJ/+oKAcnCoJwafhNJ0HD20DWg1epsEG6+o=',
                                            'partSetHeader' => [
                                                'total' => 1,
                                                'hash'  => 'FASNnBqJ2g7aBGvQFoPdLRXhO6C/lbl+VNqYM0GTgps=',
                                            ],
                                        ],
                                    ],
                                    'lastCommitHash'     => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                                    'dataHash'           => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                                    'validatorsHash'     => 'ayn8KqIdjdg0za9pl/QPzJbOaSAkVIJWCXrctRWaR7s=',
                                    'nextValidatorsHash' => 'ayn8KqIdjdg0za9pl/QPzJbOaSAkVIJWCXrctRWaR7s=',
                                    'consensusHash'      => 'BICRvH3cKD93v7+R1zxE2ljD34qcvIZ0Bdi389qtoi8=',
                                    'appHash'            => 'mhfocNgApsnLxYU1Wv8EwT3idwzBW8iP76GDbRAJLU8=',
                                    'lastResultsHash'    => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                                    'evidenceHash'       => '47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=',
                                    'proposerAddress'    => 'XGuFiLDMzeAcQyhrHmmFGd0nzu4=',
                                ],
                                'byzantine_validators' => null,
                                'last_commit_info'     => [
                                    'votes' => [
                                        [
                                            'validator' => [
                                                'address' => 'XGuFiLDMzeAcQyhrHmmFGd0nzu4=',
                                                'power'   => '1',
                                            ],
                                            'signedLastBlock' => true,
                                        ],
                                    ],
                                ],
                                'created_at' => '2022-10-09T02:12:24.000000Z',
                                'updated_at' => '2022-10-09T02:12:24.000000Z',
                            ],
                        ]),
                        Schema::object('links')->example([
                            'first' => '/api/blocks?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'last'  => '/api/blocks?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev'  => '/api/blocks?page%5Bcursor%5D=eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                            'next'  => '/api/blocks?page%5Bcursor%5D=eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                        ]),
                        Schema::object('meta')->example([
                            'path'        => '/api/blocks',
                            'per_page'    => 100,
                            'next_cursor' => 'eyJoZWlnaHQiOjExLCJfcG9pbnRzVG9OZXh0SXRlbXMiOnRydWV9',
                            'prev_cursor' => 'eyJoZWlnaHQiOjEwLCJfcG9pbnRzVG9OZXh0SXRlbXMiOmZhbHNlfQ',
                        ]),
                    )
                )
            );
    }
}
