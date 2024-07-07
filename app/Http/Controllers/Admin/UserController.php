<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::All();
        return view('backend.user_manage.index',compact('data'));
    }


    public function active($id){
      
        $user = User::find($id);
        if ($user) {
              // Modify the attributes of the model
            $user->status = '1';
              // Call the save() method to persist the changes
            $user->save();
        }
        $data = User::All();
     return view('backend.user_manage.index',compact('data'))->with('success','Active successfully');;
    }


    public function cancel($id){
      
        $user = User::find($id);
        if ($user) {
              // Modify the attributes of the model
            $user->status = '3';
              // Call the save() method to persist the changes
            $user->save();
        }
        $data = User::All();
     return view('backend.user_manage.index',compact('data'))->with('success','Cancel successfully');;
    }

    
  
}
