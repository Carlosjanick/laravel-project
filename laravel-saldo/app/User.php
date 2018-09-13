<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

use App\Models\Balance;
use App\Models\Historic;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relacionamento 1-1
    /**
     * retorna o saldo do utilizador consuante o relacionamento
     *
     * @return void
     */
    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

    //relacionamento 1-n
    /**
     * retorna os historicos do utilizador
     *
     * @return void
     */
    public function historics()
    {
        return $this->hasMany(Historic::class);
    }
    
    /**
     * Recupera as informações do utilizador a receber a transferencia
     *
     * @param [type] $sender
     * @return void
     */
    public function getSender($sender)
    {
        //recupera o utilizador de acordo com o nome ou email enviado
        $userDados = $this->where('name', 'LIKE', "%$sender%")
             ->orWhere('email', $sender)
             ->get()
             ->first();
             
             //->toSql();  --debugar sql

        return $userDados;
    }
}
