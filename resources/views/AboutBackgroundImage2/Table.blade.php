@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>AboutbackgroundImage2</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.AboutBackgroundImage2')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutbackgroundimage2 as $aboutbackgroundimage2)
                <tr>
                    <td>{{$aboutbackgroundimage2->id}}</td>
                    <td><img src="{{ asset('image/'.$aboutbackgroundimage2->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>
                        <a href="{{route('AboutBackgroundImage2')}}">Add</a>
                        <a href="{{route('edit.AboutBackgroundImage2',$aboutbackgroundimage2->id)}}">Edit</a>
                        <a href="{{route('delete.AboutBackgroundImage2',$aboutbackgroundimage2->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection