<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comment;
use App\Http\Requests\StoreCommentFormRequest;
use App\Notifications\PostCommentedNotification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    
    public function store(StoreCommentFormRequest $request)
    {   
        $user = $request->user();

        $comment = $user->comments()->create($request->all()); # -- recupera o utilizador logado e acessa o metodo da relacao e adiciona um comentario.
        
        # -- ao comentar enviar uma notificaçao para o utilizador dono do post.
        $author = $comment->post->user;
        $author->notify(new PostCommentedNotification($comment)); # - passa no construtor da classe o comment para poder usar os dados do comentario em si.

        return Redirect()
               -> route('posts.show', $comment->post_id)
               -> withSuccess('Comentario realizado com sucesso !');
    }
}
