<?php

namespace App\OpenApi\Parameters;

use App\OpenApi\Parameters\Actions\CreateFields;
use App\OpenApi\Parameters\Actions\CreateInclude;
use App\OpenApi\Parameters\Actions\CreateNumberFilter;
use App\OpenApi\Parameters\Actions\CreateSort;
use App\OpenApi\Parameters\Actions\CreateTextFilter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class ListTransactionReceiptsParameters extends ParametersFactory
{
    /**
     * @return Parameter[]
     */
    public function build(): array
    {
        return [
            // https://spatie.be/docs/laravel-query-builder/v5/features/selecting-fields
            CreateFields::create('transaction_receipts', 'transaction_id', 'block_hash', 'block_number', 'logs'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/filtering
            ...CreateNumberFilter::create('transaction_id'),
            ...CreateTextFilter::create('block_hash'),
            ...CreateTextFilter::create('block_number'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/including-relationships
            CreateInclude::create('transaction'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/sorting
            CreateSort::create('transaction_id', 'block_hash', 'block_number'),
        ];
    }
}
