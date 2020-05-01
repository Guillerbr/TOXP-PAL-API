<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'email', 'token', 'status', 'nome_responsavel', 'cpf_responsavel', 'cargo', 'lotacao', 'email', 'senha', 'telefone',
         'celular', 'tipo_instituicao', 'natureza_juridica', 'nome_orgao', 'cnpj_orgao', 'estado', 'cidade', 'endereco',
         'doc_arquivo', 'api_end_teste', 'api_end_producao',
    ];
}
