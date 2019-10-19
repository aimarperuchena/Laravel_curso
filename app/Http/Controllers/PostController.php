<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Post;
class PostController extends Controller
{
    

    public function index(){
        //LLAMARA AL MODELO PARA QUE DEVUELVA TODOS LOS DATOS
       
        return Post::all();
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
