<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccountMetadataResource;
use App\OpenApi\Parameters\ListAccountsMetadataParameters;
use App\OpenApi\Responses\ListAccountsMetadataResponse;
use App\QueryBuilder\Actions\CreateAccountsMetadataQueryBuilder;
use Vyuldashev\LaravelOpenApi\Attributes\Operation;
use Vyuldashev\LaravelOpenApi\Attributes\Parameters;
use Vyuldashev\LaravelOpenApi\Attributes\PathItem;
use Vyuldashev\LaravelOpenApi\Attributes\Response;

#[PathItem]
class ListAccountsMetadata
{
    /**
     * List account metadata
     */
    #[Operation]
    #[Parameters(factory: ListAccountsMetadataParameters::class)]
    #[Response(factory: ListAccountsMetadataResponse::class)]
    public function __invoke()
    {
        return AccountMetadataResource::collection(CreateAccountsMetadataQueryBuilder::create());
    }
}
