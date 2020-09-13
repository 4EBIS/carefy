<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class PublicationsController extends Controller
{

    private $publication;

    public function comment(){
        
    }

    public function newPublication(QuestionRequest $request){
      
        try{
            
            $publicationData = $request->all();
            $publicationData['user_id'] = auth()->user()->id;
            Publication::create($publicationData);

            return response()->json(['status'=>'success',['message' => 'Publicação efetuada!']]);
        
        }catch(\Exception $e){
            
            return response()->json(['status'=>'error',['message' => 'Erro ao gravar informações. Tente novamente mais tarde.']]);
        }
    }

    public function feedback(){

    }
}
