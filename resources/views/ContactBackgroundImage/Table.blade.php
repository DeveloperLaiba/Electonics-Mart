@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>ContactBackgroundImage</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.ContactBackgroundImage')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactbackgroundimage as $contactbackgroundimage)
                <tr>
                    <td>{{$contactbackgroundimage->id}}</td>
                    <td><img src="{{ asset('image/'.$contactbackgroundimage->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$contactbackgroundimage->paragraph1}}</td>
                    <td>{{$contactbackgroundimage->paragraph2}}</td>
                    <td>{{$contactbackgroundimage->paragraph3}}</td>
                    <td>{{$contactbackgroundimage->paragraph4}}</td>
                    <td>
                        <a href="{{route('ContactBackgroundImage')}}">Add</a>
                        <a href="{{route('edit.ContactBackgroundImage',$contactbackgroundimage->id)}}">Edit</a>
                        <a href="{{route('delete.ContactBackgroundImage',$contactbackgroundimage->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection