@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>HomeCard1</h4>
            </div>
        </div>
<table border="1" method="POST" action="{{route('table.HCard1')}}">
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
            @foreach ($card1 as $card1)
            <tr>
                <td>{{$card1->id}}</td>
                <td><img src="{{ asset('image/'.$card1->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                <td>{{$card1->text}}</td>
                <td>{{$card1->name}}</td>
                <td>{{$card1->price}}</td>
                <td>{{$card1->price2}}</td>
                <td>{{$card1->button}}</td>
                <td>
                <a href="{{route('HCard1')}}">Add</a>
                    <a href="{{route('edit.HCard1',$card1->id)}}">Edit</a>
                    <a href="{{route('delete.HCard1',$card1->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</main>
@endsection