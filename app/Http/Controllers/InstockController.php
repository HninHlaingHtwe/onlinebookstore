<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instock;
use App\Book;

class InstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instocks=Instock::all();
        return view('backend.instock.list',compact('instocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instocks=Instock::all();
        $books=Book::all();
        return view('backend.instock.new',compact('instocks','books'));
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
                'bookid'=> 'required|numeric|min:0|not_in:0',]);

        if($validator)
           { //name from input type name
                   $bookid=$request->bookid;
                   $price=$request->unitprice;
                   $qty=$request->qty;
                   $date=$request->date;
                   
                   //data insert
                   $instock=new Instock();
                   //name from table colname
                   $instock->book_id=$bookid;
                   $instock->price = $price;
                   $instock->qty = $qty;
                   $instock->date=$date;
                   $instock->save();
                   return redirect()->route('backside.instock.index')->with("successMsg",'New Instock is ADDED in your data');
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
        $instock=Instock::find($id);
         $books=Book::all();

        return view('backend.instock.edit',compact('instock','books'));
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
        $bookname=$request->bookname;
        $price=$request->unitprice;
        $qty=$request->qty;
        
        //Data update
        $instock=Instock::find($id);
        $instock->book->name=$bookname;
        $instock->price = $price;
        $instock->qty = $qty;
        $instock->save();
        return redirect()->route('backside.instock.index')->with('successMsg','Existing Instock is UPDATED in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $instock=Instock::find($id);
        $instock->delete();
        return redirect()->route('backside.instock.index')->with('successMsg','Deleting instock in your data');
    }
}
