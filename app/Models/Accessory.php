<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = [
                            'amount',
                            'type',
                        ];

    public function item()
    {
        return $this->morphOne(Item::class, 'itemable');
    }
}
