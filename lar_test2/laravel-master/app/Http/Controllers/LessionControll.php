<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lession;

class LessionControll extends Controller
{
       public function getAdd (){
    	//$lession = DB::table('lession')->get()->toArray();
    	return view('upload');//,['data' => $lession]);

    }
    public function postAdd (Request $request){
    	$lession = new Lession;
    	$lession->author = $request->txtFullName;
    	$lession->namevideo = $request->txtNameYoutube;
    	$lession->linkvideo = $request->txtLink;
    	$lession->nameemail = $request->email;
    	$lession->full = $request->txtIntro;
    	$lession->created_at = new \Datetime();
    	$lession->save();
    	return redirect()->route('post');
    	
    }
     public function post (){
    	$data = Lession::select()->get()->toArray();
        return view('post',['data' => $data]);

    }
    public function index (){
    	$data = Lession::select()->get()->toArray();
        return view('post',['data' => $data]);

    }
}
