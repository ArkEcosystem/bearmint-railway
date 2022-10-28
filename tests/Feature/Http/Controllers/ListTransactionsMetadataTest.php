<?php

use App\Models\TransactionMetadata;
use Illuminate\Testing\Fluent\AssertableJson;

it('should list all records', function () {
    TransactionMetadata::factory(100)->create();

    $this
        ->get('/api/transactions/metadata', [])
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
    $data = TransactionMetadata::factory(100)->create();

    $this
        ->get('/api/transactions/metadata?'.http_build_query([
            'filter[key]' => $data[0]->key,
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
    TransactionMetadata::factory(100)->create();

    $this
        ->get('/api/transactions/metadata?'.http_build_query([
            'fields' => 'key',
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
                '*' => ['key'],
            ],
        ]);
});
