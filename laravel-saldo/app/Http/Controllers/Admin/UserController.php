<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileFormRequest;
class UserController extends Controller
{
    
    # -- exibe a view para a edição do perfil
    public function profile()
    {
        return view('site.profile.profile');
    }

    # -- atualizar o perfil 
    public function profileUpdate(UpdateProfileFormRequest $request){
        $user     = auth()->user();
        $dataForm =  $request->except('_token');

        if($dataForm['password'] != null) {
            $dataForm['password'] = bcrypt( $dataForm['password']); # -- se informou password faz criptografia dele
        }else{
            unset($dataForm['password']); # -- se nao remove da array
        }
        
        # -- image
        $dataForm['image'] = $user->image; # -- pega a imagem atual do user... para no caso de nao informar e ja tem uma imagem anterior
        # -- verificar se informou a imagem e se é valido
        if( $request->hasFile('image') && $request->file('image')->isValid()){
            if($user->image){ # -- se existir imagem do user
                $name = $user->image;
            }else{ # -- crio o nome com a extensão
                $name      = $user->id . kebab_case($user->name);  # -- kebab_case remove caracter especial e convete en string amigavel
                $extension = $request->image->extension(); # -- recupera a extensão da imagem(ficheiro)
                $nameFile = "{$name}.{$extension}"; # -- junta o nome a extenão
                $dataForm['image'] = $nameFile;
            }

            $upload = $request->image->storeAs('users', $dataForm['image']); # -- faz upload passando a pasta e o nome .. storeAs para poder mudar o nome ... se nao existir cria a pasta dentro de estorage
            
            if(! $upload){ 
                return redirect()
                       ->back()
                       ->with('error', 'Falha ao fazer o upload da imagem');
            }
        }

        # -- Update
        $update = $user->update($dataForm);
        if($update){
            return redirect()
                    ->route('profile')
                    ->with('success', 'Sucesso ao atualizar!');
        }else{
            return redirect()
                     ->back()
                     ->with('error', 'Falha ao atualizar o perfil...');
        }
    }
}
 