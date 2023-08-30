<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PreguntasRespuestas;

class PreguntasRespuestas extends Model
{
    use HasFactory;
    protected $table = 'PreguntasRespuestas';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'fk_examen',
        'fk_preguntas',
        'fk_respuesta',
        'activo',
    ];
    public function examenes(){
        return $this->HasOne(Examenes::class, 'ID', 'fk_examen');
    }
    public function respuestas(){
        return $this->HasOne(Respuestas::class, 'ID', 'fk_respuesta');
    }
    public function preguntas(){
        return $this->HasOne(Preguntas::class, 'ID', 'fk_preguntas');
    }
}
