<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //se añade los campos a la tabla
        Schema::create('physical_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('heartRate');
            $table->string('bloodPleasure');
            $table->float('weight');
            $table->float('height');
            $table->float('idealWeight');
            $table->float('temp');
            $table->boolean('tobacco')->default(0);
            $table->boolean('alcohol')->default(0);
            $table->boolean('drugs')->default(0);
            $table->boolean('apetiteChanges')->default(0);
            $table->boolean('dreamChanges')->default(0);
            $table->text('currentCondition');
            $table->string('comment');
            $table->string('currentDrug');
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
        Schema::dropIfExists('physical_exams');
    }
}
