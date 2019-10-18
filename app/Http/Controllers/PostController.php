<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    

    public function index(){

    }


    public function create(){

    }

    public function store(Request $request){

    }


    public function show($id){
       
        return "post ".$id;
    }

    public function destroy($id){

    }

}
