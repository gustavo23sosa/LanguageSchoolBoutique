<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nivel;

class Nivel extends Model
{
    use HasFactory;
    protected $table = 'Nivel';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'nivel',
        'activo',
    ]; 
}
