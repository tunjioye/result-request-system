<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('school_id')->nullable()->index();
                $table->string('matric_number');
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->year('graduation_year')->nullable();
                $table->enum('gender', ['M', 'F'])->nullable();
                $table->string('email_address')->nullable();
                $table->string('phone_number')->nullable();
                $table->timestamps();

                $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
