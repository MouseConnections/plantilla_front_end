<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rols';

    protected $fillable = [
        'name',
        'status',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_rol');
    }

    public function rol_module_acces(): HasMany
    {
        return $this->hasMany(RoleAccess::class, 'id_rol');
    }
}
