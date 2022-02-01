<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
   use HasFactory;

    protected $fillable = [
        'title'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
