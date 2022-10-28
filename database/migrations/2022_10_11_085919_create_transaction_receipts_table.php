<?php

use App\Models\Transaction;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_receipts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Transaction::class)->unique();
            $table->string('block_hash')->index();
            $table->bigInteger('block_number')->index();
            $table->jsonb('logs');
            $table->timestamps();
        });
    }
};
