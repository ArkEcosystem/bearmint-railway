<?php

namespace App\QueryBuilder\Actions;

use App\Models\Transaction;
use App\QueryBuilder\Filters\Builders\CreateRangeFilters;
use App\QueryBuilder\Filters\Builders\CreateTextFilters;
use Spatie\QueryBuilder\QueryBuilder;

class CreateTransactionsQueryBuilder
{
    public static function create()
    {
        return QueryBuilder::for(Transaction::class)
            ->allowedFields([
                'hash',
                'sender',
                'recipient',
                'gas',
                'nonce',
                'signature',
                'version',
                'message',
                'message_deserialized',
            ])
            ->allowedFilters([
                ...CreateTextFilters::create('hash'),
                ...CreateTextFilters::create('sender'),
                ...CreateTextFilters::create('recipient'),
                ...CreateRangeFilters::create('gas'),
                ...CreateRangeFilters::create('nonce'),
                ...CreateTextFilters::create('signature'),
                ...CreateTextFilters::create('version'),
                ...CreateTextFilters::create('message.handler', true),
                ...CreateTextFilters::create('message.version', true),
                ...CreateTextFilters::create('message.network', true),
                ...CreateTextFilters::create('message.content', true),
                ...CreateTextFilters::create('message_deserialized', true),
            ])
            ->allowedIncludes(['block', 'metadata', 'receipt', 'recipient', 'sender'])
            ->allowedSorts(['sender', 'recipient', 'gas', 'nonce', 'version'])
            ->defaultSort('-created_at')
            ->jsonPaginate();
    }
}
