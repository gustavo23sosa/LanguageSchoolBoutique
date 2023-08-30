<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstatusUser;

class EstatusUser extends Model
{
	use HasFactory;
    protected $table = 'EstatusUser';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'estatus',
        'activo',
    ];
}
