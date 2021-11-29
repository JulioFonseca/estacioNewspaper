<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assunto extends Model
{
    protected $table = 'assuntos';
    protected $fillable = ['id', 'nome'];
    use HasFactory;

    public function relMateria()
    {
        return $this->hasMany(related: 'app\Models\Materias', foreignKey: 'assunto_id');
    }

}
