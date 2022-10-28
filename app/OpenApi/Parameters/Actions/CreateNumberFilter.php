<?php

declare(strict_types=1);

namespace App\OpenApi\Parameters\Actions;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

final class CreateNumberFilter
{
    public static function create(string $property): array
    {
        return[
            Parameter::query()
                ->name("filter[$property]")
                ->description("Filter the results where the [$property] field is equal to the given value.")
                ->required(false)
                ->schema(Schema::integer()),
        ];
    }
}
