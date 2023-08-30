<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\examenes;

class examenes extends Model
{
    use HasFactory;
    protected $table = 'Examenes';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'examen',
        'activo',
    ];
}
