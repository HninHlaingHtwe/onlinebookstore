<x-frontend>
	<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg subtitle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> {{-- {{$details->codeno}} --}} </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

   

   {{--  @php 
    $id=$details->id;
    $codeno=$details->codeno;
    $name=$details->name;

    $unitprice=$details->price;
    $discount=$details->discount;
    $description=$details->description;
    $photos=json_decode($details->photo);
    $photo=$photos[0];

    $brandname=$details->brand->name;


    @endphp --}}

   

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{-- {{asset($photo)}} --}}" alt="" width="100px" height="400px" object-fit="cover">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">

                           {{--  @foreach($photos as $img) --}}
                             <img data-imgbigurl="{{-- {{asset($img)}} --}}"
                                src="{{-- {{asset($img)}} --}}" alt="" style="width: 70px;height: 100px;object-fit: cover;">
                           
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                	
                    <div class="product__details__text">
                        <h3>{{-- {{$name}} --}}’s Package</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                       {{--  @if($discount) --}}
	                            <div class="product__details__price">
				                    {{-- {{$discount}} --}} MMK <br>
				                      	<del class="text-muted">{{-- {{$unitprice}} --}} MMK</del>
				                </div>
			           {{--  @else --}}
			                    <div class="product__details__price">
			                       {{-- 	{{$unitprice}} --}} MMK
			                    </div>
			            {{-- @endif --}}
                        <p>{{-- {!!$description !!} --}}</p>
                        <a href="javascript:void(0)" class="addtocartBtn btn btn-primary"
	                                                	{{-- data-id="{{$id}}"
	                                                	data-name="{{$name}}"
	                                                	data-codeno="{{$codeno}}"
	                                                	data-price="{{$unitprice}}"
	                                                	data-discount="{{$discount}}" 
	                                                	data-photo="{{$photo}}" --}}>ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Brand</b> <span>{{-- {{$brandname}} --}}</span></li>
                            
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </div>
           
        </div>
    </section>
    <!-- Product Details Section End -->
</x-frontend>	