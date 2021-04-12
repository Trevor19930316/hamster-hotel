<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemCode extends Model
{
    use HasFactory;

    protected $table = 'systems_codes';

    protected $fillable = [
        'belong_code',
        'code',
        'value',
        'description',
        'sort',
        'is_useful',
        'updated_by',
    ];
}
