@extends('layout')
@section('title', 'Add Blog')

@section('content')
    <div class="loginregisterformouter">
        <h4 class="text-capitalize text-center pt-2">Add Blogs</h4>
        <div class="loginregisterform d-flex justify-content-center align-item-center ">
            
            <form  action="{{route('submit-blog')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mt-2 mb-4 ">
                    <div class="mb-3 col-md-12">
                        <label for="exampleFormControlInput1" class="form-label small">Blog Title :</label>
                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                            name="title">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="exampleFormControlInput1" class="form-label small">Tags ( tag1,tag2 etc) :</label>
                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                            name="tags">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label small">Description:</label>
                        <textarea id="editor2" class="form-control form-control-sm" name="description" >
                        </textarea>
                    </div>

                    <div class="mb-4 mt-2 col-md-12">
                        <label for="exampleFormControlInput1" class="form-label small">Image:</label>
                        <input type="file" class="form-control form-control-sm" name="image">
                    </div>

                    <div class="mt-2 mb-4 text-center ">
                        <button class="btn btn-sm btn-success" type="submit">Add Blog</button>
                    </div>
                </div>
            </form>



        </div>
    </div>


@endsection