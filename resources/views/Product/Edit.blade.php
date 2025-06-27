@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.Product',$product->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('images/'.$product->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text" id="text" required value="{{$product->text}}">
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" id="name" required value="{{$product->name}}">
            <br><br>
            <label for="">Price</label>
            <input type="text" name="price" id="price" required value="{{$product->price}}">
            <br><br>
            <label for="">Previous Price</label>
            <input type="text" name="price2" id="price2" required value="{{$product->price2}}">
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required value="{{$product->button}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection