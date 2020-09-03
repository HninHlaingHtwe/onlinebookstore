<x-backend>
	
	@php
		$sid=$subcategory->category_id;
		$id=$subcategory->id;
		$name=$subcategory->name;
	@endphp
	<main class="app-content">
		<div class="app-title">
			<div>
				<h1> <i class="icofont-list"></i> Subcategory  Edit Form </h1>
			</div>
			<ul class="app-breadcrumb breadcrumb side">
				<a href="{{ route('backside.subcategory.index')}}" class="btn btn-outline-primary">
					<i class="icofont-double-left icofont-1x"></i>
				</a>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tile">
					<div class="tile-body">
						<form action="{{route('backside.subcategory.update',$id)}}" method="POST" enctype="multipart/form-data">
							<!-- cross site request forgery -->
							@csrf
							@method('PUT')
							

							<div class="form-group row">
								<label for="name_id" class="col-sm-2 col-form-label"> Name </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name_id" name="name" value="{{ $name }}">
									<div class="text-danger form-control-feedback">
										{{$errors->first('name')}}
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label for="category_id" class="col-sm-2 col-form-label"> Category </label>
								<div class="col-sm-10">
									<select class="form-control" name="categoryid">
										<option>Choose Category</option> 

										@foreach($categories as $category)
										@php
											$cid=$category->id;
											$cname=$category->name;
											$photo=$category->photo;
										@endphp
										<option value="{{$cid}}" @if($sid==$cid) selected @endif>{{$cname}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
								<div class="col-sm-10">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<a class="nav-link active" id="home-tab" data-toggle="tab" href="#oldPhoto" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
										</li>

									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="oldphoto" role="tabpanel" aria-labelledby="home-tab">
											<img src="{{asset($photo)}}" id="editphoto" width="100" height="100"></div>
											<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><input type="file" name="photo"></div>

										</div>
										<!-- <label>No file choosen</label> -->
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