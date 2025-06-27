@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.AboutCard')}}" enctype="multipart/form-data">
            @csrf
            <label for="">Paragraph</label>
            <input type="text" name="paragraph" id="paragraph" required>
            <br><br>
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="">Description</label>
            <input type="text" name="description" id="description" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection