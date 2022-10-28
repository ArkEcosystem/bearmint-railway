<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters;

use Spatie\QueryBuilder\Filters\Filter;

final class LessThanOrEqualToFilter implements Filter
{
    use Concerns\InvokesWithOperator;

    protected string $operator = '<=';
}
