@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>HomeExcitingDeal</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.HExcitingDeal')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Offer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($excitingdeal as $excitingdeal)
                <tr>
                    <td>{{$excitingdeal->id}}</td>
                    <td><img src="{{ asset('image/'.$excitingdeal->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$excitingdeal->heading}}</td>
                    <td>{{$excitingdeal->offer}}</td>
                    <td>
                        <a href="{{route('HExcitingDeal')}}">Add</a>
                        <a href="{{route('edit.HExcitingDeal',$excitingdeal->id)}}">Edit</a>
                        <a href="{{route('delete.HExcitingDeal',$excitingdeal->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection