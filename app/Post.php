<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = [
        'created_at',
        'updated_at',
    ];
    
    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
