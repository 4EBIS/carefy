<?php

namespace App\Http\Controllers;

use App\Publish;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class PublicationsController extends Controller
{

    public function comment(){
        
    }

    public function publication(QuestionRequest $request){
      
        try{

            $publicationData = $request->all();
            Publish::create($publicationData);

            return response()->json(['status'=>'success',['message' => 'Publicação efetuada!']]);
        
        }catch(\Exception $e){
            
            return response()->json(['status'=>'error',['message' => 'Erro ao gravar informações. Tente novamente mais tarde.']]);
        }
    }

    public function feedback(){

    }
}
