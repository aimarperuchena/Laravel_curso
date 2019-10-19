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
        $validator=Validator::make($request->all(),[
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if($validator->fails()){
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }

        $post=Post::create($request->except('csrf'));
        return $post->toJson();

    }

    public function show($id){
       /*SACAR INFORMACION DEL ID QUE QUIERESAS*/
        $post = Post::findOrFail($id);
        return $post->toJson();
    }

    public function destroy($id){
        Post::destroy($id);
    }



}
