<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table='livros';

    protected $fillable = ['nome', 'ano_edicao', 'ano_publicacao', 'autor', 'editora', 'estoque_total', 'estoque_disponivel'];
}
