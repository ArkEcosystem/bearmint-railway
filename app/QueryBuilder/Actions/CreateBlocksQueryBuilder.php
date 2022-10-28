<?php

namespace App\QueryBuilder\Actions;

use App\Models\Block;
use App\QueryBuilder\Filters\Builders\CreateRangeFilters;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\QueryBuilder;

class CreateBlocksQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(Block::class)
            ->allowedFields([
                'hash',
                'height',
                'header',
                'byzantine_validators',
                'last_commit_info',
            ])
            ->allowedFilters([
                ...CreateTextFilters::create('hash'),
                ...CreateRangeFilters::create('height'),
                ...CreateTextFilters::create('header', true),
                ...CreateTextFilters::create('byzantine_validators', true),
                ...CreateTextFilters::create('last_commit_info', true),
            ])
            ->allowedIncludes(['transactions'])
            ->allowedSorts(['hash', 'height'])
            ->defaultSort('-height')
            ->jsonPaginate();
    }
}
