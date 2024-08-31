@extends('cms.admin_panel.index')

@section('content')

    <h4>View About page content</h4>
    <hr>

    <table id="example" class="display" style="width:100%;">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Images</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($abouts as $about)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $about->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($about->content,'100','...')  }}</td>
                <td><img src="storage/{{ $about->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $about->created_at->format('M d Y')}}</td>
                <td>{{ $about->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('about.edit',$about->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('about.destroy',$about->id)}}" method="post">
                        @method('delete')
                        {{csrf_field()}}
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Images</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>


@endsection
