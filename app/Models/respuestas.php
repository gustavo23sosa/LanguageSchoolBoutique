<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\respuestas;

class respuestas extends Model
{
    use HasFactory;
    protected $table = 'Respuestas';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'respuestas',
        // 'fk_preguntas',
        'activo',
    ];
    // public function preguntas(){
    //     return $this->HasOne(Preguntas::class, 'ID', 'fk_preguntas');
    // }
}
