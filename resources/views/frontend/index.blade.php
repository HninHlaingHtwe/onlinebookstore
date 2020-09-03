<x-frontend>
	<main>

        <!-- slider Area Start -->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height" data-background="{{asset('bg4.jpg')}}" class="img-fluid" style="height: 0p5x;">
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="{{asset('bg4.jpg')}}" alt="" style="object-fit: cover;width: 100px;">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInRight" data-delay=".6s" style="font-family: logo;font-weight:italic;color: navy;text-align: center;height: 200px;">Online Book Store</h1>
                                    <h6 style="color: red;padding-top: 100px;font-family: all;">Welcome from my world book &hearts;</h6>
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
        <section class="category-area pt-5">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">

                    <div class="col-lg-2 justify-content-center">
                            
                            <select class="form-control" id="subcategoryid">

                            <option>Choose Book type</option>
                            @foreach($subcategories as $subcategory)

                            <option value="{{$subcategory->id}}">
                                {{$subcategory->name}}
                            </option>
                             @endforeach
                        </select>
                    </div>
                    <div class="col-lg-10">
                        <button class="btn btn-success searchBooktype">Search</button>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Category Area End-->


        <!-- Latest Products Start -->
        <section class="latest-product-area padding-bottom pt-5">
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
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Free Boooks</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Books</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Discount Books</a>
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
                        <div class="row booksearch">
                            @foreach($freebooks as $freebook)

                                @php
                                    $id=$freebook->id;
                                    $photos=json_decode($freebook->photo);
                                    $photo=$photos[0];
                                    $name=$freebook->name;
                                    $discount=$freebook->discount;
                                    $price=$freebook->price;
                                    $isbn=$freebook->isbn;
                                    $publish_date=$freebook->publish_date;
                                    $publisher=$freebook->publisher;
                                    $review=$freebook->review;
                                    $edition=$freebook->edition;

                                    $status=$freebook->status;

                                @endphp
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <img src="{{asset($photo)}}" alt="" class="img-fluid" style="width: 300px;height: 300px;">
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
                                            	<a href="{{route('bookdetail',$id)}}" class="btn btn-primary">
                                                    <i class="icofont-eye"></i>
                                                </a>
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-download"></i>
                                                </a>
                                                
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
                                                        data-photo="{{$photo}}">
                                                    <i class="icofont-shopping-cart"></i>
                                                </a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                 <!-- Card two -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            @foreach($latestbooks as $latestbook)

                                @php
                                    $id=$latestbook->id;
                                    $photos=json_decode($latestbook->photo);
                                    $photo=$photos[0];
                                    $name=$latestbook->name;
                                    $discount=$latestbook->discount;
                                    $price=$latestbook->price;
                                    $isbn=$latestbook->isbn;
                                    $publish_date=$latestbook->publish_date;
                                    $publisher=$latestbook->publisher;
                                    $review=$latestbook->review;
                                    $edition=$latestbook->edition;

                                @endphp
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{asset($photo)}}" alt="" style="width: 300px;height: 300px;" class="img-fluid">
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
                                                <a href="{{route('bookdetail',$id)}}" class="btn btn-primary">
                                                    <i class="icofont-eye"></i>
                                                </a>
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-download"></i>
                                                </a>
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
                                                        data-photo="{{$photo}}">
                                                    <i class="icofont-shopping-cart"></i>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                 <!-- card foure -->
                    <div class="tab-pane fade show" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="row">
                            @foreach($discountbooks as $discountbook)

                                @php 
                                    $id=$discountbook->id;
                                    $photos=json_decode($discountbook->photo);
                                    $photo=$photos[0];
                                    $name=$discountbook->name;
                                    $discount=$discountbook->discount;
                                    $price=$discountbook->price;
                                    $isbn=$latestbook->isbn;
                                    $publish_date=$latestbook->publish_date;
                                    $publisher=$latestbook->publisher;
                                    $review=$latestbook->review;
                                    $edition=$latestbook->edition;


                                @endphp
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{asset($photo)}}" alt="" style="width: 300px;height: 300px;" class="img-fluid">
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
                                                <a href="{{route('bookdetail',$id)}}" class="btn btn-primary">
                                                    <i class="icofont-eye"></i>
                                                </a>
                                                
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-download"></i>
                                                </a>
                                                
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
                                                        data-photo="{{$photo}}">
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

        {{-- Available Book --}}
        <section>
        <div class="pt-5 latest-product-area padding-bottom">
            <div class="container">  
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Available Books</h1>
                    </div>
                </div>
                <div class="row pt-5 booksearch">
                    @foreach($availablebooks as $availablebook)
                            @php 
                                $id=$availablebook->id;
                                    $photos=json_decode($availablebook->photo);
                                    $photo=$photos[0];
                                    $name=$availablebook->name;
                                    $discount=$availablebook->discount;
                                    $price=$availablebook->price;
                                    $isbn=$availablebook->isbn;
                                    $publish_date=$availablebook->publish_date;
                                    $publisher=$availablebook->publisher;
                                    $review=$availablebook->review;
                                    $edition=$availablebook->edition;

                                    $status=$availablebook->status;
                            @endphp
                        <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{asset($photo)}}" alt="" style="width: 300px;height: 300px;" class="img-fluid">
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
                                                <a href="{{route('bookdetail',$id)}}" class="btn btn-primary">
                                                    <i class="icofont-eye"></i>
                                                </a>
                                                @if($status==0)
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-download"></i>
                                                </a>
                                                @endif
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
                                                        data-photo="{{$photo}}">
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
      
        @section('script_content')
            <script type="text/javascript">
                $(document).ready(function(){

                    $('.searchBooktype').on('click',function() {
                        var id=$("#subcategoryid").val();
                        console.log(id);
                        //alert('hello');
                   
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.post('/searchbysubcate',{id:id},function(res){
                        console.log(res);
                        var routeURL="{{route('bookdetail',$id)}}";
                        
                        var html="";
                        $.each(res,function(i,v){
                            routeURL=routeURL.replace(':id',v.id);
                            var photo=JSON.parse(v.photo);
                            html+=`
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="${photo[0]}" alt="" style="width: 300px;height: 300px;" class="img-fluid">
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="icofont-star"></i>  
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star low-star"></i>
                                                <i class="icofont-star low-star"></i>
                                        </div>
                                        <h4>${v.name}</h4>
                                        <div class="price">
                                            <ul>`;
                                               if(v.discount!="0"){
                                                html+=
                                                    `<li>${v.discount}Ks</li>
                                                    <li><del> ${v.price}  </del>Ks</li>
                                                `;
                                            }else{

                                                html+=`
                                                        <li> ${v.price}Ks</li>
                                            `; }
                                                    
                                         html+= `</ul>
                                        </div>
                                        <div>
                                                <a href="${routeURL}" class="btn btn-primary">
                                                    <i class="icofont-eye"></i>
                                                </a>
                                                <a href="" class="btn btn-primary">
                                                    <i class="icofont-download"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="addtoBookBtn btn btn-primary"
                                                
                                                data-id="${v.id}"
                                                        data-name="${v.name}
                                                        data-isbn="${v.isbn}"
                                                        data-price="${v.price}"
                                                        data-discount="${v.discount}" 
                                                        data-publisher="${v.publisher}"
                                                        data-publish_date="${v.publish_date}"
                                                        data-edition="${v.edition}"
                                                        data-review="${v.review}"
                                                        data-status="${v.status}"
                                                        data-photo="${v.photo}">
                                                    <i class="icofont-shopping-cart"></i>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>`;

                        })

                        $(".booksearch").html(html);

                    })
                    });

                });
            </script>
        @endsection
        

    </main>
</x-frontend>	
