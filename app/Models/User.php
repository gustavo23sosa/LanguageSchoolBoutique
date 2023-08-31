<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'aPaterno',
        'aMaterno',
        'email',
        'telefono',
        'password',
        'archivo',
        'porcentaje',
        'fk_rango',
        'fk_nivel',
        'fk_clases',
        'fk_estado',
        'fk_estatus',
        'Observaciones',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function entidades(){
        return $this->belongsTo(EntidadFederativa::class, 'id', 'fk_estado');
    }
    public function nivel(){
        return $this->belongsTo(Nivel::class, 'ID', 'fk_nivel');
    }
    public function mcer(){
        return $this->HasMany(MCER::class, 'ID', 'fk_rango');
    }
    public function clases(){
        return $this->belongsTo(Clases::class, 'ID', 'fk_clases');
    }
    public function estatuses(){
        return $this->belongsTo(EstatusUser::class, 'id', 'fk_estatus');
    }
}
