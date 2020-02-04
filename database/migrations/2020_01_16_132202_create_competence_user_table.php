<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::disableForeignKeyConstraints();
        Schema::create('competence_user', function (Blueprint $table) {
        
           $table->unsignedBigInteger('competence_id');
           $table->foreign('competence_id')
                 ->references('id')
                 ->on('competences')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
                 
           $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')
                 ->references('id')
                 ->on('users')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
                 
           $table->primary(['competence_id','user_id']);
           $table->integer('level');
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
        Schema::dropIfExists('competence_user');
    }
}
