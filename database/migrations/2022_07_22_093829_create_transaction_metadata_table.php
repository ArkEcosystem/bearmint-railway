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
        Schema::create('transaction_metadata', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Transaction::class);
            $table->string('module')->index();
            $table->string('key')->index();
            $table->jsonb('value');
            $table->timestamps();

            $table->unique(['transaction_id', 'module', 'key']);
        });
    }
};
