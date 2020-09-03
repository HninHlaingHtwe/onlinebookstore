<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories=Subcategory::all();
        return view('backend.subcategory.list',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        
        return view('backend.subcategory.new',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
                'name'=>['required'],
                'categoryid'=> 'required|numeric|min:0|not_in:0',
                'photo'=>'required|mimes:jpeg,bmp,png,jpg']);
       //dd("L");
        if($validator)
        {
                $name=$request->name;
                $categoryid=$request->categoryid;
                $photo=$request->photo;
                // dd($photo);
                   //file upload
                $imageName=time().'.'.$photo->extension();
                $photo->move(public_path('images/subcategory'),$imageName);
                $filepath='images/subcategory/'.$imageName;
                // dd($categoryid);
                //data insert
                $subcategory=new Subcategory();
                $subcategory->name=$name;
                $subcategory->category_id=$categoryid;
                $subcategory->photo=$filepath;
                $subcategory->save();
                return redirect()->route('backside.subcategory.index')->with('successMsg','New Subcategory is ADDED in your data');
        }
        else{
                return redirect::back()->withErrors($validator);
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $subcategory=Subcategory::find($id);
         $categories=Category::all();
        // dd($category);

        return view('backend.subcategory.edit',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name=$request->name;
        $categoryid=$request->categoryid;
        $newphoto=$request->photo;
        $oldphoto=$request->oldPhoto;
        if ($request->hasFile('photo')) {
            # file upload.
              $imageName=time().'.'.$newphoto->extension();
                   $newphoto->move(public_path('images/subcategory'),$imageName);
                   $filepath='images/subcategory/'.$imageName;
            if (\File::exists(public_path($oldphoto))) {
                \File::delete(public_path($oldphoto));
            }
        }
        else{
            $filepath=$oldphoto;
        }
        //Data update
        $subcategory=Subcategory::find($id);
        $subcategory->name=$name;
        $subcategory->category_id=$categoryid;
        $subcategory->photo=$filepath;
        $subcategory->save();
        return redirect()->route('backside.subcategory.index')->with('successMsg','Existing SubCategory is UPDATED in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $subcategory=Subcategory::find($id);
        $subcategory->delete();
        return redirect()->route('backside.subcategory.index')->with('successMsg','Deleting subcategory in your data');
    }
}
