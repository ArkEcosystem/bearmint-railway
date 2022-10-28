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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('module')->index();
            $table->string('type')->index();
            $table->string('key')->index();
            $table->jsonb('value');
            $table->timestamps();

            $table->unique(['module', 'type', 'key']);
        });
    }
};
