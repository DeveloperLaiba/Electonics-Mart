@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>AboutCard</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.AboutCard')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paragraph</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutcard as $aboutcard)
                <tr>
                    <td>{{$aboutcard->id}}</td>
                    <td>{{$aboutcard->paragraph}}</td>
                    <td><img src="{{ asset('image/'.$aboutcard->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$aboutcard->name}}</td>
                    <td>{{$aboutcard->description}}</td>
                    <td>
                        <a href="{{route('AboutCard')}}">Add</a>
                        <a href="{{route('edit.AboutCard',$aboutcard->id)}}">Edit</a>
                        <a href="{{route('delete.AboutCard',$aboutcard->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection