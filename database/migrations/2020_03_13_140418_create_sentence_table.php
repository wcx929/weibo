<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentence', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->text('base_content')->nullable();
            $table->integer('copy_num')->default(0);
            $table->integer('copy_id')->default(0);
            $table->smallInteger('online')->default(1);
            $table->smallInteger('type')->default(0);
            $table->index(['created_at']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentence');
    }
}
