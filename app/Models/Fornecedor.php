<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    // Diz ao Eloquent qual o nome da tabela para gravar no banco de dados
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'uf', 'email'];
}
