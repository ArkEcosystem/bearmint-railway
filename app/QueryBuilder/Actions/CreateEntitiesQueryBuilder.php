<?php

namespace App\QueryBuilder\Actions;

use App\Models\Entity;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\QueryBuilder;

class CreateEntitiesQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(Entity::class)
            ->allowedFields([
                'module',
                'type',
                'key',
                'value',
            ])
            ->allowedFilters([
                ...CreateTextFilters::create('module'),
                ...CreateTextFilters::create('type'),
                ...CreateTextFilters::create('key'),
                ...CreateTextFilters::create('value', true),
            ])
            ->allowedSorts(['module', 'type', 'key'])
            ->defaultSort('-created_at')
            ->jsonPaginate();
    }
}
