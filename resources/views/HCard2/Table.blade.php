@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>HomeCard2</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.HCard2')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Text</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>PreviousPrice</th>
                    <th>Button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($card2 as $card2)
                <tr>
                    <td>{{$card2->id}}</td>
                    <td><img src="{{ asset('image/'.$card2->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$card2->text}}</td>
                    <td>{{$card2->name}}</td>
                    <td>{{$card2->price}}</td>
                    <td>{{$card2->price2}}</td>
                    <td>{{$card2->button}}</td>
                    <td>
                        <a href="{{route('HCard2')}}">Add</a>
                        <a href="{{route('edit.HCard2',$card2->id)}}">Edit</a>
                        <a href="{{route('delete.HCard2',$card2->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection