<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table = 'materias';
    protected $fillable = ['titulo', 'nome','materia', 'assunto_id'];
    use HasFactory;

    public function relAssunto()
    {
        return $this->hasOne(related: 'app\Models\Assunto', foreignKey: 'id', localKey:'assunto_id');
    }
}
