<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    function retrive(Request $request){
        $request->validate([
           'Username'=>'required|email',
           'password'=>'required|min:8|max:15'
       ]);
      // return $request->post();
        $Username=$request->input('Username');
        $password=$request->input('password');
       if($Username=='a@gmail.com' && $password=='123456789')
       {
           $request->session()->put('name','Mandeep');
           return redirect('profile');

       }
       else
       {
           $request->session()->flash('error','Please Enter Valid Credentials');
           return redirect('login');
       }
        
    }

    /*function session_set(Request $r)
    {
        $r->session()->put('name','Mandeep');
    }

    function session_get(Request $r){
        echo $r->session()->get('name',);
    }*/

    function session_remove(Request $r){
         $r->session()->forget('name',);
         $r->session()->flash('logout','Logout Successfully');
         return redirect('login');
    }/*

    function session_check(Request $r){
        if($r->session()->has('name',)){
            echo "yes";
        }else 
        {
            echo "no";
        }
   }*/

   function uploadimg(Request $request){
     $request->file('image')->store('uploads');
     $request->session()->flash('Upload','Uploaded Successfully');
     return redirect('pphotogallery');
   }
}
