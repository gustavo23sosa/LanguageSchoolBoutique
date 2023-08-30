<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\preguntas;

class preguntas extends Model
{
	use HasFactory;
    protected $table = 'Preguntas';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'preguntas',
        // 'fk_examen',
        // 'fk_respuesta',
        'activo',
    ];
    // public function examenes(){
    //     return $this->HasOne(Examenes::class, 'ID', 'fk_examen');
    // }
    // public function respuestas(){
    //     return $this->HasOne(Respuestas::class, 'ID', 'fk_respuesta');
    // }

}
