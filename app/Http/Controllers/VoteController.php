<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OtpMail;
use App\Models\Nomini;
use App\Models\Tehsil;
use App\Models\Division;
use App\Models\District;
use App\Models\Votetype;
use App\Models\DisNomini;
use App\Models\VoteResult;
use App\Models\WingsNomini;
use App\Models\Voteannounce;
use Illuminate\Http\Request;
use App\Models\DisVoteannounce;
use App\Models\WingsVoteResult;
use App\Models\WingsVoteannounce;
use App\Models\VotingPositionType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Events\VoteAnnouncementPosted;

class VoteController extends Controller
{
            public function voteindex()
                {
                    $votetype = Votetype::all();
                    return view('frontend.pages.votetype.index', compact('votetype'));
                }

            public function votecreate(){
                 return view('frontend.pages.votetype.create');
            }



            public function votestore(Request $request)
            {
                $request->validate([
                    'name' => 'required|unique:votetypes,name',
                    'code' => 'required',
                ]);     
                Votetype::create($request->post());
                return redirect()->route('votetype.index')->with('success','Created successfully.');
            }



            public function voteedit($id)

            {

                $votetype = Votetype::where('id', $id)->first();

                return view('frontend.pages.votetype.edit',compact('votetype'));
            }

            public function voteupdate(Request $request)
            {
                
                $request->validate([
                    'name' => 'required|unique:votetypes,name',
                    'code' => 'required',
                ]);

                $votetype = Votetype::find($request->id);
                if ($votetype) {
                                  // Modify the attributes of the model
                    $votetype->name = $request->name;
                    $votetype->code = $request->code;
                    
                                  // Call the save() method to persist the changes
                    $votetype->save();
                }
                


                return redirect()->route('votetype.index')->with('success','Updated successfully');
            }


            public function votedelete(Request $request){

                $votetype = Votetype::find($request->id);

                if ($votetype) {
                
                    $votetype->delete();
                }

                return redirect()->route('votetype.index')->with('success','deleted successfully');
            }


                          //  vote position 



            public function votepositionindex()
            {
                $votepositiontype = VotingPositionType::all();
                return view('frontend.pages.votepositiontype.index', compact('votepositiontype'));
            }

            public function votepositioncreate(){
                 return view('frontend.pages.votepositiontype.create');
            }



            public function votepositionstore(Request $request)
            {
                $request->validate([
                    'name'   => 'required|unique:voting_position_types,name',
                    'code'   => 'required',
                    'charge' => 'required',
                ]);     
                VotingPositionType::create($request->post());
                return redirect()->route('votepositiontype.index')->with('success','Created successfully.');
            }



            public function votepositionedit($id)

            {

                $votepositiontype = VotingPositionType::where('id', $id)->first();

                return view('frontend.pages.votepositiontype.edit',compact('votepositiontype'));
            }

            public function votepositionupdate(Request $request)
            {
                
                $request->validate([
                    'name'   => 'required|unique:voting_position_types,name',
                    'code'   => 'required',
                    'charge' => 'required',
                ]);

                $votepositiontype = VotingPositionType::find($request->id);
                if ($votepositiontype) {
                                  // Modify the attributes of the model
                    $votepositiontype->name   = $request->name;
                    $votepositiontype->code   = $request->code;
                    $votepositiontype->charge = $request->charge;
                    
                                  // Call the save() method to persist the changes
                    $votepositiontype->save();
                }
                


                return redirect()->route('votepositiontype.index')->with('success','Updated successfully');
            }


            public function votepositiondelete(Request $request){

                $votepositiontype = VotingPositionType::find($request->id);

                if ($votepositiontype) {
                
                    $votepositiontype->delete();
                }

                return redirect()->route('votepositiontype.index')->with('success','deleted successfully');
            }


          //  voteannounce

            public function voteannounceindex()
            {
                $voteannounce      = Voteannounce::all();
                $disvoteannounce   = DisVoteannounce::all();
                $wingsvoteannounce = WingsVoteannounce::all();
                return view('frontend.pages.voteannounce.index', compact('voteannounce', 'wingsvoteannounce','disvoteannounce'));
            }

