<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('requesters')) {
            Schema::create('requesters', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->enum('requester_type', ['UNIVERSITY', 'COMPANY'])->nullable()->default('UNIVERSITY');
                $table->string('requester_name')->nullable();
                $table->string('requester_address')->nullable();
                $table->string('contact_name')->nullable();
                $table->string('contact_role')->nullable();
                $table->string('contact_email')->nullable();
                $table->string('contact_number')->nullable();
                $table->boolean('contact_visibility')->default(0);
                $table->timestamps();
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
        Schema::dropIfExists('requesters');
    }
}
