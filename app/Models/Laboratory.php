<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $fillable = ['name', 'description', 'image_id', ];


    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function mananger()
    {
        return $this->hasOne(Mananger::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
