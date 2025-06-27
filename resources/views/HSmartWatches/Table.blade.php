@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>HomeSmartWatches</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.HSmartWatches')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Paragraph</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($smartwatches as $smartwatches)
                <tr>
                    <td>{{$smartwatches->id}}</td>
                    <td><img src="{{ asset('image/'.$smartwatches->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$smartwatches->paragraph1}}</td>
                    <td>{{$smartwatches->heading}}</td>
                    <td>{{$smartwatches->paragraph2}}</td>
                    <td>
                        <a href="{{route('HSmartWatches')}}">Add</a>
                        <a href="{{route('edit.HSmartWatches',$smartwatches->id)}}">Edit</a>
                        <a href="{{route('delete.HSmartWatches',$smartwatches->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection