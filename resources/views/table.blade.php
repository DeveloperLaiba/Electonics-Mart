@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>UserLogin</h4>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" method="POST" action="{{route('table.register')}}">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Password</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->password}}</td>
                <td>
                        <a href="{{route('delete.register',$user->id)}}">Delete</a>
                    </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
</main>
@endsection