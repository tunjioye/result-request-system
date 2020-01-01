<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('requests')) {
            Schema::create('requests', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('requester_id')->nullable()->index();
                $table->unsignedBigInteger('school_id')->nullable()->index();
                $table->unsignedBigInteger('student_id')->nullable()->index();
                $table->string('tracking_number')->nullable();
                $table->string('result_type')->nullable();
                $table->year('year_received')->nullable();
                $table->string('purpose')->nullable();
                $table->enum('status', ['PENDING', 'SUCCESS', 'REJECTED'])->default('PENDING');
                $table->string('reason')->nullable();
                $table->timestamps();

                $table->foreign('requester_id')->references('id')->on('requesters')->onDelete('cascade');
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
        Schema::dropIfExists('requests');
    }
}
