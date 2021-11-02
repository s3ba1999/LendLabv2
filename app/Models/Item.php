<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
                            'name',
                            'image_id',
                            'description',
                            'disponibility',
                            'laboratory_id',
                        ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function itemable()
    {
        return $this->morphTo();
    }
}
