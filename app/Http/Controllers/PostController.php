<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;



/*ACORDAROSE DE ESTA PARTE PARA IMPORTAR*/
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
       /*SACAR INFORMACION DEL ID QUE QUIERESAS*/
        $post = Post::findOrFail($id);
        return $post->toJson();
    }

    public function destroy($id){

    }

}
