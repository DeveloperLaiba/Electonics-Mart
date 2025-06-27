@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.CBackgroundImage',$cbackgroundimage->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="">Paragraph</label>
            <input type="text" name="paragraph1" id="paragraph1" required value="{{$cbackgroundimage->paragraph1}}">
            <br><br>
            <label for="">BoldText</label>
            <input type="text" name="boldtext" id="boldtext" required value="{{$cbackgroundimage->boldtext}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph2" id="paragraph2" required value="{{$cbackgroundimage->paragraph2}}">
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required value="{{$cbackgroundimage->button}}">
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text" id="text" required value="{{$cbackgroundimage->text}}">
            <br><br>
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required value="{{$cbackgroundimage->image}}">
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$cbackgroundimage->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection