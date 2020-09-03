<x-frontend>
	@foreach($authors as $author)
		@php 
			$name=$author->name;
		@endphp
	@endforeach
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;background-color: pink;padding-top: 20px;height: 100px;">Author Lists</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: black;">By English Name</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: black;">By Myanmar Name</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row">
							<div class="col-lg-12 pt-5">
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="A">A</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="B">B</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="C">C</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="D">D</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="E">E</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="F">F</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="G">G</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="H">H</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="I">I</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="J">J</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="K">K</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="L">L</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="M">M</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="N">N</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="O">O</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="P">P</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="Q">Q</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="R">R</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="S">S</a>
						<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="T">T</a>
							</div>
							<div class="col-lg-4">
								
							</div>
							<div class="col-lg-4 text-center pt-3">
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="U">U</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="V">V</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="W">W</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="X">X</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="Y">Y</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="Z">Z</a>
							</div>
							<div class="col-lg-4">
								
							</div>
						</div>
						
						
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row">
							<div class="col-lg-12 pt-5">
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="က">က</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="ခ">ခ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="T"></a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;" data-name="င">င</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="စ">စ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဆ">ဆ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;heigh: 40px;"data-name="ဇ">ဇ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဈ">ဈ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ည">ည</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name=""></a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name=""></a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဍ">ဍ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name=""></a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဏ">ဏ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="တ">တ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ထ">ထ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဒ">ဒ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဓ">ဓ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="န">န</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ပ">ပ</a>
							</div>
							<div class="col-lg-12 pt-3">
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဖ">ဖ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name=""></a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဘ">ဘ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ယ">ယ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ရ">ရ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="လ">လ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဝ">ဝ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="သ">သ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဟ">ဟ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="ဠ">ဠ</a>
								<a href="javascript:void(0)" class="btn btn-danger alphabet searchauthor" style="width: 40px;height: 40px;"data-name="အ">အ</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<table>
					<tbody class="authorsearch">
			@php $i=1; @endphp
			@foreach($authors as $author)
				@php 
					
					$id=$author->id;
					$name=$author->name;

				
				@endphp
			
						<tr>
							<td>
								{{$i++}} </a>
							</td>
							<td>
								
							</td>
							<td>
								<a href="{{route('authorbook',$id)}}" style="color: black;">{{$name}}
							</td>
						</tr>
					
			@endforeach
			</tbody>
				</table>
			</div>
		</div>
		{{-- {!! $authors->links() !!} --}}
	</div>


	 @section('script_content')
            <script type="text/javascript">
                $(document).ready(function(){

                    $('.searchauthor').click(function(){
                    	//alert("ok");
                        var name=$(this).data('name');
                       console.log(name);
                       
                   
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.post('/searchbyaut',{name:name},function(res){
                        console.log(res);
                        var html="";
                        var j=1;
                       $.each(res,function(i,v){
                       	var routeURL="{{route('authorbook',':id')}}";
                       	routeURL=routeURL.replace(':id',v.id);
                       	var id=i;
                       		html+=`
                       		
                       		<tr>
                       		<td>
                       		${j++} </a>
                       		</td>
                       		<td>
                       		
                       		</td>
                       		<td>
                       		<a href="${routeURL}" style="color: black;">${v.name}
                       		</td>
                       		</tr>
                       		



                       `;


                       })
                       console.log(html);

                        $('.authorsearch').html(html); 

                    })
                    });

                });
            </script>
        @endsection
</x-frontend>	