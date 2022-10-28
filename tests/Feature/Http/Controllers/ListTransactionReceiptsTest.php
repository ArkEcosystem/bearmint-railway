<?php

use App\Models\TransactionReceipt;
use Illuminate\Testing\Fluent\AssertableJson;

it('should list all records', function () {
    TransactionReceipt::factory(100)->create();

    $this
        ->get('/api/transactions/receipts', [])
        ->assertStatus(200)
        ->assertJson(function (AssertableJson $json) {
            $json
                ->has(3)
                ->has('data', 100)
                ->has('links')
                ->has('meta');
        });
});

it('should filter records', function () {
    $data = TransactionReceipt::factory(100)->create();

    $this
        ->get('/api/transactions/receipts?'.http_build_query([
            'filter[block_hash]' => $data[0]->block_hash,
        ]))
        ->assertStatus(200)
        ->assertJson(function (AssertableJson $json) {
            $json
                ->has(3)
                ->has('data', 1)
                ->has('links')
                ->has('meta');
        });
});

it('should only include requested fields', function () {
    TransactionReceipt::factory(100)->create();

    $this
        ->get('/api/transactions/receipts?'.http_build_query([
            'fields' => 'block_hash',
        ]))
        ->assertStatus(200)
        ->assertJson(function (AssertableJson $json) {
            $json
                ->has(3)
                ->has('data', 100)
                ->has('links')
                ->has('meta');
        })
        ->assertJsonStructure([
            'data' => [
                '*' => ['block_hash'],
            ],
        ]);
});
