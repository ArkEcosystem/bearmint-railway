<?php

namespace App\OpenApi\Parameters;

use App\OpenApi\Parameters\Actions\CreateFields;
use App\OpenApi\Parameters\Actions\CreateInclude;
use App\OpenApi\Parameters\Actions\CreateNumberFilter;
use App\OpenApi\Parameters\Actions\CreateSort;
use App\OpenApi\Parameters\Actions\CreateTextFilter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class ListAccountsParameters extends ParametersFactory
{
    /**
     * @return Parameter[]
     */
    public function build(): array
    {
        return [
            // https://spatie.be/docs/laravel-query-builder/v5/features/selecting-fields
            CreateFields::create('accounts', 'address', 'public_key', 'name', 'nonce', 'balances', 'locked_balances', 'stakes', 'metadata', 'validator'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/filtering
            ...CreateTextFilter::create('address'),
            ...CreateTextFilter::create('public_key'),
            ...CreateTextFilter::create('name'),
            ...CreateNumberFilter::create('nonce'),
            ...CreateTextFilter::create('validator.address'),
            ...CreateTextFilter::create('validator.publicKey'),
            ...CreateTextFilter::create('validator.power'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/including-relationships
            CreateInclude::create('metadata'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/sorting
            CreateSort::create('address', 'public_key', 'name'),
        ];
    }
}