            public function voteannouncecreate(){

                
                
                $Division         = Division::all();
                $district         = District::all();
                $tehsil           = Tehsil::all();
                $votetype         = Votetype::all();
                $votepositiontype = VotingPositionType::all();
                return view('frontend.pages.voteannounce.create',compact('votetype','Division','district','tehsil','votepositiontype'));
            } 



            public function voteannouncestore(Request $request)
            {
                
                
                
                $position_type = serialize($request->votepositiontype);
                
                
                
                $image      = $request->file('voteimage');
                $imageName  = time() . '.' . $image->getClientOriginalExtension();
                $path       = '/admin/vote/'.$imageName;
                $image_path = $image->move(public_path('admin/vote'), $imageName);
                
                $request->validate([
            
                    'district'         => 'required',
                    'tehsil'           => 'required',
                    'announce'         => 'required',
                    'date'             => 'required',
                    'votepositiontype' => 'required',
                ]);

                $voteannounceinfo = [
                    'Division'         => $request->Division,
                    'district'         => $request->district,
                    'tehsil'           => $request->tehsil,
                    'announce'         => $request->announce,
                    'votetype'         => $request->votetype,
                    'votingdate'       => $request->date,
                    'image'            => $path,
                    'votepositiontype' => $position_type,
                ];
            
                $saveinfo = Voteannounce::create($voteannounceinfo);
                event(new VoteAnnouncementPosted($saveinfo));


                              //  dd($saveinfo);
                return redirect()->route('voteannounce.index')->with('success','Created successfully.');
            }


            public function voteannounceedit($id)

                {
                    $Division                       = Division::all();
                    $district                       = District::all();
                    $tehsil                         = Tehsil::all();
                    $votepositiontype               = VotingPositionType::all();
                    $votetype                       = Votetype::all();
                    $voteannounce                   = Voteannounce::where('id', $id)->first();
                    $voteannounce->votepositiontype = unserialize($voteannounce->votepositiontype);
                    return view('frontend.pages.voteannounce.edit',compact('voteannounce','votepositiontype','votetype','Division','district','tehsil'));
                }


            public function voteannounceupdate(Request $request)
            {
                if ($request->hasFile('votemage')) {
                                  // Handle image upload
                    $image      = $request->file('voteimage');
                    $imageName  = time() . '.' . $image->getClientOriginalExtension();
                    $path       = '/admin/vote/'.$imageName;
                    $image_path = $image->move(public_path('admin/vote'), $imageName);
                }
            
                $voteannounce = Voteannounce::find($request->id);



                              //  dd($matromonial);
                $position_type = serialize($request->votepositiontype);


                $request->validate([
                
                    'district'         => 'required',
                    'tehsil'           => 'required',
                    'announce'         => 'required',
                    'date'             => 'required',
                    'votepositiontype' => 'required',


                ]);
                
                if ($voteannounce) {
                                  // Update the record
                    $voteannounce->update([
                    'Division'         => $request->Division,
                    'district'         => $request->district,
                    'tehsil'           => $request->tehsil,
                    'announce'         => $request->announce,
                    'votetype'         => $request->votetype,
                    'votingdate'       => $request->date,
                    'votepositiontype' => $position_type,
                    'image'            => isset($path) ? $path : $voteannounce->image,
                    ]);
            
                    return redirect()->route('voteannounce.index')->with('success', 'Update Successful!');
                } 
                else {
                    return redirect()->route('voteannounce.index')->with('error', 'Record not found!');
                }
            }


            public function voteannouncedelete(Request $request){

                $voteannounce = Voteannounce::find($request->id);

                if ($voteannounce) {
                
                    $voteannounce->delete();
                }

                return redirect()->route('voteannounce.index')->with('success','deleted successfully');
            }


            public function getCharge(Request $request) {
                $positionName = $request->positionName;
                              // Fetch charge value from Votepositiontype table based on $positionName
                          
                $charge = VotingPositionType::where('name', $positionName)->value('charge');
                return response()->json(['charge' => $charge]);
            }


            public function votedetails(){
                        
                $user        = User::where('id', Auth::id())->first();
                $nomini_list = Nomini::where('tehsil' , $user->tehsil)->where('status', '1')
                ->with('user')->get();
                
                return view('frontend.pages.votedetails.votedetails',compact('nomini_list'));

            }

                    // Wings 

