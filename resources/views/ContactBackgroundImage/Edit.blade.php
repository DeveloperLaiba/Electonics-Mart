@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.ContactBackgroundImage',$contactbackgroundimage->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required value="{{$contactbackgroundimage->image}}">
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$contactbackgroundimage->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph1" id="paragraph1" required value="{{$contactbackgroundimage->paragraph1}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph2" id="paragraph2" required value="{{$contactbackgroundimage->paragraph2}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph3" id="paragraph3" required value="{{$contactbackgroundimage->paragraph3}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph4" id="paragraph4" required value="{{$contactbackgroundimage->paragraph4}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection