<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['code', 'state', 'career', ];


    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
