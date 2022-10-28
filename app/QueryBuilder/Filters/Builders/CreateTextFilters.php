<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters\Builders;

use App\QueryBuilder\Filters\ExactFilter;
use App\QueryBuilder\Filters\LikeFilter;
use App\QueryBuilder\Filters\LikeInsensitiveFilter;
use App\QueryBuilder\Filters\NotEqualFilter;
use Spatie\QueryBuilder\AllowedFilter;

final class CreateTextFilters
{
    public static function create(string $property, bool $asJson = false): array
    {
        return[
            AllowedFilter::custom($property, new ExactFilter($asJson)),
            AllowedFilter::custom("$property.neq", new NotEqualFilter($asJson)),
            AllowedFilter::custom("$property.like", new LikeFilter($asJson)),
            AllowedFilter::custom("$property.ilike", new LikeInsensitiveFilter($asJson)),
        ];
    }
}
