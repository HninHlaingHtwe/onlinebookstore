<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Author;
use App\Subcategory;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booklists=Book::all();
        return view('backend.book.list',compact('booklists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors=Author::all();
        $subcategories=Subcategory::all();
        return view('backend.book.new',compact('authors','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255', 'unique:books'],
            //'pdf'=>'required|mimes:pdf'
        ]);

         if ($validator) {
            $name = $request->name;
            $isbn = $request->isbn;
            $pdf = $request->pdf;
            // dd($pdf);
            $unitprice = $request->unitprice;
            $discount = $request->discount;
            $publisher=$request->publisher;
            $edition=$request->edition;
            $status=$request->status;
            $publishdate=$request->publishdate;
            $review = $request->review;
            $authorid = $request->authorid;
            $subcategoryid = $request->subcategoryid;


            // FILE UPLOAD

            if ($request->hasfile('images')) 
            {
                $i=1;
                foreach($request->file('images') as $image)

                {
                    
                    $imagename = time().$i.'.'.$image->extension();

                    $image->move(public_path('images/book'), $imagename);  
                    $data[] = 'images/book/'.$imagename;
                    $i++;
                }

            }
            // $photoString = implode(',', $data);
            //pdf upload
            //$path="";
            if ($request->hasfile('pdf')) 
            {
                    $file=$request->file('pdf');
                    // dd($file);
                    $upload_dir=public_path().'/pdf/';
                    $pdfname =$file->extension();
                    dd($pdfname);
                    $file->move($upload_dir, $pdfname);  
                    $path= '/pdf/'.$pdfname;
                    // dd($path);
            }


            
            $book= new Book();
            $book->isbn = $isbn;
            $book->name = $name;
            $book->photo = json_encode($data);
            $book->pdf = $path;
            $book->price = $unitprice;
            $book->discount = $discount;
            $book->publisher = $publisher;
            $book->edition = $edition;
            $book->publish_date = $publishdate;
            $book->review = $review;
            $book->status=$status;
            $book->subcategory_id = $subcategoryid;
            $book->author_id = $authorid;
            $book->save();

            return redirect()->route('backside.book.index')->with("successMsg", "New Book is ADDED in your data");


        }else{
            return Redirect::back()->withErrors($validator);
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
        $bookdetails=Book::find($id);

        return view('backend.book.detail',compact('bookdetails'));


       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategories = Subcategory::all();
        $authors = Author::all();

        $book = Book::find($id);

        return view('backend.book.edit',compact('subcategories','authors','book'));
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
        $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            
        ]);

        if ($validator) {
            $name = $request->name;
            $unitprice = $request->unitprice;
            $discount = $request->discount;
            $publisher=$request->publisher;
            $edition=$request->edition;
            $publishdate=$request->publishdate;
            $review = $request->review;
            $authorid = $request->authorid;
            $subcategoryid = $request->subcategoryid;
            $isbn = $request->isbn;


            // FILE UPLOAD

            if ($request->hasfile('images')) 
            {

                $i = 1;
                foreach($request->file('images') as $file)
                {
                    $photoname = time().$i.'.'.$file->extension();
                    $file->move(public_path('images/book'), $photoname);  
                    $data[] = 'images/book/'.$photoname;
                    $i++;
                }

                foreach (json_decode($request->oldphoto) as $oldphoto){
                    if(\File::exists(public_path($oldphoto))){
                        \File::delete(public_path($oldphoto));
                    }
                }
            }else{
                $data = json_decode($request->oldphoto);
            }

            // $photoString = implode(',', $data);
            //upload pdf


            // FILE UPLOAD

            if ($request->hasfile('pdf')) 
            {
                    $file=$request->file('pdf');
                    $upload_dir=public_path().'/pdf/';
                    $pdfname = $file->getClientOriginalExtension();
                    $file->move($upload_dir, $pdfname);  
                    $path= '/pdf/'.$pdfname;

                    if(\File::exists(public_path($oldpdf))){
                        \File::delete(public_path($oldpdf));
                    }
            
            }

        

            $book= Book::find($id);
            $book->isbn = $isbn;
            $book->name = $name;
            $book->photo = json_encode($data);
            $book->pdf = $path;
            $book->price = $unitprice;
            $book->discount = $discount;
            $book->publisher = $publisher;
            $book->edition = $edition;
            $book->publish_date = $publishdate;
            $book->review = $review;
            $book->subcategory_id = $subcategoryid;
            $book->author_id = $authorid;
            $book->save();

            return redirect()->route('backside.book.index')->with("successMsg", "New Book is Updated in your data");


        }else{
            return Redirect::back()->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        foreach (json_decode($book->photo) as $oldphoto){
            if(\File::exists(public_path($oldphoto))){
                \File::delete(public_path($oldphoto));
            }
        }
        foreach (json_decode($book->pdf) as $oldpdf){
            if(\File::exists(public_path($oldpdf))){
                \File::delete(public_path($oldpdf));
            }
        }

        $book->delete();

        return redirect()->route('backside.book.index')->with("successMsg", "New  Book is DELETED in your data");
    }


    public function remainder($id)
    {
         $remainderdetails=Book::find($id);

        return view('backend.book.remainder',compact('remainderdetails'));
    }

    public function payment($id)
    {
        
        $bookstatus = DB::table('books')
              ->where('id', $id)
              ->update(['status' => 1]);

        return redirect()->route('backside.book.index');
    }
}
