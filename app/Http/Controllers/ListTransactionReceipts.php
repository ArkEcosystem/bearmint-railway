<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionReceiptResource;
use App\OpenApi\Parameters\ListTransactionReceiptsParameters;
use App\OpenApi\Responses\ListTransactionReceiptsResponse;
use App\QueryBuilder\Actions\CreateTransactionReceiptsQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListTransactionReceipts
{
    /**
     * List transaction receipts
     */
    #[Operation]
    #[Parameters(factory: ListTransactionReceiptsParameters::class)]
    #[Response(factory: ListTransactionReceiptsResponse::class)]
    public function __invoke()
    {
        return TransactionReceiptResource::collection(CreateTransactionReceiptsQueryBuilder::create());
    }
}
