@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>AboutImage</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.AboutImage')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutimage as $aboutimage)
                <tr>
                    <td>{{$aboutimage->id}}</td>
                    <td><img src="{{ asset('image/'.$aboutimage->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>
                        <a href="{{route('AboutImage')}}">Add</a>
                        <a href="{{route('edit.AboutImage',$aboutimage->id)}}">Edit</a>
                        <a href="{{route('delete.AboutImage',$aboutimage->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection