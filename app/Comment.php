<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
