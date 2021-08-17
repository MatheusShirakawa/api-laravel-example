<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all()->toArray();

        return response()->json(['success'=>true,'authors',$authors],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author();


        if($request->get('name') == ''){

        	return response()->json(['success'=>false,'field'=>'name','erroMsg'=>'campo de nome é obrigatório','authors',$this->index()],400);
        }


        if($request->get('email') == ''){

        	return response()->json(['success'=>false,'field'=>'email','erroMsg'=>'campo de email é obrigatório','authors',$this->index()],400);
        }


        if($request->get('password') == ''){

        	return response()->json(['success'=>false,'field'=>'password','erroMsg'=>'campo de senha é obrigatório','authors',$this->index()],400);
        }

        $author->name     = $request->get('name');
        $author->email    = $request->get('email');
        $author->password = $request->get('password');

        $author->save();

        return response()->json(['success'=>true,'authors',$this->index()],200);
        // return response()->json(['success'=>true,'message','cadastrado com successo'],200);
    }
}
