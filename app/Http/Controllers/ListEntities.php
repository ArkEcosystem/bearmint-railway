<?php

namespace App\Http\Controllers;

use App\Http\Resources\EntityResource;
use App\OpenApi\Parameters\ListEntitiesParameters;
use App\OpenApi\Responses\ListEntitiesResponse;
use App\QueryBuilder\Actions\CreateEntitiesQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListEntities
{
    /**
     * List entities
     */
    #[Operation]
    #[Parameters(factory: ListEntitiesParameters::class)]
    #[Response(factory: ListEntitiesResponse::class)]
    public function __invoke()
    {
        return EntityResource::collection(CreateEntitiesQueryBuilder::create());
    }
}
