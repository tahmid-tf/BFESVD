@extends('cms.admin_panel.index')

@section('content')

    <h4>View Home page content</h4>
    <hr>

    <table id="example" class="display" style="width:100%; text-align: center">
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
        @foreach($backgrounds as $background)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $background->title }}</td>
                <td>{{ $background->content }}</td>
                <td><img src="storage/{{ $background->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $background->created_at->format('M d Y')}}</td>
                <td>{{ $background->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('background.edit',$background->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('background.destroy',$background->id)}}" method="post">
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
