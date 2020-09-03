<x-frontend>
	<div class="pt-5 latest-product-area padding-bottom">
            <div class="container-fluid">  
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;background-color: pink;padding-top: 20px;height: 100px;">Authors' Book Lists</h1>
                    </div>
                </div>
                <div class="row pt-5">
                    @foreach($books as $book)
                            @php 
                                $id=$book->id;
                                    $photos=json_decode($book->photo);
                                    $photo=$photos[0];
                                    $name=$book->name;
                                    $discount=$book->discount;
                                    $price=$book->price;
                                    $isbn=$book->isbn;
                                    $publish_date=$book->publish_date;
                                    $publisher=$book->publisher;
                                    $review=$book->review;
                                    $edition=$book->edition;

                                    $status=$book->status;
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
    </div>
</x-frontend>