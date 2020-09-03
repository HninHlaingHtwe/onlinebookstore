<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors=Author::all();

        // dd($categories);

        return view('backend.author.list',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.author.new');   
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
                'name'=>['required','string','max:255','unique:categories']]);

        if($validator)
           { //name from input type name
                   $name=$request->name;
                   
                   //data insert
                   $author=new Author();
                   //name from table colname
                   $author->name=$name;
                   $author->save();
                   return redirect()->route('backside.author.index')->with("successMsg",'New Author is ADDED in your data');
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
        $author=Author::find($id);
        // dd($category);

        return view('backend.author.edit',compact('author'));
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
        
        //Data update
        $author=Author::find($id);
        $author->name=$name;
        $author->save();

        return redirect()->route('backside.author.index')->with('successMsg','Existing Author is UPDATED in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $author=Author::find($id);
        $author->delete();
        return redirect()->route('backside.author.index')->with('successMsg','Deleting Author in your data');
    }
}
