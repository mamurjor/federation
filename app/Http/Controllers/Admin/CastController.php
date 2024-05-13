<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CastController extends Controller
{
    
        public function index()
        {
            $cast = Cast::all();
            return view('backend.page.cast.index', compact('cast'));
        }


        public function create()
        {
            return view('backend.page.cast.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'code' => 'required',
            ]);     
            

            $image      = $request->file('castimage');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $path       = '/admin/Cast/'.$imageName;
            $image_path = $image->move(public_path('admin/Cast'), $imageName);
                

            Cast::create([
                'name'  => $request->name,
                'code'  => $request->code,
                'content'  => $request->content,
                'image' => $path,
            ]);
            return redirect()->route('cast.index')->with('success','Created successfully.');
        }

        public function edit($id)

        {
            $cast = Cast::where('id', $id)->first();
            return view('backend.page.cast.edit',compact('cast'));
        }


        public function update(Request $request)
        {
            
            $request->validate([
                'name' => 'required',
                'code' => 'required',
            ]);
            

            if ($request->hasFile('castimage')) {
                  // Handle image upload
                $image      = $request->file('castimage');
                $imageName  = time() . '.' . $image->getClientOriginalExtension();
                $path       = '/admin/Cast/'.$imageName;
                $image_path = $image->move(public_path('admin/Cast'), $imageName);
            }

        
            $cast = Cast::find($request->id);
             
            if ($cast) {
                // Update the record
                $cast->update([
                    
                    'name' => $request->name,
                    'code' => $request->code,
                    'content' => $request->content,
                    'image'  => isset($path) ? $path : $cast->image,
                  
                ]);
        
                return redirect()->route('cast.index')->with('success','Updated successfully');
            } 
            else {
                return redirect()->route('cast.index')->with('error', 'Record not found!');
            } 
    


                
            
           
        }


        public function delete(Request $request){

            $cast = Cast::find($request->id);

            if ($cast) {
            
                $cast->delete();
            }

            return redirect()->route('cast.index')->with('success','deleted successfully');
        }

}
