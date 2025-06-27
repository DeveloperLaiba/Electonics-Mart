@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>AboutCustomer</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.AboutCustomer')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutcustomer as $aboutcustomer)
                <tr>
                    <td>{{$aboutcustomer->id}}</td>
                    <td>{{$aboutcustomer->heading1}}</td>
                    <td>{{$aboutcustomer->heading2}}</td>
                    <td>{{$aboutcustomer->heading3}}</td>
                    <td>{{$aboutcustomer->paragraph1}}</td>
                    <td>{{$aboutcustomer->paragraph2}}</td>
                    <td>
                        <a href="{{route('AboutCustomer')}}">Add</a>
                        <a href="{{route('edit.AboutCustomer',$aboutcustomer->id)}}">Edit</a>
                        <a href="{{route('delete.AboutCustomer',$aboutcustomer->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection