<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

/*
*Controler esclusivo para manipular informações do usuário
*/
class UserController extends Controller
{

/*
* Usando o construtor como controle de acesso ao controller
*/
    public function __construct(){
        
        $this->middleware('auth');
    }
    /**
     * Função para atualizar informações do usuário
     */
    public function update(UserRequest $request){
        
        try{
            
            $userData   = $request->all();
            auth()->user()->update($userData);
            
            return redirect()->back()->with(['status'=>'success',['message' => 'Dados atualizados!']]);
            
        }catch(\Exception $e){
            
            return redirect()->back()->with(['status'=>'error',['message' => 'Erro ao gravar informações. Tente novamente mais tarde.']]);
        }
        
    }
}
