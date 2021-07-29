<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joiner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'contest_id', 
    ];

    public function contest()
    {
        return $this->belongsTo(Contest::class, 'contest_id', 'number');
    }
}
