<?php

namespace App\QueryBuilder\Actions;

use App\Models\TransactionMetadata;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CreateTransactionsMetadataQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(TransactionMetadata::class)
            ->allowedFields([
                'transaction_id',
                'key',
                'value',
            ])
            ->allowedFilters([
                AllowedFilter::exact('transaction_id'),
                ...CreateTextFilters::create('module'),
                ...CreateTextFilters::create('key'),
                ...CreateTextFilters::create('value', true),
            ])
            ->allowedIncludes(['transaction'])
            ->allowedSorts(['transaction_id', 'module', 'key', 'value'])
            ->defaultSort('-created_at')
            ->jsonPaginate();
    }
}
