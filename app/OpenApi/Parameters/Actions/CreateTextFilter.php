<?php

declare(strict_types=1);

namespace App\OpenApi\Parameters\Actions;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

final class CreateTextFilter
{
    public static function create(string $property): array
    {
        return[
            Parameter::query()
                ->name("filter[$property]")
                ->description("Filter the results where the [$property] field is equal to the given value.")
                ->required(false)
                ->schema(Schema::string()),
            Parameter::query()
                ->name("filter[$property.neq]")
                ->description("Filter the results where the [$property] field is not equal to the given value.")
                ->required(false)
                ->schema(Schema::string()),
            Parameter::query()
                ->name("filter[$property.like]")
                ->description("Filter the results where the [$property] field is similar to the given case sensitive value.")
                ->required(false)
                ->schema(Schema::string()),
            Parameter::query()
                ->name("filter[$property.ilike]")
                ->description("Filter the results where the [$property] field is similar to the given case insensitive value.")
                ->required(false)
                ->schema(Schema::string()),
        ];
    }
}
