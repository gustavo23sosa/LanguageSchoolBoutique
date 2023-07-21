<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clases;

class Clases extends Model
{
    use HasFactory;
    protected $table = 'Clases';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'tipo',
        'activo',
    ]; 
}
