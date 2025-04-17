<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleType extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'code', 'name', 'description'
    ];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
