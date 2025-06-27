@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>We Work</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.WeWork')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wework as $wework)
                <tr>
                    <td>{{$wework->id}}</td>
                    <td>{{$wework->heading1}}</td>
                    <td>{{$wework->heading2}}</td>
                    <td>{{$wework->paragraph}}</td>
                    <td>{{$wework->button}}</td>
                    <td>
                        <a href="{{route('WeWork')}}">Add</a>
                        <a href="{{route('edit.WeWork',$wework->id)}}">Edit</a>
                        <a href="{{route('delete.WeWork',$wework->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection