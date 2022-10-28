<?php

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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('hash')->unique();
            $table->bigInteger('height')->unique();
            $table->jsonb('header');
            $table->jsonb('byzantine_validators');
            $table->jsonb('last_commit_info');
            $table->timestamps();
        });
    }
};
