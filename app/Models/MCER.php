<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCER extends Model
{
    use HasFactory;
    protected $table = 'MCER';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'rango',
        'activo',
    ];
}
