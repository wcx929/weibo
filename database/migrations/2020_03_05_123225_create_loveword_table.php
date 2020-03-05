<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLovewordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loveword', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->text('emo_content');
            $table->index(['created_at']);
            $table->integer('copy_num')->default(0);
            $table->smallInteger('online')->default(0);
            $table->smallInteger('type')->default(0);
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
        Schema::dropIfExists('loveword');
    }
}
