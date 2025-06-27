@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.HSmartWatches',$smartwatches->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$smartwatches->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Paragraph1</label>
            <input type="text" name="paragraph1" id="paragraph1" required value="{{$smartwatches->paragraph1}}">
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading" id="heading" required value="{{$smartwatches->heading}}">
            <br><br>
            <label for="">Paragraph2</label>
            <input type="text" name="paragraph2" id="paragraph2" required value="{{$smartwatches->paragraph2}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection