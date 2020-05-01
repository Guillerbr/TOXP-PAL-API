<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'token', 'status', 'nome_responsavel', 'cargo', 'lotacao', 'email',
    ];
}
