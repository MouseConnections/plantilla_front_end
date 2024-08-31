<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleAccess extends Model
{
    use HasFactory;

    protected $table = 'role_access';

    protected $fillable = [
        'id_rol',
        'id_module',
        'id_permission',
        'status',
    ];

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class, 'id_permission');
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class, 'id_module');
    }

    public function submenu(): BelongsTo
    {
        return $this->belongsTo(Submenu::class, 'id_module', 'id_module');
    }
}
