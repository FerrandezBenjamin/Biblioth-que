<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpreintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('id_books')
                ->references('id')
                ->on('books')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('date_retour')->nullable();
            $table->date('rented_at');
            $table->date('due_at');
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
        Schema::dropIfExists('empreints');
    }
}
