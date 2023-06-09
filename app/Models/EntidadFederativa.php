<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EntidadFederativa;

class EntidadFederativa extends Model
{
    use HasFactory;
    protected $table = 'EntidadFederativa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fk_estado',
        'activo',
    ]; 
}
