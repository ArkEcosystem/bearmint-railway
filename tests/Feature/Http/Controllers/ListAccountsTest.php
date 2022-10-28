<?php

use App\Models\Account;
use Illuminate\Testing\Fluent\AssertableJson;

it('should list all records', function () {
    Account::factory(100)->create();

    $this
        ->get('/api/accounts', [])
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
    $data = Account::factory(100)->create();

    $this
        ->get('/api/accounts?'.http_build_query([
            'filter[address]' => $data[0]->address,
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
    Account::factory(100)->create();

    $this
        ->get('/api/accounts?'.http_build_query([
            'fields' => 'address',
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
                '*' => ['address'],
            ],
        ]);
});
