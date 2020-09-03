<x-backend>
 @php
 $id=$remainderdetails->id;
 $isbn=$remainderdetails->isbn;
 $name=$remainderdetails->name;
 $unitprice=$remainderdetails->price;
 $qty=$remainderdetails->qty;
 $photos=json_decode($remainderdetails->photo);
 $photo=$photos[0];
 @endphp

 <main class="app-content">
    <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Book Details</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="{{ route('backside.book.index') }}" class="btn btn-outline-primary">
                <i class="icofont-double-left icofont-1x"></i>
            </a>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <!-- Breadcrumb Section Begin -->
                    <section class="breadcrumb-section set-bg subtitle">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="breadcrumb__text">
                                        <h2> {{$isbn}} </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Breadcrumb Section End -->

                    <!-- Product Details Section Begin -->
                    <section class="product-details spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="product__details__pic">
                                        <div class="product__details__pic__item">
                                            <img class="product__details__pic__item--large" src="{{asset($photo)}}" alt="" width="150px" height="150px" object-fit="cover">
                                        </div>
                        {{-- <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="frontend/img/product/details/product-details-2.jpg"
                                src="frontend/img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="frontend/img/product/details/product-details-3.jpg"
                                src="frontend/img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="frontend/img/product/details/product-details-5.jpg"
                                src="frontend/img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="frontend/img/product/details/product-details-4.jpg"
                                src="frontend/img/product/details/thumb-4.jpg" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <div class="row">
                                <div class="col-4">
                                    <h5><b>Name: </b></h5>
                                </div>
                                <div class="col-8">
                                     <span>{{Str::limit($name),20}}</span>
                                </div>
                            </div>
                           
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                
                            </div>

                            <div class="product__details__price">
                                <div class="row">
                                    <div class="col-4">
                                        <h5><b>Price: </b></h5>
                                    </div>
                                    <div class="col-8">
                                        {{$unitprice}}Ks
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5><b>Quantity: </b></h5>
                                </div>
                                <div class="col-8">
                                    {{ $qty }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->
    </div>
</div>
</div>
</div>
</main>



</x-backend>