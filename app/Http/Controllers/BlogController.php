<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Blogcategories;
use App\Models\Tehsil;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function blogcategoriesindex()
    
 {
     $blogcategory = Blogcategories::all();
     return view('frontend.pages.blogcategory.index', compact('blogcategory'));
 }

public function blogcategoriescreate(){
  return view('frontend.pages.blogcategory.create');
}



public function blogcategoriesstore(Request $request)
 {
     $request->validate([
         'name'   => 'required|unique:blogcategories,name',
         'status' => 'required',
     ]);     
     Blogcategories::create($request->post());
     return redirect()->route('blogcategories.index')->with('success','Created successfully.');
 }



 public function blogcategoriesedit($id)

 {

    $blogcategory = Blogcategories::where('id', $id)->first();

     return view('frontend.pages.blogcategory.edit',compact('blogcategory'));
 }

 public function blogcategoriesupdate(Request $request)
 {
    
    $request->validate([
        'name'   => 'required|unique:blogcategories,name',
        'status' => 'required',

    ]);

    $blogcategory = Blogcategories::find($request->id);
    if ($blogcategory) {
              // Modify the attributes of the model
        $blogcategory->name   = $request->name;
        $blogcategory->status = $request->status;
        
              // Call the save() method to persist the changes
        $blogcategory->save();
    }
    


     return redirect()->route('blogcategories.index')->with('success','Updated successfully');
 }


 public function blogcategoriesdelete(Request $request){

    $blogcategory = Blogcategories::find($request->id);

    if ($blogcategory) {
      
        $blogcategory->delete();
    }

    return redirect()->route('blogcategories.index')->with('success','deleted successfully');
 }



    //  Blog post 


public function blogpostindex()
    
    {
        $blogpost = BlogPost::all();
        return view('frontend.pages.blogpost.index', compact('blogpost'));
    }

    public function blogpostcreate(){
        $categorys = Blogcategories::where('status','active')->get();
        $tehsil = Tehsil::all();
        return view('frontend.pages.blogpost.create', compact('categorys','tehsil'));
      }

      public function blogpoststore(Request $request)
        {
                // dd($request->all());
            

            $request->validate([
                'description' => 'required',
                'content'     => 'required',
                'category_id' => 'required',
                'title'       => 'required',
                'status'      => 'required',
                ]); 

                $image         = $request->file('blogimage');
                $imageName     = time() . '.' . $image->getClientOriginalExtension();
                $blogimagepath = '/admin/Blog/'.$imageName;
                $image_path    = $image->move(public_path('admin/Blog'), $imageName);
          
     
            BlogPost::create([
                'user_id'     => Auth::id(),
                'category_id' => $request->category_id,
                'title'       => $request->title,
                'tehsil'       => $request->tehsil,
                'description' => $request->description,
                'content'     => $request->content,
                'image'       => $blogimagepath,
                'status'      => $request->status,
            ]);

            return redirect()->route('blogpost.index')->with('success','Created successfully.');
        }


        public function blogpostedit($id)

        {
           $categorys = Blogcategories::where('status','active')->get();
           $blogpost  = BlogPost::where('id', $id)->first();
           return view('frontend.pages.blogpost.edit',compact('blogpost','categorys'));
       
        }



        public function blogpostupdate(Request $request)
        {
                // dd($request->all());
            
            if ($request->hasFile('blogimage')) {
                    // Handle image upload
                $image         = $request->file('blogimage');
                $imageName     = time() . '.' . $image->getClientOriginalExtension();
                $blogimagepath = '/admin/Blog/'.$imageName;
                $image_path    = $image->move(public_path('admin/Blog'), $imageName);
            }
        
            $blogpost = BlogPost::find($request->id);
       
            $request->validate([
                'description' => 'required',
                'content'     => 'required',
                'category_id' => 'required',
                'title'       => 'required',
                'status'      => 'required',
                ]); 
           
            if ($blogpost) {
                    // Update the record
                $blogpost->update([
                    'user_id'     => Auth::id(),
                    'category_id' => $request->category_id,
                    'title'       => $request->title,
                    'description' => $request->description,
                    'content'     => $request->content,
                    'status'      => $request->status,
                    'image'       => isset($blogimagepath) ? $blogimagepath : $blogpost->image,
                  
                ]);
        
                return redirect()->route('blogpost.index')->with('success', 'Update Successful!');
            } 
            else {
                return redirect()->route('blogpost.index')->with('error', 'Record not found!');
            }           
        }


        public function blogpostdelete(Request $request){

            $blogpost = Blogpost::find($request->id);
        
            if ($blogpost) {
              
                $blogpost->delete();
            }
        
            return redirect()->route('blogpost.index')->with('success','deleted successfully');
         }

}
