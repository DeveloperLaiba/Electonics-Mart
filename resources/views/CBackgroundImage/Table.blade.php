@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>CBackgroundImage</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.CBackgroundImage')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paragraph</th>
                    <th>BoldText</th>
                    <th>Paragraph</th>
                    <th>Button</th>
                    <th>Text</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cbackgroundimage as $cbackgroundimage)
                <tr>
                    <td>{{$cbackgroundimage->id}}</td>
                    <td>{{$cbackgroundimage->paragraph1}}</td>
                    <td>{{$cbackgroundimage->boldtext}}</td>
                    <td>{{$cbackgroundimage->paragraph2}}</td>
                    <td>{{$cbackgroundimage->button}}</td>
                    <td>{{$cbackgroundimage->text}}</td>
                    <td><img src="{{ asset('image/'.$cbackgroundimage->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>
                        <a href="{{route('CBackgroundImage')}}">Add</a>
                        <a href="{{route('edit.CBackgroundImage',$cbackgroundimage->id)}}">Edit</a>
                        <a href="{{route('delete.CBackgroundImage',$cbackgroundimage->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection