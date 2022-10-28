<?php

namespace App\OpenApi\Parameters;

use App\OpenApi\Parameters\Actions\CreateFields;
use App\OpenApi\Parameters\Actions\CreateSort;
use App\OpenApi\Parameters\Actions\CreateTextFilter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class ListEntitiesParameters extends ParametersFactory
{
    /**
     * @return Parameter[]
     */
    public function build(): array
    {
        return [
            // https://spatie.be/docs/laravel-query-builder/v5/features/selecting-fields
            CreateFields::create('entities', 'module', 'type', 'key', 'value'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/filtering
            ...CreateTextFilter::create('module'),
            ...CreateTextFilter::create('type'),
            ...CreateTextFilter::create('key'),
            ...CreateTextFilter::create('value'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/sorting
            CreateSort::create('module', 'type', 'key'),
        ];
    }
}
