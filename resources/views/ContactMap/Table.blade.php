@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>ContactMap</h4>
            </div>
        </div>
     <div class="table-responsive">
        <table border="1" method="POST" action="{{route('table.ContactMap')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactmap as $contactmap)
                <tr>
                    <td>{{$contactmap->id}}</td>
                    <td>{{$contactmap->text1}}</td>
                    <td>{{$contactmap->text2}}</td>
                    <td>
                        <a href="{{route('ContactMap')}}">Add</a>
                        <a href="{{route('edit.ContactMap',$contactmap->id)}}">Edit</a>
                        <a href="{{route('delete.ContactMap',$contactmap->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
    </div>
</main>
@endsection