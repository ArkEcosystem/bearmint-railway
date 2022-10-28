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
        Schema::create('validator_updates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Block::class);
            $table->jsonb('value');
            $table->timestamps();

            $table->unique(['block_id']);
        });
    }
};
