<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'number',
    //     'banner',
    //     'title',
    //     'desc',
    //     'start',
    //     'end',
    //     'winner', 
    // ];
    protected $guarded=[];
    public function joiner()
    {
        return $this->hasMany(Joiner::class, 'contest_id', 'number');
    }
}
