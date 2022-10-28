<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters;

use Spatie\QueryBuilder\Filters\Filter;

final class ExactFilter implements Filter
{
    use Concerns\InvokesWithOperator;

    protected string $operator = '=';
}
