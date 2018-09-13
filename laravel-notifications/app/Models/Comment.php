<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'title',
        'body'
    ];

    # -- relacionamento
    # -- utilizador que fez o comentario N:1
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    # -- post que o comentario pertence N:1
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
}
