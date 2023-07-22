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
        'activo',
    ];

}
