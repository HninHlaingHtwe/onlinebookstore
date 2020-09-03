<x-backend>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Book </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('backside.book.create') }}" class="btn btn-outline-primary">
                    <i class="icofont-plus icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        @if(session('successMsg') != NULL)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> ✅ SUCCESS!</strong>
                            {{ session('successMsg') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped" id="sampleTable">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th> # </th>
                                        <th> Name </th>
                                        <th> Author's Name</th>
                                        <th> Price </th>
                                        <th>Pdf</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1; @endphp
                                    @foreach($booklists as $booklist)
                                    @php
                                    $id = $booklist->id;
                                    $bookname = $booklist->name;
                                    //dd($bookname);
                                    $unitprice = $booklist->price;
                                    $discount = $booklist->discount;
                                    $isbn = $booklist->isbn;
                                    $status=$booklist->status;
                                    $pdf=$booklist->pdf;

                                    $author = $booklist->author->name;
                                   
                                    $photos = json_decode($booklist->photo);


                                    $photo = $photos[0];
                                    @endphp
                                    <tr>
                                        <td> {{ $i++ }} </td>
                                        <td> 
                                            <div class="d-flex no-block align-items-center">
                                                <div class="mr-3">
                                                    <img src="{{ asset($photo) }}"
                                                    alt="user" class="rounded-circle" width="50"
                                                    height="45" />
                                                </div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium"> {{ $isbn }} </h5>
                                                    <span class="text-muted font-14">
                                                        <?= substr($bookname, 0, 30) . '...'; ?>   
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td> {{ $author }} </td>
                                        <td> 
                                            @if($discount)
                                            {{ $discount }} Ks
                                            <del class="d-block"> <?= $unitprice ?> Ks </del>
                                            @else
                                            {{ $unitprice }} Ks
                                            @endif
                                        </td>
                                        <td>
                                            {{$pdf}}
                                        </td>
                                        <td>
                                            {{$status}}
                                        </td>
                                        <td>
                                            <a href="{{ route('backside.book.show',$id) }}" class="btn btn-info">
                                                <i class="icofont-info icofont-1x"></i>
                                            </a>

                                            <a href="{{ route('backside.book.edit',$id) }}" class="btn btn-warning">
                                                <i class="icofont-ui-settings icofont-1x"></i>
                                            </a>

                                            <a href="{{ route('remainder',$id) }}" class="btn btn-warning">
                                                <i class="icofont-law-order"></i>
                                            </a>
                                            <a href="{{route('payment',$id)}}" class="btn btn-warning">
                                                <i class="icofont-pay"></i>
                                            </a>
                                            <form action="{{ route('backside.book.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-outline-danger" type="submit"> 
                                                    <i class="icofont-close icofont-1x"></i>
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-backend>