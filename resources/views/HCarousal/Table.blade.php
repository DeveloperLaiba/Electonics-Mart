@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>HomeCarousal</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.HCarousal')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Button</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousal as $carousal)
                <tr>
                    <td>{{$carousal->id}}</td>
                    <td>{{$carousal->paragraph1}}</td>
                    <td>{{$carousal->paragraph2}}</td>
                    <td>{{$carousal->paragraph3}}</td>
                    <td>{{$carousal->paragraph4}}</td>
                    <td>{{$carousal->heading}}</td>
                    <td>{{$carousal->heading2}}</td>
                    <td>{{$carousal->button}}</td>
                    <td><img src="{{ asset('image/'.$carousal->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>
                        <a href="{{route('HCarousal')}}">Add</a>
                        <a href="{{route('edit.HCarousal',$carousal->id)}}">Edit</a>
                        <a href="{{route('delete.HCarousal',$carousal->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection