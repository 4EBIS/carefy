<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\CommentRequest;

/**
 * Controller usado para manipular informações de publicação em geral
 */
class PublicationsController extends Controller
{

    /**
     * Função responsável por publicar comentário
     * Usando um Request personalizado para validar os imputs
     */
    public function comment(CommentRequest $request){
        
        try{
            
            $comment = $request->all();
            $comment['body'] .= $request->body2;
            $comment['user_id'] = auth()->user()->id;
            Comment::create($comment);

            return redirect()->back()->with(['status'=>'success',['message' => 'Publicação efetuada!']]);
        
        }catch(\Exception $e){
            return redirect()->back()->with(['status'=>'error',['message' => 'Erro ao gravar informações. Tente novamente mais tarde.']]);
        }
    }
    /**
     * Função responsável por publicar Dúvidas
     * Usando um Request personalizado para validar os imputs
     */
    public function newPublication(QuestionRequest $request){
      
        try{
            
            $publicationData = $request->all();
            $publicationData['user_id'] = auth()->user()->id;
            Publication::create($publicationData);

            return redirect()->back()->with(['status'=>'success','message' => 'Publicação efetuada!']);
        
        }catch(\Exception $e){
            dd($e);
            return redirect()->back()->with(['status'=>'error','message' => 'Erro ao gravar informações. Tente novamente mais tarde.']);
        }
    }
    /**
     * Função responsável por aplicar os feedbacks nos comentários,
     * porêm,  ideia ainda não foi aplicada
     */
    public function feedback(){

    }
}
