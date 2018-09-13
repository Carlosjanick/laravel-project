<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
	# -- para acessar os metos desse controller o utilizador tem de estar logado
    public function __construct()
    {
        $this->middleware('auth');
    }

    # -- retorna todas a notificacoes do utilizzador logado
    public function notifications(Request $request)
    {
        $userLogado = auth()->user(); # -- user  logado
        $notifications = $userLogado->unreadNotifications;  //trazer somente as notifica;oes nao lidas 
        
        return response()->json(compact('notifications'));
    }

    # -- marcar como lida
    public function markAsRead(Request $request)
    {
        $userLogado = auth()->user(); # -- user  logado
        $notification   = $userLogado
                        ->notifications
                        ->where('id', $request->id)
                        ->first(); 

        if($notification)
        {
            $notification->markAsRead();
        }
    }

     # -- marcar todas como lida
     public function markAllAsRead()
     {
        $userLogado = auth()->user(); # -- user  logado
        $notifications = $userLogado->unreadNotifications; 
        $notifications->markAsRead(); 

     }
}
