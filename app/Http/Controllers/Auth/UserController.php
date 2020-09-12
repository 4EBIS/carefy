<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Auth;
use User;

class UserController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:user');
    }
    
    public function show(){
        return view('auth.profile');
    }
    
    public function update(UserRequest $request){
        
        try{
            
            $userData   = $request->all();
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->update($userData);
            
            return response()->json(['status'=>'success',['message' => 'Dados atualizados!']]);
        }catch(\Exception $e){
            
            return response()->json(['status'=>'error',['message' => 'Erro ao gravar informações. Tente novamente mais tarde.']]);
        }
        
    }
}
