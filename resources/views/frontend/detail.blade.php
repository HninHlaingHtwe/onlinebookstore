<x-frontend>
	<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg subtitle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text" style="width: 100px;height: 100px;padding-left: 200px;padding-top: 20px;">
                        <p> {{$bookdetails->isbn}} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

   

    @php 
    $id=$bookdetails->id;
    $isbn=$bookdetails->isbn;
    $name=$bookdetails->name;
    $edition=$bookdetails->edition;
    $price=$bookdetails->price;
    $discount=$bookdetails->discount;
    $review=$bookdetails->review;
    $publisher=$bookdetails->publisher;
    $status=$bookdetails->status;
    $publish_date=$bookdetails->publish_date;
    $photos=json_decode($bookdetails->photo);
    $photo=$photos[0];

    $authorname=$bookdetails->author->name;


    @endphp

   

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset($photo)}}" alt="" style="width: 300px;height: 300px;object-fit: cove;"  class="img-fluid">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">

                            @foreach($photos as $img)
                             <img data-imgbigurl="{{asset($img)}}"
                                src="{{asset($img)}}" alt="" style="width: 150px;height: 100px;object-fit: cover;">
                           
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                	
                    <div class="product__details__text">
                        <h3>{{$name}}’s Package</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        @if($discount)
	                            <div class="product__details__price">
				                    {{$discount}} MMK <br>
				                      	<del class="text-muted">{{$price}} MMK</del>
				                </div>
			            @else
			                    <div class="product__details__price">
			                       	{{$price}} MMK
			                    </div>
			            @endif
                        <p>{!!$review !!}</p>
                        <p>{{$publisher}}</p>
                        <p>{{$edition}}</p>
                        <p>{{$status}}</p>
                        <p>{{$publish_date}}</p>
                        <a href="javascript:void(0)" class="addtoBookBtn btn btn-primary" 
	                                                	data-id="{{$id}}"
                                                        data-name="{{$name}}"
                                                        data-isbn="{{$isbn}}"
                                                        data-price="{{$price}}"
                                                        data-discount="{{$discount}}" 
                                                        data-publisher="{{$publisher}}"
                                                        data-publish_date="{{$publish_date}}"
                                                        data-edition="{{$edition}}"
                                                        data-review="{{$review}}"
                                                        data-status="{{$status}}"
                                                        data-photo="{{$photo}}">ADD TO CARD</a>
                        {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                        <ul>
                            <li><b>Author</b> <span>{{$authorname}}</span></li>
                            
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                    <a href="#"><i class="icofont-pinterest"></i></a>
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