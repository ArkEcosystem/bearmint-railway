<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccountResource;
use App\OpenApi\Parameters\ListAccountsParameters;
use App\OpenApi\Responses\ListAccountsResponse;
use App\QueryBuilder\Actions\CreateAccountsQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListAccounts
{
    /**
     * List accounts
     */
    #[Operation]
    #[Parameters(factory: ListAccountsParameters::class)]
    #[Response(factory: ListAccountsResponse::class)]
    public function __invoke()
    {
        return AccountResource::collection(CreateAccountsQueryBuilder::create());
    }
}
