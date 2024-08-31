@extends('cms.admin_panel.index')

@section('content')

    <h4>View Tutorial page content</h4>
    <hr>

    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($tutorials as $tutorial)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $tutorial->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($tutorial->link,30,'...') }}</td>
                <td>{{ $tutorial->created_at->format('M d Y')}}</td>
                <td>{{ $tutorial->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('tutorial.edit',$tutorial->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('tutorial.destroy',$tutorial->id)}}" method="post">
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
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>


@endsection
