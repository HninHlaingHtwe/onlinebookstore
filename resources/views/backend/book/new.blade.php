<x-backend>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> New Book </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{ route('backside.book.index') }}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{ route('backside.book.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf


                            
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                                <div class="col-sm-10">
                                    <div class="input-images"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="isbn" class="col-sm-2 col-form-label"> ISBN </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="isbn" name="isbn">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="name">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> pdf </label>
                                <input type="file" name="pdf">
                            </div>

                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Price </label>
                                <div class="col-sm-10">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="unitprice-tab" data-toggle="tab" href="#unitpriceTab" role="tab" aria-controls="unitpriceTab" aria-selected="true"> Unit Price </a>
                                        </li>
                                        
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="discount-tab" data-toggle="tab" href="#discountTab" role="tab" aria-controls="discountTab" aria-selected="false"> Discount </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="myTabContent">
                                        <div class="tab-pane fade show active" id="unitpriceTab" role="tabpanel" aria-labelledby="unitprice-tab">
                                            <input type="number" name="unitprice" class="form-control">
                                        </div>
                                        
                                        <div class="tab-pane fade" id="discountTab" role="tabpanel" aria-labelledby="discount-tab">
                                            <input type="number" name="discount" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Publisher </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="publisher">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Edition </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="edition">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Status </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="status">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="i_review" class="col-sm-2 col-form-label"> Review </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="i_review" name="review">  </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Publish Date </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="name_id" name="publishdate">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="authorid" class="col-sm-2 col-form-label"> Author </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="authorid">
                                        <option> Choose Author </option>
                                        @foreach($authors as $author)

                                        <option value="{{ $author->id }}"> {{ $author->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="subcategoryid" class="col-sm-2 col-form-label"> Subcategory </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="subcategoryid">
                                        <option> Choose Subcategory </option>
                                        @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"> {{ $subcategory->name }} </option>
                                        @endforeach
                                    </select>
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

    @section('script_content')

    <script type="text/javascript">
        $(document).ready(function() {

            $('#i_review').summernote();


            $('.input-images').imageUploader();

        });
    </script>
    @endsection

</x-backend>