<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlockResource;
use App\OpenApi\Parameters\ListBlocksParameters;
use App\OpenApi\Responses\ListBlocksResponse;
use App\QueryBuilder\Actions\CreateBlocksQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListBlocks
{
    /**
     * List blocks
     */
    #[Operation]
    #[Parameters(factory: ListBlocksParameters::class)]
    #[Response(factory: ListBlocksResponse::class)]
    public function __invoke()
    {
        return BlockResource::collection(CreateBlocksQueryBuilder::create());
    }
}
