<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockchainDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blockchain_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_passport')->index();
            $table->string('file_name')->index();
            $table->string('file_hash');
            $table->string('block_hash');
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
        Schema::dropIfExists('blockchain_documents');
    }
}
