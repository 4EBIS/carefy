<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\User;
use App\Comment;

class HomeController extends Controller
{
    /*
* Usando o construtor como controle de acesso ao controller
*/
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    * Função usada para exibir as informações na página inicial.
    * Ela preenche o fed com publicações e comentários
    */
    public function index()
    {
        $publications = Publication::all();

        $arr = Array();
        
        foreach($publications as $v=>$p){
            $arr[$v]  =  [
                'user'  =>  $p->user()->first(),
                'id'    =>  $p->id,
                'title' =>  $p->title,
                'body'  =>  $p->body,
                'comments'  => $p->comment()->get(),
            ];
            foreach($p->comment() as $vl => $c){
                $arr[$v]['comments'][$vl] = [
                    'feedback'=> $c->feedback(),
                ];                 
            }
        }
        //dd($arr,$publications);
        
        return view('home',["publication"=>$arr]);
    }
}
