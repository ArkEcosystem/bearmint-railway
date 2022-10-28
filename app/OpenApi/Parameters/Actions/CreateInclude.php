<?php

declare(strict_types=1);

namespace App\OpenApi\Parameters\Actions;

use GoldSpecDigital\ObjectOrientedOAS\Objects\AnyOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

final class CreateInclude
{
    public static function create(...$properties): Parameter
    {
        natsort($properties);

        $schemas = [];

        foreach ($properties as $property) {
            $schemas[] = Schema::string()
                ->title($property)
                ->description("Include the {$property} relationship in the response.");
        }

        return Parameter::query()
            ->name('include')
            ->description('Include the given relationships.')
            ->required(false)
            ->schema(AnyOf::create()->schemas(...$schemas));
    }
}
