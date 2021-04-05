<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Despesa extends Model
{
    
    use HasFactory;
    

    protected $table ='despesas';
    protected $primaryKey = 'iddespesa';
    protected $fillable = ['descricao','data','idusuario','valor','imagem'];
    
}
