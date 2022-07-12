<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    // Definidas as colunas da tabeka site_contatos
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
