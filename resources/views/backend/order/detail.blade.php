<x-backend>
  
		
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
          <p>A Printable Invoice Format</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Invoice</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  
                </div>
                <div class="col-6">
                  <h5 class="text-right">Voucherno:{{$order_voucher}} </h5>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Book Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $total=0; @endphp
                      @foreach($orderdetails as $orderdetail)
                         @php 
                            $bookname=$orderdetail->bookname;
                            $book_price=$orderdetail->book_price;
                            $book_discount=$orderdetail->book_discount;
                            $qty=$orderdetail->qty;

                           
                            if($book_discount){
                              
                              $price=$book_discount;
                            }else{
                              $price=$book_price;
                            }
                            $subtotal=$price*$qty;
                            $total+=$subtotal;
                         @endphp
                      <tr>
                        <td>{{$bookname}}</td>
                        <td>{{$qty}}</td>
                        <td>{{$price}}</td>
              
                        <td>{{$subtotal}}</td>
                        {{-- <td>
                          <a href="{{route('orderconfirm',['id' => $id, 'status' => $status])}}" class="btn btn-warning">
                                            <i class="icofont-tick-mark"></i>
                          </a>
                        </td> --}}
                      </tr>
                       @endforeach
                       <tr>
                         <td colspan="3">
                           Total
                         </td>
                         <td>
                           {{$total}}ks
                         </td>
                       </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
</x-backend>