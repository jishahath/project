<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function category() {
        $this->belongsTo('App\Category');
    }
}
