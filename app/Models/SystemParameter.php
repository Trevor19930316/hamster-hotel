<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemParameter extends Model
{
    use HasFactory;

    protected $table = 'systems_parameters';

    protected $fillable = [
        'key',
        'value',
        'description',
        'is_useful',
        'updated_by',
    ];
}
