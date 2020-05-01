<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('token')->nullable();
            $table->boolean('status')->default(0);
            $table->string('nome_responsavel')->nullable();
            $table->string('cpf_responsavel')->nullable();
            $table->string('cargo')->nullable();
            $table->string('lotacao')->nullable();
            $table->string('email')->nullable();
            $table->string('senha')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();

            //feature
            $table->string('tipo_instituicao')->nullable();;
            $table->string('natureza_juridica')->nullable();;
            $table->string('nome_orgao')->nullable();;
            $table->string('cnpj_orgao')->nullable();
            $table->string('estado')->nullable();;
            $table->string('cidade')->nullable();;
            $table->string('endereco')->nullable();;
            $table->string('doc_arquivo')->nullable();;
            $table->string('api_end_teste')->nullable();;
            $table->string('api_end_producao')->nullable();;
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
        Schema::dropIfExists('empresas');
    }
}
