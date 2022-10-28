<?php

use App\Models\Block;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Block::class);
            $table->string('hash')->unique();
            $table->string('sender')->index();
            $table->string('recipient');
            $table->bigInteger('gas');
            $table->bigInteger('nonce');
            $table->string('signature');
            $table->string('version');
            $table->jsonb('message');
            $table->jsonb('message_deserialized')->index();
            $table->timestamps();
        });
    }
};
