<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('results')) {
            Schema::create('results', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('school_id')->nullable()->index();
                $table->unsignedBigInteger('student_id')->nullable()->index();
                $table->string('result_type')->nullable();
                $table->year('year_received')->nullable();
                $table->string('description')->nullable();
                $table->string('file')->nullable();
                $table->boolean('status')->default(0); // 0 for UNVERIFIED, 1 for VERIFIED
                $table->timestamps();

                $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
                $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
