<?php

declare(strict_types=1);

namespace App\QueryBuilder\Filters\Concerns;

use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;

trait ParsesProperty
{
    /**
     * @return Expression|string
     */
    private function property(string $property)
    {
        if (! is_null($this->property)) {
            return DB::raw($this->property);
        }

        $segments = explode('.', $property);

        if ($this->asJson) {
            // array_pop($segments);

            return str_replace('.', '->', implode('.', $segments));
        }

        return $segments[0];
    }
}
