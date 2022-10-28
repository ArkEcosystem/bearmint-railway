<?php

namespace App\QueryBuilder\Actions;

use App\Models\ValidatorUpdate;
use App\QueryBuilder\Filters\Builders\CreateRangeFilters;
use Spatie\QueryBuilder\QueryBuilder;

class CreateValidatorUpdatesQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(ValidatorUpdate::class)
            ->allowedFields([
                'block_id',
                'value',
            ])
            ->allowedFilters([
                ...CreateRangeFilters::create('block_id'),
            ])
            ->allowedIncludes(['block'])
            ->allowedSorts(['block_id'])
            ->defaultSort('-created_at')
            ->jsonPaginate();
    }
}
