@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>AboutCheckbox</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.AboutCheckbox')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutcheckbox as $aboutcheckbox)
                <tr>
                    <td>{{$aboutcheckbox->id}}</td>
                    <td><img src="{{ asset('image/'.$aboutcheckbox->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$aboutcheckbox->paragraph}}</td>
                    <td>
                        <a href="{{route('AboutCheckbox')}}">Add</a>
                        <a href="{{route('edit.AboutCheckbox',$aboutcheckbox->id)}}">Edit</a>
                        <a href="{{route('delete.AboutCheckbox',$aboutcheckbox->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection