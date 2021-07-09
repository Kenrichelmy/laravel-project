<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laravel;
use Illuminate\Http\Response;
class LaravelController extends Controller
{
       public function index() {

        return view('welcome');

       }   

       public function store() {

	       $store=Laravel::all();

return view('store',['store'=>$store]);
        
       }

       public function show($id){
              
	 $show=Laravel::find($id);


 return view('show',['show'=>$show]);

       }



public function  downloadstore(){
       
return response()->download(public_path('favicon.ico'),'');

    
       
       }

}
