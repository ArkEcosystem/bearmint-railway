<?php

declare(strict_types=1);

namespace App\OpenApi\Parameters\Actions;

use GoldSpecDigital\ObjectOrientedOAS\Objects\AnyOf;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

final class CreateFields
{
    public static function create(string $type, ...$properties): Parameter
    {
        natsort($properties);

        $schemas = [];

        foreach ($properties as $property) {
            $schemas[] = Schema::string()
                ->title($property)
                ->description("Include the {$property} field in the response.");
        }

        return Parameter::query()
            ->name("fields[$type]")
            ->description('Include the given fields in the response.')
            ->required(false)
            ->schema(AnyOf::create()->schemas(...$schemas));
    }
}
