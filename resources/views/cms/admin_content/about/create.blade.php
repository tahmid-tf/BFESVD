@extends('cms.admin_panel.index')

@section('content')
    <h4>Add About page content</h4>
    <hr>
    <div>
        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter content" name="title" class="@error('title') is-invalid @enderror">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter content</label>
                    {{--                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"--}}
                    {{--                           placeholder="Enter content" name="content" class="@error('content') is-invalid @enderror">--}}

                    <textarea name="content" id="" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror" name="content" ></textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
