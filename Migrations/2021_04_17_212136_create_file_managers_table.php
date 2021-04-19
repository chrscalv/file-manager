<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->id();
            $table->string('disk');
            $table->string('filename');
            $table->string('extension');
            $table->string('mime_type');
            $table->integer('size');
            $table->timestamps();
        });

        Schema::create('fileable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('file_id');
            $table->unsignedInteger('model_id');
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
        Schema::dropIfExists('file_managers');
        Schema::dropIfExists('fileable');
    }
}
