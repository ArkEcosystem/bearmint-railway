<?php

namespace App\QueryBuilder\Actions;

use App\Models\TransactionReceipt;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CreateTransactionReceiptsQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(TransactionReceipt::class)
            ->allowedFields([
                'transaction_id',
                'block_hash',
                'block_number',
                'logs',
            ])
            ->allowedFilters([
                AllowedFilter::exact('transaction_id'),
                ...CreateTextFilters::create('block_hash'),
                ...CreateTextFilters::create('block_number'),
            ])
            ->allowedIncludes(['transaction'])
            ->allowedSorts(['transaction_id', 'block_hash', 'block_number'])
            ->defaultSort('-created_at')
            ->jsonPaginate();
    }
}
