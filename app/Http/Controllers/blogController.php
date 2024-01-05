<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request){
        
        $request->validate([
            'title'=> 'required',
            'info'=> 'required',
            'file'=> 'required',
            
        ]);
        
        $blog = new blog;
        $blog ->title=$request['title'];
        $blog ->info=$request['info'];
        $blog ->file=$request['file'];
        $blog-> save();
}
}