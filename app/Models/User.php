<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function toUserId()
    {
        return $this->hasMany('App\Reaction', 'to_user_id', 'id');
    }

    public function fromUserId()
    {
        return $this->hasMany('App\Reaction', 'from_user_id', 'id');
    }

    protected $fillable = [
        'name', 'email', 'password', 'zyusyo','gakuseki',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function soldItems()
    {
	    return $this->hasMany(Item::class,'seller_id');
    }
    public function boughtItems()
    {
	    return $this->hasMany(Item::class,'buyer_id');
    }
    /**
 * IDから一件のデータを取得する
 */
public function selectUserFindById($id)
{
    // 「SELECT id, name, email WHERE id = ?」を発行する
    $query = $this->select([
        'id',
        'name',
        'email'
    ])->where([
        'id' => $id
    ]);
    // first()は1件のみ取得する関数
    return $query->first();
}

public function chatMessages()
    {
        return $this->hasMany('App\ChatMessage');
    }

    public function chatRoomUsers()
    {
        return $this->hasMany('App\ChatRoomUsers');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
