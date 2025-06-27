@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.AboutCheckbox',$aboutcheckbox->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required value="{{$aboutcheckbox->image}}">
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$aboutcheckbox->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph" id="paragraph" required value="{{$aboutcheckbox->paragraph}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection