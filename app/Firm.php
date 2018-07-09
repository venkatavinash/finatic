<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    protected $guarded  = [];
    protected $casts = [
        'id' => 'int',
        'contact' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
