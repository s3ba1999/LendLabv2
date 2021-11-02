<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $fillable = [
                            'last_code',
                            'code',
                            'state',
                            'date_purchase',
                        ];


    public function item()
    {
        return $this->morphOne(Item::class, 'itemable');
    }
}
