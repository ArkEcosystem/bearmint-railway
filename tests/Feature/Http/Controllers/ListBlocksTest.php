<?php

use App\Models\Block;
use Illuminate\Testing\Fluent\AssertableJson;

it('should list all records', function () {
    Block::factory(100)->create();

    $this
        ->get('/api/blocks', [])
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
    $data = Block::factory(100)->create();

    $this
        ->get('/api/blocks?'.http_build_query([
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
    Block::factory(100)->create();

    $this
        ->get('/api/blocks?'.http_build_query([
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
