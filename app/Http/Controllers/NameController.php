<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Name;

class NameController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $name = Name::find($id);

        return response()->json(['success'=>true,'name'=>$name],200);
    }
}
