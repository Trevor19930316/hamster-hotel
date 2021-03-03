<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamster extends Model
{
    use HasFactory;

    protected $table = 'hamster';

    protected $fillable = [
        'owners_id',
        'name',
        'category',
        'sex',
        'age_month',
        'description',
    ];
}
