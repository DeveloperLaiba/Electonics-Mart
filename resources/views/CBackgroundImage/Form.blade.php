@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.CBackgroundImage')}}" enctype="multipart/form-data">
            @csrf
            <label for="">Paragraph</label>
            <input type="text" name="paragraph1" id="paragraph1" required>
            <br><br>
            <label for="">BoldText</label>
            <input type="text" name="boldtext" id="boldtext" required>
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph2" id="paragraph2" required>
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required>
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text" id="text" required>
            <br><br>
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection