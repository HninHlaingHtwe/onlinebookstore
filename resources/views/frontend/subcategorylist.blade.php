<x-frontend>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;background-color: pink;padding-top: 20px;height: 100px;">Subcategory Lists</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach($subcategories as $subcategory)
				@php 
					$id=$subcategory->id;
					$photo=$subcategory->photo;
					//dd($photo);
					$name=$subcategory->name;

				@endphp
			<div class="container col-lg-4 py-3">
  				<img src="{{$photo}}" alt="Avatar" class="image" style="width:200px;height: 200px;">
  				<div class="middle">
    			<div class="text">
    				<a href="{{route('booklist',$id)}}">	{{$name}} </a>
    			</div>
  				</div>
			</div>
			@endforeach
		</div>
	</div>
</x-frontend>	