<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\Votetype;
use Illuminate\Http\Request;
use App\Models\WingsVoteannounce;
use App\Models\VotingPositionType;
use App\Events\VoteAnnouncementPosted;
use App\Events\WingsVoteAnnouncementPosted;

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



    public function wingsvoteannouncestore(Request $request)
    {
              
        $position_type = serialize($request->votepositiontype);

        
            // $image      = $request->file('voteimage');
            // $imageName  = time() . '.' . $image->getClientOriginalExtension();
            // $path       = '/admin/vote/'.$imageName;
            // $image_path = $image->move(public_path('admin/vote'), $imageName);
        
        $request->validate([
    
            'type'             => 'required',
            'typeDetails'      => 'required',
            'profession'       => 'required',
            'announce'         => 'required',
            'date'             => 'required',
            'votetype'         => 'required',
            'votepositiontype' => 'required',
        ]);

        $voteannounceinfo = [
            'type'             => $request->type,
            'type_name'        => $request->typeDetails,
            'profession_name'  => $request->profession,
            'announce'         => $request->announce,
            'votetype'         => $request->votetype,
            'votingdate'       => $request->date,
            'votepositiontype' => $position_type,
        ];
    
        $saveinfo = WingsVoteannounce::create($voteannounceinfo);
            // event(new VoteAnnouncementPosted($saveinfo));
            event(new WingsVoteAnnouncementPosted($saveinfo));


                  //  dd($saveinfo);
        return redirect()->route('voteannounce.index')->with('success','Created successfully.');
    }


      public function wingsvoteannounceedit($id)

          {
              $votepositiontype               = VotingPositionType::all();
              $voteannounce                   = WingsVoteannounce::where('id', $id)->first();
              $votetype                       = Votetype::all();
              $voteannounce->votepositiontype = unserialize($voteannounce->votepositiontype);

              return view('frontend.pages.WingsVoteAnnounce.edit',compact('voteannounce','votepositiontype','votetype'));
          }


      public function wingsvoteannounceupdate(Request $request)
      {
    
    
          $voteannounce = WingsVoteannounce::find($request->id);

          $position_type = serialize($request->votepositiontype);


          $request->validate([
    
            'type'             => 'required',
            'typeDetails'      => 'required',
            'profession'       => 'required',
            'announce'         => 'required',
            'date'             => 'required',
            'votetype'         => 'required',
            'votepositiontype' => 'required',
        ]);
        
          if ($voteannounce) {
                      // Update the record
              $voteannounce->update([
                'type'             => $request->type,
                'type_name'        => $request->typeDetails,
                'profession_name'  => $request->profession,
                'announce'         => $request->announce,
                'votetype'         => $request->votetype,
                'votingdate'       => $request->date,
                'votepositiontype' => $position_type,
              ]);
    
              return redirect()->route('voteannounce.index')->with('success', 'Update Successful!');
          } 
          else {
              return redirect()->route('voteannounce.index')->with('error', 'Record not found!');
          }
      }


      public function wingsvoteannouncedelete(Request $request){

          $voteannounce = WingsVoteannounce::find($request->id);

          if ($voteannounce) {
        
              $voteannounce->delete();
          }

          return redirect()->route('voteannounce.index')->with('success','deleted successfully');
      }


    public function getNames(Request $request)
    {
        $modelName  = $request->input('model');
        $modelClass = 'App\\Models\\' . $modelName;

        if (class_exists($modelClass)) {
            $names = $modelClass::pluck('name');  // Adjust this to your column name
            return response()->json($names);
        } else {
            return response()->json(['error' => 'Model not found'], 404);
        }
    }

    public function getProfessions(Request $request)
    {
        $type  = $request->input('type');
        $value = $request->input('value');
        
        $users = User::where($type, $value)->pluck('profession');  // Adjust this to your user table's structure
        return response()->json($users);
    }
}