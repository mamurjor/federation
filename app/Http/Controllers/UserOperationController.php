<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UserOperationController extends Controller
{
    
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    public  function getregisteruser(){
        
        $role = Role::where('slug','client')->first();     
        $registeruser = User::where('role_id',$role->id)->get();
        return view('backend.page.useroperation.getregisteruser',compact('registeruser'));

    }
    public  function approved($userid){     
             
        $user = User::find($userid)->update(
            [
               
                'status'              => 1,             
            ]
        );    
        return response()->json($user);

    }
    public  function cancel($userid){     
             
        $user = User::find($userid)->update(
            [
               
                'status'    => 3,             
            ]
        );    
        return response()->json($user);

    }

    
    public function getDivision($Division){
      
             
        

 }



}
