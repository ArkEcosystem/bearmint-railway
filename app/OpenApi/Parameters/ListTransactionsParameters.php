<?php

namespace App\OpenApi\Parameters;

use App\OpenApi\Parameters\Actions\CreateFields;
use App\OpenApi\Parameters\Actions\CreateInclude;
use App\OpenApi\Parameters\Actions\CreateNumberFilter;
use App\OpenApi\Parameters\Actions\CreateSort;
use App\OpenApi\Parameters\Actions\CreateTextFilter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class ListTransactionsParameters extends ParametersFactory
{
    /**
     * @return Parameter[]
     */
    public function build(): array
    {
        return [
            // https://spatie.be/docs/laravel-query-builder/v5/features/selecting-fields
            CreateFields::create('accounts', 'hash', 'sender', 'recipient', 'gas', 'nonce', 'signature', 'version', 'message', 'message_deserialized'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/filtering
            ...CreateTextFilter::create('hash'),
            ...CreateTextFilter::create('sender'),
            ...CreateTextFilter::create('recipient'),
            ...CreateNumberFilter::create('gas'),
            ...CreateNumberFilter::create('nonce'),
            ...CreateTextFilter::create('signature'),
            ...CreateTextFilter::create('version'),
            ...CreateTextFilter::create('message.handler'),
            ...CreateTextFilter::create('message.version'),
            ...CreateTextFilter::create('message.network'),
            ...CreateTextFilter::create('message.content'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/including-relationships
            CreateInclude::create('block', 'metadata', 'receipt', 'recipient', 'sender'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/sorting
            CreateSort::create('sender', 'recipient', 'gas', 'nonce', 'version'),
        ];
    }
}
