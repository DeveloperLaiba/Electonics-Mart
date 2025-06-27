@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>ContactConnect</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.ContactConnect')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Text</th>
                    <th>Text</th>
                    <th>Button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactconnect as $contactconnect)
                <tr>
                    <td>{{$contactconnect->id}}</td>
                    <td>{{$contactconnect->heading}}</td>
                    <td>{{$contactconnect->text1}}</td>
                    <td>{{$contactconnect->text2}}</td>
                    <td>{{$contactconnect->button}}</td>
                    <td>
                        <a href="{{route('ContactConnect')}}">Add</a>
                        <a href="{{route('edit.ContactConnect',$contactconnect->id)}}">Edit</a>
                        <a href="{{route('delete.ContactConnect',$contactconnect->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection