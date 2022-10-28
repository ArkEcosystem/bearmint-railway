<?php

use App\Models\Transaction;
use Illuminate\Testing\Fluent\AssertableJson;

it('should list all records', function () {
    Transaction::factory(100)->create();

    $this
        ->get('/api/transactions', [])
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
    $data = Transaction::factory(100)->create();

    $this
        ->get('/api/transactions?'.http_build_query([
            'filter[hash]' => $data[0]->hash,
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
    Transaction::factory(100)->create();

    $this
        ->get('/api/transactions?'.http_build_query([
            'fields' => 'hash',
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
                '*' => ['hash'],
            ],
        ]);
});
