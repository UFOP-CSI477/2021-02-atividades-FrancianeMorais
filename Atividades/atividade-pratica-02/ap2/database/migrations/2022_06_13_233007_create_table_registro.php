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
        Schema::create('table_registro', function (Blueprint $table) {
            $table->id();             
            $table->unsignedBigInteger('user_id');         
            $table->foreign('user_id')->references('id')->on('user');
            $table->unsignedBigInteger('equipamento_id');                               
            $table->foreign('equipamento_id')->references('id')->on('equipamento');  
            $table->string('descricao',191);
            $table->date('datalimite');
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
        Schema::dropIfExists('table_registros');
    }
};
