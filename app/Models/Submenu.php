<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $table = 'submenus';

    protected $fillable = [
        'name',
        'id_module',
        'id_menu',
        'status',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
