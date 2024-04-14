<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
protected $table = 'clientes'; // Verifique se está correspondendo ao nome real da tabela no banco de dados
protected $fillable = ['nome', 'email', 'cpf'];
}
