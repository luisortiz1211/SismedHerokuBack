<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScheduleDayColumnPhysicalExam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedule_days', function (Blueprint $table) {
            $table->unsignedBigInteger('schedule_id');
            $table
                ->foreign('schedule_id')
                ->references('id')
                ->on('schedule_users')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('schedule_days');
        Schema::enableForeignKeyConstraints();
    }
}
