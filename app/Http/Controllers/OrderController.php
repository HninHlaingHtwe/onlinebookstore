<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Order;
use App\Book;
use App\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $orders=Order::all();
        // $books = DB::table('books')->get();

        //$books = DB::table('orders')
        

        return view('backend.order.list',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('backside.order.index')->with('successMsg','Deleting Order in your data');
    }



    public function detail($id,$voucherno)
    {
        $order_voucher=$voucherno;
        $orderdetails=DB::table('orderdetails')
                        ->join('books','books.id','=','orderdetails.book_id')
                        ->select('orderdetails.*','books.name as bookname','books.price as book_price','books.discount as book_discount')
                        ->where('orderdetails.order_id','=',$id)
                        ->get();

       // dd($orderdetails);
        return view('backend.order.detail',compact('orderdetails','order_voucher'));
    }


    public function orderconfirm($id)
    {
            $affected = DB::table('orders')
              ->where('id', $id)
              ->update(['status' => 2]);
       
            //dd($affected);
        return redirect()->route('backside.order.index');
    }
}
