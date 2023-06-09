<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    use HasFactory;
    protected $table = 'UsersRoles';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'fk_users',
        'fk_roles',
    ];

    public function users(){
        return $this->HasOne(user::class, 'ID', 'fk_users');
    }

    public function roles(){
        return $this->Hasmany(roles::class, 'ID', 'fk_roles');
    }
}
