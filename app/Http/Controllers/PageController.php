<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
        //
        function home(){
            return view("public.home");
        }
        function welcome(){
            return view('public.welcome');
        }
        function create(){
            return view('public.create');
        }
        function dashboard(){
            return view('public.dashboard');
        }
    public function details($id){
        $name="user $id";
        $dob ="4456";
        return view('public.details')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:10|min:3",
                "id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                "dob"=>"required",
                "email"=>"required|",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);
            $st = new user();
            $st->name = $req->name;
            $st->email =$req->email;
            $st->dob = $req->dob;
            $st->save();
        return "Form submitted";
        
    }
}