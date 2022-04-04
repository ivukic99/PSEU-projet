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
        Schema::create('exam_deadlines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collegium_id')->constrained()->onDelete('cascade');
            $table->date('exam_date');
            $table->date('application_exam_date');
            $table->date('cancel_exam_date');
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
        Schema::dropIfExists('exam_deadlines');
    }
};
