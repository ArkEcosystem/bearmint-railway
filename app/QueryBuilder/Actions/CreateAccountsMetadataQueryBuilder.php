<?php

namespace App\QueryBuilder\Actions;

use App\Models\AccountMetadata;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CreateAccountsMetadataQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(AccountMetadata::class)
            ->allowedFields([
                'account_id',
                'key',
                'value',
            ])
            ->allowedFilters([
                AllowedFilter::exact('account_id'),
                ...CreateTextFilters::create('module'),
                ...CreateTextFilters::create('key'),
                ...CreateTextFilters::create('value', true),
            ])
            ->allowedIncludes(['account'])
            ->allowedSorts(['account_id', 'module', 'key', 'value'])
            ->defaultSort('-created_at')
            ->jsonPaginate();
    }
}
