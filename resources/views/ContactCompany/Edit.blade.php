@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.ContactCompany',$contactcompany->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required value="{{$contactcompany->image}}">
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$contactcompany->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" id="name" required value="{{$contactcompany->name}}">
            <br><br>
            <label for="">Address</label>
            <input type="text" name="address" id="address" required value="{{$contactcompany->address}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection