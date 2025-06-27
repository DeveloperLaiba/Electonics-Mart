@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.ContactConnect')}}" enctype="multipart/form-data">
            @csrf
            <label for="">Heading</label>
            <input type="text" name="heading" id="heading" required>
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text1" id="text1" required>
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text2" id="text2" required>
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection