<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

final class LikeFilter implements Filter
{
    use Concerns\InteractsWithJson;
    use Concerns\ParsesProperty;

    /**
     * @param  mixed  $value
     */
    public function __invoke(Builder $query, $value, string $property): Builder
    {
        return $query->where($this->property($property), 'like', '%'.$value.'%');
    }
}
