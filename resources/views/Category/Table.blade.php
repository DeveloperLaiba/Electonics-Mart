@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Category</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Category')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category}}</td>
                    <td>
                        <a href="{{route('Category')}}">Add</a>
                        <a href="{{route('edit.Category',$category->id)}}">Edit</a>
                        <a href="{{route('delete.Category',$category->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection