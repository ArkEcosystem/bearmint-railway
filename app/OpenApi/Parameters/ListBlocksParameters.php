<?php

namespace App\OpenApi\Parameters;

use App\OpenApi\Parameters\Actions\CreateFields;
use App\OpenApi\Parameters\Actions\CreateInclude;
use App\OpenApi\Parameters\Actions\CreateNumberFilter;
use App\OpenApi\Parameters\Actions\CreateSort;
use App\OpenApi\Parameters\Actions\CreateTextFilter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use Vyuldashev\LaravelOpenApi\Factories\ParametersFactory;

class ListBlocksParameters extends ParametersFactory
{
    /**
     * @return Parameter[]
     */
    public function build(): array
    {
        return [
            // https://spatie.be/docs/laravel-query-builder/v5/features/selecting-fields
            CreateFields::create('blocks', 'hash', 'height', 'header', 'byzantine_validators', 'last_commit_info'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/filtering
            ...CreateTextFilter::create('hash'),
            ...CreateNumberFilter::create('height'),
            ...CreateNumberFilter::create('header.version.block'),
            ...CreateTextFilter::create('header.chainId'),
            ...CreateNumberFilter::create('header.height'),
            ...CreateTextFilter::create('header.time'),
            ...CreateTextFilter::create('header.lastBlockId.hash'),
            ...CreateNumberFilter::create('header.lastBlockId.partSetHeader.total'),
            ...CreateTextFilter::create('header.lastBlockId.partSetHeader.hash'),
            ...CreateTextFilter::create('header.lastCommitHash'),
            ...CreateTextFilter::create('header.dataHash'),
            ...CreateTextFilter::create('header.validatorsHash'),
            ...CreateTextFilter::create('header.nextValidatorsHash'),
            ...CreateTextFilter::create('header.consensusHash'),
            ...CreateTextFilter::create('header.appHash'),
            ...CreateTextFilter::create('header.lastResultsHash'),
            ...CreateTextFilter::create('header.evidenceHash'),
            ...CreateTextFilter::create('header.proposerAddress'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/including-relationships
            CreateInclude::create('transactions'),
            // https://spatie.be/docs/laravel-query-builder/v5/features/sorting
            CreateSort::create('hash', 'height'),
        ];
    }
}
