<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mananger extends Model
{

    protected $fillable = ['laboratory_id'];


    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }
}
