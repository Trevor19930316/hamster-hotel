<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamster extends Model
{
    use HasFactory;

    protected $table = 'hamsters';

    protected $fillable = [
        'owners_id',
        'name',
        'category',
        'sex',
        'age_month',
        'description',
    ];

    public function owner()
    {
        return $this->belongsTo(owner::class);
    }
}
