<?php

use App\Models\Account;
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
        Schema::create('account_metadata', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Account::class);
            $table->string('module')->index();
            $table->string('key')->index();
            $table->jsonb('value');
            $table->timestamps();

            $table->unique(['account_id', 'module', 'key']);
        });
    }
};
