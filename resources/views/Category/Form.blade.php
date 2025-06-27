@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.Category')}}" enctype="multipart/form-data">
            @csrf
            <label for="">Category Name</label>
            <input type="text" name="category">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection