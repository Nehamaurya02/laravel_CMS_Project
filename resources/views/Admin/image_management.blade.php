@extends("layout.Amaster")
@section('Admincontent')
<div class="col-lg-9" style="min-height:670px;">
    <table class="table table-responsive text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Add Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imageData as $data)
            <tr>
                <td>{{$data->Id}}</td>
                <td>
                    <img src="{{ url('Images/'.$data->Image) }}" style="height:100px; width:100px;">
                </td>
                <td>add</td>
                <td>update</td>
                <td>delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection