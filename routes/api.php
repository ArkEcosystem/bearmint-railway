<?php

use App\Http\Controllers\HandleWebhook;
use App\Http\Controllers\ListAccounts;
use App\Http\Controllers\ListAccountsMetadata;
use App\Http\Controllers\ListBlocks;
use App\Http\Controllers\ListEntities;
use App\Http\Controllers\ListTransactionReceipts;
use App\Http\Controllers\ListTransactions;
use App\Http\Controllers\ListTransactionsMetadata;
use App\Http\Controllers\ListValidatorUpdates;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/', HandleWebhook::class)->middleware('auth:sanctum');

Route::middleware('throttle:api')->group(function () {
    Route::get('/accounts', ListAccounts::class);
    Route::get('/accounts/metadata', ListAccountsMetadata::class);
    Route::get('/blocks', ListBlocks::class);
    Route::get('/entities', ListEntities::class);
    Route::get('/transactions', ListTransactions::class);
    Route::get('/transactions/metadata', ListTransactionsMetadata::class);
    Route::get('/transactions/receipts', ListTransactionReceipts::class);
    Route::get('/validators/updates', ListValidatorUpdates::class);
});