            public function wingsvotedetails(){
                        
                $user             = User::where('id', Auth::id())->first();
                $wingsnomini_list = WingsNomini::where('wings' , $user->profession)->where('status', '1')
                ->with('user')->get();
                
                return view('frontend.pages.votedetails.wingsvotedetails',compact('wingsnomini_list'));

            }

                  // District vote 

            public function disvotedetails(){
                        
                $user           = User::where('id', Auth::id())->first();
                $disnomini_list = DisNomini::where('status', '1')
                                            ->with('user')->get();
                
                return view('frontend.pages.votedetails.disvotedetails',compact('disnomini_list'));

            }


                    //vote result

              public function checkVote(Request $req){
                 $userId   = Auth::id();
                 $nominiId = $req->nomini_id;

                 $hasVoted = VoteResult::where('user_id',$userId)->where('nomini_id',$nominiId)->exists();
                 return response()->json(['hasVoted'=>$hasVoted]);
              }


            public function sendOtp(Request $request)
            {
                $otp = rand(100000, 999999);
        
                        // Store OTP in session
                session()->put('otp', $otp);
        
                        // Send OTP via email
                $email = $request->email;
        
                try {
                    Mail::to($email)->send(new OtpMail($otp));
                        // Log::info('OTP email sent successfully');
                    return response()->json(['success' => true]);
                } catch (\Exception $e) {
                        // Log::error('Failed to send OTP email:', ['error' => $e->getMessage()]);
                    return response()->json(['success' => false, 'message' => 'Failed to send OTP email.']);
                }
            }
        
            public function verifyOtp(Request $request)
            {
                $enteredOtp = $request->otp;
                $storedOtp  = session('otp');
        
                        // Log the entered OTP and stored OTP for debugging
                Log::info('Entered OTP: ' . $enteredOtp);
                Log::info('Stored OTP: ' . $storedOtp);
        
                if ($enteredOtp == $storedOtp) {
                    return response()->json(['success' => true]);
                } else {
                    return response()->json(['success' => false, 'message' => 'Invalid OTP']);
                }
            }
        
            public function storeVoteData(Request $request)
            {
                try {
                            // Log the request data for debugging
                    
                    Log::info('Store Vote Data Request:', $request->all());
            
                            // Create a new vote result entry
                    VoteResult::create([
                        'user_id'          => Auth::id(),
                        'nomini_id'        => $request->nomini_id,
                        'votepositiontype' => $request->votepositiontype,
                        'votetype'         => $request->votetype,
                        'votingdate'       => $request->votingdate,
                        'division'         => $request->division,
                        'district'         => $request->district,
                        'tehsil'           => $request->tehsil,
                    ]);
            
                            // Log success message
                    Log::info('Vote data stored successfully');
            
                    return response()->json(['success' => true]);
                } catch (\Exception $e) {
                            // Log the error message
                    Log::error('Failed to store vote data:', ['error' => $e->getMessage()]);
                    return response()->json(['success' => false, 'message' => 'Failed to store vote data.']);
                } 
            }


            public function storeWingsVoteData(Request $request)
            {
                try {
                            // Log the request data for debugging
                    
                    Log::info('Store Vote Data Request:', $request->all());
            
                            // Create a new vote result entry
                    WingsVoteResult::create([
                        'user_id'          => Auth::id(),
                        'wingsnomini_id'   => $request->nomini_id,
                        'votepositiontype' => $request->votepositiontype,
                        'votetype'         => $request->votetype,
                        'votingdate'       => $request->votingdate,
                        'wings'            => $request->wings,
                    ]);
            
                            // Log success message
                    Log::info('Vote data stored successfully');
            
                    return response()->json(['success' => true]);
                } catch (\Exception $e) {
                            // Log the error message
                    Log::error('Failed to store vote data:', ['error' => $e->getMessage()]);
                    return response()->json(['success' => false, 'message' => 'Failed to store vote data.']);
                } 
            }

            public function __construct()
            {
                $this->middleware('auth');
            }

