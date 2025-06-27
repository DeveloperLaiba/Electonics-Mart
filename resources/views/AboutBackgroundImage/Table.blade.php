@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>AboutbackgroundImage</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.AboutBackgroundImage')}}">
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
                @foreach ($aboutbackgroundimage as $aboutbackgroundimage)
                <tr>
                    <td>{{$aboutbackgroundimage->id}}</td>
                    <td><img src="{{ asset('image/'.$aboutbackgroundimage->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$aboutbackgroundimage->paragraph1}}</td>
                    <td>{{$aboutbackgroundimage->paragraph2}}</td>
                    <td>{{$aboutbackgroundimage->paragraph3}}</td>
                    <td>{{$aboutbackgroundimage->paragraph4}}</td>
                    <td>
                        <a href="{{route('AboutBackgroundImage')}}">Add</a>
                        <a href="{{route('edit.AboutBackgroundImage',$aboutbackgroundimage->id)}}">Edit</a>
                        <a href="{{route('delete.AboutBackgroundImage',$aboutbackgroundimage->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection