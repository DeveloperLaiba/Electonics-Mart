@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>ContactCompany</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.ContactCompany')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactcompany as $contactcompany)
                <tr>
                    <td>{{$contactcompany->id}}</td>
                    <td><img src="{{ asset('image/'.$contactcompany->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$contactcompany->name}}</td>
                    <td>{{$contactcompany->address}}</td>
                    <td>
                        <a href="{{route('ContactCompany')}}">Add</a>
                        <a href="{{route('edit.ContactCompany',$contactcompany->id)}}">Edit</a>
                        <a href="{{route('delete.ContactCompany',$contactcompany->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection