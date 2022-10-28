<?php

namespace App\QueryBuilder\Actions;

use App\Models\Account;
use App\QueryBuilder\Filters\Builders\CreateRangeFilters;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\QueryBuilder;

class CreateAccountsQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(Account::class)
            ->allowedFields([
                'address',
                'public_key',
                'name',
                'nonce',
                'balances',
                'locked_balances',
                'stakes',
                'metadata',
                'validator',
            ])
            ->allowedFilters([
                ...CreateTextFilters::create('address'),
                ...CreateTextFilters::create('public_key'),
                ...CreateTextFilters::create('name'),
                ...CreateRangeFilters::create('nonce'),
                ...CreateTextFilters::create('balances'),
                ...CreateTextFilters::create('locked_balances'),
                ...CreateTextFilters::create('stakes'),
                ...CreateTextFilters::create('metadata'),
                ...CreateTextFilters::create('validator.address', true),
                ...CreateTextFilters::create('validator.publicKey', true),
                ...CreateRangeFilters::create('validator.power', true),
            ])
            ->allowedIncludes(['metadata'])
            ->allowedSorts(['address', 'public_key', 'name'])
            ->defaultSort('address')
            ->jsonPaginate();
    }
}
