<x-frontend>
	<main>

        <!-- slider Area Start -->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height" data-background="{{asset('frontend/img/bgbook.jpg')}}">
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center justify-content-between">
                            {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="{{asset('frontend/img/bgbook.jpg')}}" alt="" style="object-fit: cover;">
                                </div>
                            </div> --}}
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInRight" data-delay=".6s" style="font-family: all;">Online Book Store</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
            
        <!-- Category Area Start-->
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            <h2>Novel Books</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                        @foreach($bookitems as $bookitem)

                                @php
                                    $id=$bookitem->id;
                                    $name=$bookitem->name;
                                    $price=$bookitem->price;
                                    $discount=$bookitem->discount;
                                    $photo=$bookitem->photo;
                                @endphp
                        	<div class="col-lg-4">
                            <div class="category-img">
                                <div class="product-caption">
                                		<div>
                                			<img src="{{asset($photo)}}" class="img-fluid">
                                		</div>
                                        <div class="product-ratting">
                                             <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star low-star"></i>
                                            <i class="icofont-star low-star"></i>
                                        </div>
                                        <h4>{{ $name }}</h4>
                                        <div class="price">
                                            <ul>
                                                @if($discount)
                                                <li>{{$discount}}Ks</li>
                                                <li><del> {{$price}}  </del>Ks</li>
                                                @else
                                                    <li>    {{ $price}} Ks</li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div>
                                        	<a href="" class="btn btn-primary">
                                                <i class="icofont-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-primary">
                                                <i class="icofont-download"></i>
                                            </a>
                                            <a href="" class="btn btn-primary">
                                                <i class="icofont-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </section>
        <!-- Category Area End-->

        <!-- Category Area Start-->
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            <h2>Best Seller Books</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-xl-4 col-lg-6"> --}}
                        {{-- <div class="single-category mb-30"> --}}
                        	<div class="col-lg-4">
                            <div class="category-img">
                                <div class="product-caption">
                                		<div>
                                			<img src="{{asset('frontend/img/bgbook.jpg')}}" class="img-fluid">
                                		</div>
                                        <div class="product-caption">
                                        <div class="product-ratting">
                                           <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star low-star"></i>
                                            <i class="icofont-star low-star"></i>
                                        </div>
                                        <h4>Green Dress with details</h4>
                                        <div class="price">
                                            <ul>
                                                <li>$40.00</li>
                                                <li class="discount">$60.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary">
                                                <i class="icofont-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-primary">
                                                <i class="icofont-download"></i>
                                            </a>
                                            <a href="" class="btn btn-primary">
                                                <i class="icofont-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            </div>
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </section>
        <!-- Category Area End-->

        <!-- Latest Products Start -->
        <section class="latest-product-area padding-bottom">
            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Products</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Boooks</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Books</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Discount Books</a>
                                    {{-- <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a> --}}
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            @foreach($latestbooks as $latestbook)

                                @php
                                    $id=$latestbook->id;
                                    $photo=$latestbook->photo;
                                    $name=$latestbook->name;
                                    $discount=$latestbook->discount;
                                    $price=$latestbook->price;
                                @endphp
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <img src="{{asset($photo)}}" alt="">
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-ratting">
                                               <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star low-star"></i>
                                                <i class="icofont-star low-star"></i>
                                            </div>
                                            <h4>{{$name}}</h4>
                                            <div class="price">
                                                <ul>
                                                    @if($discount)
                                                    <li>{{$discount}}Ks</li>
                                                    <li><del> {{$price}}  </del>Ks</li>
                                                    @else
                                                        <li>    {{ $price}} Ks</li>
                                                    @endif 
                                                </ul>
                                            </div>
                                            <div>
                                            	<a href="" class="btn btn-primary">
                                                    <i class="icofont-eye"></i>
                                                </a>
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-download"></i>
                                                </a>
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->

        
        <div id="letter">
          <div class="container mt-5">
            <h1 style="text-align: center; color: white;padding-top: 80px;">NEWSLETTER</h1>
            <p style="text-align: center; color: white;">Rerum numquam illum recusandae quia mollitia consequator</p>
            <hr id="h">
            <input type="email" name="email" placeholder="Enter Your Email"><a href="" class="btn btn-outline-warning d-xl-inline-blog d-lg-inline-block d-md-none d-sm-none d-none" id="letterBtn">Subscribe</a>
          </div>
        </div>

      

        

    </main>
</x-frontend>	
