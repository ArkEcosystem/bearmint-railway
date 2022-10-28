<?php

declare(strict_types=1);

namespace App\OpenApi\Parameters\Actions;

use GoldSpecDigital\ObjectOrientedOAS\Objects\AnyOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

final class CreateSort
{
    public static function create(...$properties): Parameter
    {
        natsort($properties);

        $schemas = [];

        foreach ($properties as $property) {
            $schemas[] = Schema::string()
                ->title($property)
                ->description("Sort the results by the {$property} field in ascending direction.");

            $schemas[] = Schema::string()
                ->title("-$property")
                ->description("Sort the results by the {$property} field in descending direction.");
        }

        return Parameter::query()
            ->name('sort')
            ->description('Sort the results by the given field and direction.')
            ->required(false)
            ->schema(AnyOf::create()->schemas(...$schemas));
    }
}
