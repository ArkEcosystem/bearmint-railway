<?php

namespace App\Http\Controllers;

use App\Http\Resources\ValidatorUpdateResource;
use App\OpenApi\Parameters\ListValidatorUpdatesParameters;
use App\OpenApi\Responses\ListValidatorUpdatesResponse;
use App\QueryBuilder\Actions\CreateValidatorUpdatesQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListValidatorUpdates
{
    /**
     * List validator updates
     */
    #[Operation]
    #[Parameters(factory: ListValidatorUpdatesParameters::class)]
    #[Response(factory: ListValidatorUpdatesResponse::class)]
    public function __invoke()
    {
        return ValidatorUpdateResource::collection(CreateValidatorUpdatesQueryBuilder::create());
    }
}
