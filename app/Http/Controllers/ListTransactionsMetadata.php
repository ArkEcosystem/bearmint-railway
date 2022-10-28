<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionMetadataResource;
use App\OpenApi\Parameters\ListTransactionsMetadataParameters;
use App\OpenApi\Responses\ListTransactionsMetadataResponse;
use App\QueryBuilder\Actions\CreateTransactionsMetadataQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListTransactionsMetadata
{
    /**
     * List transaction metadata
     */
    #[Operation]
    #[Parameters(factory: ListTransactionsMetadataParameters::class)]
    #[Response(factory: ListTransactionsMetadataResponse::class)]
    public function __invoke()
    {
        return TransactionMetadataResource::collection(CreateTransactionsMetadataQueryBuilder::create());
    }
}
