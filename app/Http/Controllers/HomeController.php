<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use\App\Models\Users;
use\App\Models\Food;
use\App\Models\Foodchef;

class HomeController extends Controller
{
    public function index()
    {
        $data = food::all();
        $data2 = foodchef::all();
        return view("home",compact("data","data2"));
        
    }
    public function redirects()
    {
        $data = food::all();
        

        $usertype1= Auth::user()->name;
     $usertype= Auth::user()->usertype;
       

        if($usertype1=='admin')
        { return view('admin.adminhome');
        
        }
           
            
        

        else
        {
            return view('home',compact('data'));
        }
    }
    
   
    




  

      
      
    }

