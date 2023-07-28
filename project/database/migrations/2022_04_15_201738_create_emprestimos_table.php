<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('livro_id');
            $table->date('data_inicio')->default(Carbon::now());
            $table->date('data_fim');
            $table->date('data_da_devolucao')->nullable();
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
