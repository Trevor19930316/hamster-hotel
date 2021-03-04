<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owners';

    protected $fillable = [
        'name',
        'sex',
        'mobile',
    ];

    public function hamsters()
    {
        return $this->hasMany(Hamster::class, 'owners_id');
    }
}
