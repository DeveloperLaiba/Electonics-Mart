@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.Category',$category->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="">Text</label>
            <input type="text" name="category" id="category" required value="{{$category->category}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection