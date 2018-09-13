<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];

    # -- relacionamento
    # -- comentarios do post 1:N
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    # -- utilizador do pots N:1
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
