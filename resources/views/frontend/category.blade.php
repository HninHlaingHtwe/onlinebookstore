<x-frontend>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;background-color: pink;padding-top: 20px;height: 100px;">Category Lists</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach($categories as $category)
				@php 
					$id=$category->id;
					$photo=$category->photo;
					$name=$category->name;

				@endphp
			<div class="container col-lg-4 py-3">
  				<img src="{{$photo}}" alt="Avatar" class="image" style="width:200px;height: 200px;">
  				<div class="middle">
    			<div class="text">
    				<a href="{{route('subcategorylist',$id)}}">{{$name}}</a>
    			</div>
  				</div>
			</div>
			@endforeach
		</div>
		{{-- {!! $categories->links()!!} --}}
	</div>
</x-frontend>	