<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\User;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
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
