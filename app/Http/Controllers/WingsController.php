<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\Votetype;
use Illuminate\Http\Request;
use App\Models\VotingPositionType;

class WingsController extends Controller
{

    public function wingsvoteannouncecreate(){

        
        
        $country          = Country::all();
        $district         = District::all();
        $tehsil           = Tehsil::all();
        $votetype         = Votetype::all();
        $votepositiontype = VotingPositionType::all();
        return view('frontend.pages.WingsVoteAnnounce.create',compact('votetype','country','district','tehsil','votepositiontype'));
    } 



    // public function voteannouncestore(Request $request)
    // {
        
        
        
    //     $position_type = serialize($request->votepositiontype);
        
        
        
    //     $image      = $request->file('voteimage');
    //     $imageName  = time() . '.' . $image->getClientOriginalExtension();
    //     $path       = '/admin/vote/'.$imageName;
    //     $image_path = $image->move(public_path('admin/vote'), $imageName);
        
    //     $request->validate([
    
    //         'district'         => 'required',
    //         'tehsil'           => 'required',
    //         'announce'         => 'required',
    //         'date'             => 'required',
    //         'votepositiontype' => 'required',
    //     ]);

    //     $voteannounceinfo = [
    //         'country'          => $request->country,
    //         'district'         => $request->district,
    //         'tehsil'           => $request->tehsil,
    //         'announce'         => $request->announce,
    //         'votetype'         => $request->votetype,
    //         'votingdate'       => $request->date,
    //         'image'            => $path,
    //         'votepositiontype' => $position_type,
    //     ];
    
    //     $saveinfo = Voteannounce::create($voteannounceinfo);
    //     event(new VoteAnnouncementPosted($saveinfo));


    //           //  dd($saveinfo);
    //     return redirect()->route('voteannounce.index')->with('success','Created successfully.');
    // }


    // public function voteannounceedit($id)

    //     {
    //         $votepositiontype = VotingPositionType::all();

    //         $voteannounce = Voteannounce::where('id', $id)->first();

    //         return view('frontend.pages.voteannounce.edit',compact('voteannounce','votepositiontype'));
    //     }


    // public function voteannounceupdate(Request $request)
    // {
    //     if ($request->hasFile('votemage')) {
    //               // Handle image upload
    //         $image      = $request->file('voteimage');
    //         $imageName  = time() . '.' . $image->getClientOriginalExtension();
    //         $path       = '/admin/vote/'.$imageName;
    //         $image_path = $image->move(public_path('admin/vote'), $imageName);
    //     }
    
    //     $voteannounce = Voteannounce::find($request->id);



    //           //  dd($matromonial);
    //     $position_type = serialize($request->votepositiontype);


    //     $request->validate([
        
    //         'district'         => 'required',
    //         'tehsil'           => 'required',
    //         'announce'         => 'required',
    //         'date'             => 'required',
    //         'votepositiontype' => 'required',


    //     ]);
        
    //     if ($voteannounce) {
    //               // Update the record
    //         $voteannounce->update([
    //         'country'          => $request->country,
    //         'district'         => $request->district,
    //         'tehsil'           => $request->tehsil,
    //         'announce'         => $request->announce,
    //         'votetype'         => $request->votetype,
    //         'votingdate'       => $request->date,
    //         'votepositiontype' => $position_type,
    //         'image'            => isset($path) ? $path : $voteannounce->image,
    //         ]);
    
    //         return redirect()->route('voteannounce.index')->with('success', 'Update Successful!');
    //     } 
    //     else {
    //         return redirect()->route('voteannounce.index')->with('error', 'Record not found!');
    //     }
    // }


    // public function voteannouncedelete(Request $request){

    //     $voteannounce = Voteannounce::find($request->id);

    //     if ($voteannounce) {
        
    //         $voteannounce->delete();
    //     }

    //     return redirect()->route('voteannounce.index')->with('success','deleted successfully');
    // }


    public function getNames(Request $request)
    {
        $modelName = $request->input('model');
        $modelClass = 'App\\Models\\' . $modelName;

        if (class_exists($modelClass)) {
            $names = $modelClass::pluck('name'); // Adjust this to your column name
            return response()->json($names);
        } else {
            return response()->json(['error' => 'Model not found'], 404);
        }
    }

    public function getProfessions(Request $request)
    {
        $type = $request->input('type');
        $value = $request->input('value');
        
        $users = User::where($type, $value)->pluck('profession'); // Adjust this to your user table's structure
        return response()->json($users);
    }
}