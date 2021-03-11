<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleHierarchy extends Model
{
    protected $table = 'role_hierarchy';

    protected $fillable = [
        'role_id',
        'hierarchy',
    ];

    public $timestamps = false;
}
