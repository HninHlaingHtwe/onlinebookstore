<x-frontend>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;background-color: pink;padding-top: 20px;height: 100px;">Book Lists</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach($books as $book)
				@php 
					$id=$book->id;
					$photo=$book->photo;
					$name=$book->name;

				@endphp
			<div class="container col-lg-4 py-3">
  				<img src="{{$photo}}" alt="Avatar" style="width:200px;height: 200px;">
  				<div>
    			<div>
    				<a href="">{{$name}}</a>
    			</div>
  				</div>
			</div>
			@endforeach
		</div>
		{{-- {!! $categories->links()!!} --}}
	</div>
</x-frontend>	