<x-backend>
    @php
    $id = $instock->id;
    $name = $instock->book->name;
    $unitprice = $instock->price;
    $bookid = $instock->book_id;
    $date=$instock->date;
    $qty=$instock->qty;
    @endphp

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> New Instock </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('backside.instock.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{ route('backside.instock.update',$id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Book </label>
                                <div class="col-sm-10">
                                    {{-- <select class="form-control" name="bookid">
                                        <option> Choose Book </option>
                                        @foreach($books as $book)
                                        <option value="{{ $book->id }}"> {{ $book->name }} </option>
                                        @endforeach
                                    </select> --}}
                                    <input type="text" name="bookname" value="{{$name}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Price </label>
                                <div class="col-sm-10">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="unitprice-tab" data-toggle="tab" href="#unitpriceTab" role="tab" aria-controls="unitpriceTab" aria-selected="true"> Unit Price </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="myTabContent">
                                        <div class="tab-pane fade show active" id="unitpriceTab" role="tabpanel" aria-labelledby="unitprice-tab">
                                            <input type="number" name="unitprice" class="form-control" value="{{$unitprice}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Date </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="name_id" name="date" value="{{$date}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="qty_id" class="col-sm-2 col-form-label"> Qty </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="qty_id" name="qty" value="{{$qty}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icofont-save"></i>
                                        Save
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-backend>