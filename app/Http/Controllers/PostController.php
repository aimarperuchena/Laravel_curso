<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $injectionController;
    public function __construct(InjectionController $injectionController){
        $this->injectionController =$injectionController;
    }

    public function index(){

    }


    public function create(){

    }

    public function store(Request $request){

    }


    public function show($id){
        $message=(new InjectionController())->showMessage(); 
        return $message;
    }

    public function destroy($id){

    }

}
