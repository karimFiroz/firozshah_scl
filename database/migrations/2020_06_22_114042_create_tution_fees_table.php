<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutionFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tution_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('sn');
            $table->string('date');
            $table->string('stdName');
            $table->string('section');
            $table->integer('receiptNo');
            $table->integer('roll');
            $table->string('months');
            $table->integer('re_admission');
            $table->integer('guide');
            $table->integer('red_crecent');
            $table->integer('current');
            $table->integer('dues');
            $table->integer('advance');
            $table->integer('exam_fee');
            $table->integer('school');
            $table->integer('ccc');
            $table->integer('others');
            $table->integer('admit_card');
            $table->integer('syllebus');
            $table->integer('total');
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
        Schema::dropIfExists('tution_fees');
    }
}
