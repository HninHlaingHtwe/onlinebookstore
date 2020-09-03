<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Category;
use App\Book;
use App\Subcategory;
use App\Order;
use App\Author;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {

        $categories=Category::all();
        $subcategories=Subcategory::all();
        $bookitems=Book::where('name','=','Novel')->take(3)->get();
        $freebooks=Book::where('status','=',0)->get();
        $availablebooks=Book::where('status','=',1)->get();

        $latestbooks=Book::latest()->get();

        // if discount item is null
        $discountbooks=Book::whereNotNull('discount')->take(3)->get();

        //$discountbooks=Book::where('discount','>','0')->take(3)->get();

        return view('frontend.index',compact('categories','subcategories','bookitems','freebooks','discountbooks','latestbooks','availablebooks'));
        
    }

    public function subcategory($id)
    {
        // $subcategories=Subcategory::all();

        // return view('frontend.subcategory',compact('subcategories'));

        $subcategory = Subcategory::find($id);


        $category_id = $subcategory->category->id;
        $subcategories = Subcategory::where('category_id',$category_id)->get();

        $subcategorybooks = Book::where('subcategory_id',$id)->paginate(3);
        $latestbooks = Book::latest()->take(3)->get();

        $books=Book::all();

        $subcategory_id=$books->subcategory->id;
        $bookss=Book::where('subcategory_id',$subcategory_id)->get();

        $categories=Category::all();


        $count_result = Book::where('subcategory_id',$id)->count();

        return view('frontend.subcategory',compact('subcategorybooks','subcategory','count_result','latestbooks','subcategories','categories'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    

    public function bookdetail($id)
    {
        $bookdetails=Book::find($id);
        return view('frontend.detail',compact('bookdetails'));
    }

    public function download($id)
    {
        return view('frontend.download');
    }

    public function book()
    {
        return view('frontend.book');
    }

    public function order(Request$request){
        $books=json_decode($request->data);
        $note=$request->note;
        $orderdate=Carbon::now();
        $voucherno=uniqid();
        $total=0;
        foreach ($books as $row) {
            $unitprice=$row->price;
            $discount=$row->discount;
            if($discount){
                $price=$discount;
            }else{
                $price=$unitprice;
            }
            $total+=$price*$row->qty;
        }
        $status='Order';
        $auth=Auth::user();
        $userid=$auth->id;

        $order=new Order();
        $order->orderdate=$orderdate;
        $order->voucherno=$voucherno;
        $order->total=$total;
        $order->note=$note;
        $order->status=$status;
        $order->user_id=$userid;
        $order->save();


        foreach($books as $value){
            $bookid=$value->id;
            $qty=$value->qty;
            $order->books()->attach($bookid,['qty'=>$qty]);
        }
        return response()->json([
            'status'=>'Order Successfully Created'
        ]);

    }
    public function ordersuccess(){
        return view('frontend.ordersuccess');
    }

    public function category()
    {
        $categories=Category::all();

        return view('frontend.category',compact('categories'));
    }

    public function author()
    {
        $authors = DB::table('authors')->get();
        //$authorname=$authors->name;

        //$names=Author::where('name','like',$authorname.'%');

        return view('frontend.author',compact('authors'));
    }

    public function userlist()
    {
         $orderdetails=DB::table('books')
                        ->join('orderdetails','orderdetails.book_id','=','books.id')
                        ->join('orders','orders.id','=','orderdetails.order_id')
                        ->select('books.*')
                        ->where('orders.status','=',2)
                        ->get();

        return view('frontend.userlist',compact('orderdetails'));
    }
    public function searchbysubcate(Request $request){
       $id=$request->id;
       $books=Book::where('subcategory_id',$id)->get();
       return $books;
    }
     public function searchbyaut(Request $request){
       $name=$request->name;

       $authors = DB::table('authors')
                ->where('name', 'like',$name.'%')
                ->get();
        return $authors;
      
    }

    public function authorbook($id)
    {
        $books=DB::table('books')
            ->where('author_id',$id)
            ->get();

        return view('frontend.authorbook',compact('books'));
    }

    public function subcategorylist($id)
    {
        $subcategories=DB::table('subcategories')
                        ->where('category_id',$id)
                        ->get();

        return view('frontend.subcategorylist',compact('subcategories'));


    }

    public function booklist($id)
    {
        $books=DB::table('books')
                ->where('subcategory_id',$id)
                ->get();

        return view('frontend.booklist',compact('books'));
    }
}
