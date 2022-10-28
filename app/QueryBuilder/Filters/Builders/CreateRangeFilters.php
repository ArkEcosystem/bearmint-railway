<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters\Builders;

use App\QueryBuilder\Filters\ExactFilter;
use App\QueryBuilder\Filters\GreaterThanFilter;
use App\QueryBuilder\Filters\GreaterThanOrEqualToFilter;
use App\QueryBuilder\Filters\LessThanFilter;
use App\QueryBuilder\Filters\LessThanOrEqualToFilter;
use Spatie\QueryBuilder\AllowedFilter;

final class CreateRangeFilters
{
    public static function create(string $property, bool $asJson = false, ?string $query = null): array
    {
        return[
            AllowedFilter::custom($property, new ExactFilter($asJson)),
            AllowedFilter::custom("$property.gt", new GreaterThanFilter($asJson, $query)),
            AllowedFilter::custom("$property.gte", new GreaterThanOrEqualToFilter($asJson, $query)),
            AllowedFilter::custom("$property.lt", new LessThanFilter($asJson, $query)),
            AllowedFilter::custom("$property.lte", new LessThanOrEqualToFilter($asJson, $query)),
        ];
    }
}
