<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('request_messages')) {
            Schema::create('request_messages', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('request_id')->nullable()->index();
                $table->unsignedBigInteger('result_id')->nullable()->index();
                $table->string('message')->nullable();
                $table->string('from')->nullable();
                $table->string('to')->nullable();
                $table->string('attachments')->nullable();
                $table->timestamp('read_at')->nullable();
                $table->timestamps();

                $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade');
                $table->foreign('result_id')->references('id')->on('results')->onDelete('cascade');
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
        Schema::dropIfExists('request_messages');
    }
}
