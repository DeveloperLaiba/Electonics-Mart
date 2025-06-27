@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.HCard1',$card1->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$card1->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text" id="text" required value="{{$card1->text}}">
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" id="name" required value="{{$card1->name}}">
            <br><br>
            <label for="">Price</label>
            <input type="text" name="price" id="price" required value="{{$card1->price}}">
            <br><br>
            <label for="">Previous Price</label>
            <input type="text" name="price2" id="price2" required value="{{$card1->price2}}">
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required value="{{$card1->button}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection