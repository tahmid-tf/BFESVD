@extends('cms.admin_panel.index')

@section('content')
    <h4>Edit Home page content</h4>
    <hr>
    <div>
        <form action="{{ route('background.update',$background->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Edit Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter content" name="title" class="@error('title') is-invalid @enderror" value="{{ $background->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Edit slider image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Edit content</label>
                    {{--                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"--}}
                    {{--                           placeholder="Enter content" name="content" class="@error('content') is-invalid @enderror">--}}

                    <textarea name="content" id="" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror" name="content">{{ $background->content }}</textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
