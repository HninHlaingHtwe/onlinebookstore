<x-backend>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Order Lists </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
               {{--  <a href="{{ route('backside.order.create')}}" class="btn btn-outline-primary">
                </a> --}}
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        @if(session('successMsg')!= NULL)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Success</strong> 
                          {{session('successMsg')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>User Name</th>
                                      <th>Orderdate</th>
                                      <th>Voucheno</th>
                                      <th>Total</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                            <tbody>
                                @php $i=1;@endphp
                              


                                @foreach($orders as $order)
                                @php

                                    $id=$order->id;
                                    $voucherno=$order->voucherno;
                                    $orderdate=$order->orderdate;
                                    $total=$order->total;
                                    $status=$order->status;
                                    $username=$order->user->name;
                                   

                                @endphp

                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td> 
                                        {{$username}}
                                    </td>
                                    <td>
                                        {{$orderdate}}
                                    </td>
                                    <td>
                                        {{$voucherno}}
                                    </td>
                                    <td>
                                        {{$total}}
                                    </td>
                                    <td>
                                        {{$status}}
                                    </td>
                                    <td>
                                        <a href="{{route('detail',['id' => $id, 'voucherno' => $voucherno])}}" class="btn btn-warning">
                                           <i class="icofont-info"></i></i>
                                        </a>
                                        <a href="{{route('orderconfirm',$id)}}" class="btn btn-warning">
                                            <i class="icofont-tick-mark"></i>
                                        </a>
                                        <form action="{{ route('backside.order.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger" type="submit"><i class="icofont-close icofont-1x"></i></button>
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
    </main>
</x-backend>