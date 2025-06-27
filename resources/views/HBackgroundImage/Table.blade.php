@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>HomebackgroundImage</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.HBackgroundImage')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hbackgroundimage as $hbackgroundimage)
                <tr>
                    <td>{{$hbackgroundimage->id}}</td>
                    <td><img src="{{ asset('image/'.$hbackgroundimage->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>
                        <a href="{{route('HBackgroundImage')}}">Add</a>
                        <a href="{{route('edit.HBackgroundImage',$hbackgroundimage->id)}}">Edit</a>
                        <a href="{{route('delete.HBackgroundImage',$hbackgroundimage->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection