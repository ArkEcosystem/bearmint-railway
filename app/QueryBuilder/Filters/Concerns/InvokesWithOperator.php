<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait InvokesWithOperator
{
    use InteractsWithJson;
    use ParsesProperty;

    /**
     * @param  mixed  $value
     */
    public function __invoke(Builder $query, $value, string $property): Builder
    {
        return $query->where($this->property($property), $this->operator, $value);
    }
}
