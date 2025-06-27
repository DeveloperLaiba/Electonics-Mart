@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.HSmartWatches')}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <label for="">Paragraph1</label>
            <input type="text" name="paragraph1" id="paragraph1" required>
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading" id="heading" required>
            <br><br>
            <label for="">Paragraph2</label>
            <input type="text" name="paragraph2" id="paragraph2" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection