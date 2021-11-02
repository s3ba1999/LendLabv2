<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    protected $fillable = ['laboratory_id', ];


    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
