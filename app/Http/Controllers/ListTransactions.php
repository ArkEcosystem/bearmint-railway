<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\OpenApi\Parameters\ListTransactionsParameters;
use App\OpenApi\Responses\ListTransactionsResponse;
use App\QueryBuilder\Actions\CreateTransactionsQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListTransactions
{
    /**
     * List transactions
     */
    #[Operation]
    #[Parameters(factory: ListTransactionsParameters::class)]
    #[Response(factory: ListTransactionsResponse::class)]
    public function __invoke()
    {
        return TransactionResource::collection(CreateTransactionsQueryBuilder::create());
    }
}
