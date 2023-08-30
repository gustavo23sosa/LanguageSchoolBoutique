<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'Roles';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'rol',
    ];
}