            public function voteclick(){
        
                $voteclick = VoteResult::select(
                    'users.*', 
                    'nominis.id as nomini_id', 
                    'nominis.votepositiontype as votepositiontype', 
                    'nominis.votetype as votetype', 
                    'nominis.tehsil as tehsil', 
                    DB::raw('MAX(vote_results.status) as status'), 
                    DB::raw('count(*) as vote_count')
                    )
                    ->join('nominis', 'vote_results.nomini_id', '=', 'nominis.id')
                    ->join('users', 'users.id', '=', 'nominis.nomini_id')
                    ->groupBy('vote_results.nomini_id', 'users.id', 'nominis.votepositiontype', 
                              'nominis.votetype', 'nominis.tehsil', 'nominis.id')
                              ->get();

                $hasSelectedNomini = VoteResult::where('status', 1)->exists();
                  // dd($hasSelectedNomini);
                
                
                $wingsvoteclick = WingsVoteResult::select(
                    'users.*',
                    'wings_nominis.id as wingsnomini_id',
                    'wings_nominis.votepositiontype as votepositiontype', 
                    'wings_nominis.votetype as votetype', 
                    'wings_nominis.wings as wings',
                    DB::raw('MAX(wings_vote_results.status) as status'), 
                    DB::raw('count(*) as vote_count'))
                    ->join('wings_nominis', 'wings_vote_results.wingsnomini_id', '=', 'wings_nominis.id')
                    ->join('users', 'users.id', '=', 'wings_nominis.wingsnomini_id')
                    ->groupBy('wings_vote_results.wingsnomini_id', 'users.id', 'wings_nominis.votepositiontype', 
                    'wings_nominis.votetype', 'wings_nominis.wings', 'wings_nominis.id')
                    ->get();
                    
                    $hasSelectedWingsNomini = WingsVoteResult::where('status', 1)->exists();
                    return view('frontend.pages.voteclick.index', compact('voteclick','wingsvoteclick','hasSelectedNomini','hasSelectedWingsNomini'));
                }


                    //Nomini final select 

               public function approve($nomini_id) {
                        // Update the status for all records with the same nomini_id
                $affectedRows = VoteResult::where('nomini_id', $nomini_id)->get();
                foreach($affectedRows as $affectedRow){
                    $affectedRow->update([
                      'status' => '1'
                    ]);
                }
           
                return redirect()->back()->with('success', 'Nomini Selected successfully.');
          
            }


            public function wingsapprove($wingsnomini_id) {
                      // Update the status for all records with the same wingsnomini_id
              $affectedRows = WingsVoteResult::where('wingsnomini_id', $wingsnomini_id)->get();
              foreach($affectedRows as $affectedRow){
                  $affectedRow->update([
                    'status' => '1'
                  ]);
              }
         
              return redirect()->back()->with('success', 'Wings Nomini Selected successfully.');
        
          }
            public function disapprove($disnomini_id) {
                      // Update the status for all records with the same wingsnomini_id
              $affectedRows = WingsVoteResult::where('wingsnomini_id', $disnomini_id)->get();
              foreach($affectedRows as $affectedRow){
                  $affectedRow->update([
                    'status' => '1'
                  ]);
              }
         
              return redirect()->back()->with('success', 'District Nomini Selected successfully.');
        
          }
               public function cancel($nomini_id) {
                        // Update the status for all records with the same nomini_id
                $affectedRows = VoteResult::where('nomini_id', $nomini_id)->get();
                foreach($affectedRows as $affectedRow){
                    $affectedRow->update([
                      'status' => '0'
                    ]);
                }
           
                return redirect()->back()->with('success', 'Nomini Selected successfully.');
          
            }


            public function wingscancel($wingsnomini_id) {
                      // Update the status for all records with the same wingsnomini_id
              $affectedRows = WingsVoteResult::where('wingsnomini_id', $wingsnomini_id)->get();
              foreach($affectedRows as $affectedRow){
                  $affectedRow->update([
                    'status' => '0'
                  ]);
              }
         
              return redirect()->back()->with('success', 'Wings Nomini Selected successfully.');
        
          }
            public function discancel($disnomini_id) {
                      // Update the status for all records with the same wingsnomini_id
              $affectedRows = WingsVoteResult::where('wingsnomini_id', $disnomini_id)->get();
              foreach($affectedRows as $affectedRow){
                  $affectedRow->update([
                    'status' => '0'
                  ]);
              }
         
              return redirect()->back()->with('success', 'District Nomini Selected successfully.');
        
          }



}
