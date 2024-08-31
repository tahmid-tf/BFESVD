@extends('cms.admin_panel.index')

@section('content')
    <h4>Add Tutorial content</h4>
    <hr>
    <div>
        <form action="{{ route('tutorial.update',$tutorial->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter content" name="title" class="@error('title') is-invalid @enderror" value="{{ $tutorial->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Link</label>

                    <textarea name="link" id="" cols="30" rows="10" class="form-control @error('link') is-invalid @enderror" name="link" >{{ $tutorial->link }}</textarea>
                </div>

                @error('link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
