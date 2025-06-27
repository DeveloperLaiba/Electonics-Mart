@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.HCarousal',$carousal->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="">Paragraph</label>
            <input type="text" name="paragraph1" id="paragraph1" required value="{{$carousal->paragraph1}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph2" id="paragraph2" required value="{{$carousal->paragraph2}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph3" id="paragraph3" required value="{{$carousal->paragraph3}}">
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph4" id="paragraph4" required value="{{$carousal->paragraph4}}">
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading" id="heading" required value="{{$carousal->heading}}">
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading2" id="heading2" required value="{{$carousal->heading2}}">
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required value="{{$carousal->button}}">
            <br><br>
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required value="{{$carousal->image}}">
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$carousal->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection