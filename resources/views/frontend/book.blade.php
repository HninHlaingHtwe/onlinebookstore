<x-frontend>

        <h1 style="text-align: center;background-color: pink;height: 100px;padding-top: 20px;">Shopping Book</h1>
        <div class="container">
            <div class="row shoppingcart_div">
                <div class="col-lg-12">
                    <div>
                         <table class="table">
                            <thead>
                                <th>Name</th>
                                <th>Price </th>
                                <th colspan="3">Quantity</th>
                                <th>Subtotal</th>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                            <tfoot id="shoppingcart_tfoot">
                                <tr>
                                    <td colspan="3">
                                        <h3 class="text-right"> Total : </h3>
                                    </td>
                                    <td>
                                        <span class="shoppingbookTotal"> Ks</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
       
       
            <div class="row shoppingcart_div">
                <div class="col-lg-7">
                    <textarea class="form-control" placeholder="Note" id="note"></textarea>
                    <a href="{{ route('index') }}" class="btn cart-btn" style="background-color: pink;">CONTINUE SHOPPING</a>
                </div>
                <div class="col-lg-5">
                    <div class="shoping__checkout">
                        <h5>Book Total</h5>
                        <ul>
                            <li> Subtotal <span class="shoppingbookTotal"></span></li>
                            
                        </ul>
                        @if(Auth::check())

                        <a href="javascript:void(0)" class="btn btn-success checkoutBtn" style="background-color: pink;">PROCEED TO CHECKOUT</a>

                        @else

                        <a href="{{ route('login') }}" class="btn btn-success checkoutBtn" style="background-color: pink;">PROCEED TO CHECKOUT</a>

                        @endif
                    </div>
                </div>
            </div>
            <div class="container noneshoppingcart_div" style="padding-bottom: 600px;">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('images/noitem.png') }}" class="img-fluid d-inline-block" style="width: 80px; height: 80px; object-fit: cover;">
                        <h3 class="d-inline-block mx-2"> There are no items in this cart </h3>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a href="{{ route('index') }}" class="btn btn-success cart-btn" style="background-color: pink;">CONTINUE SHOPPING</a>
                    </div>
                </div>
            </div>
         </div>

</x-frontend>