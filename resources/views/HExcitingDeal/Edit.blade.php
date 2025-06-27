@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.HExcitingDeal',$excitingdeal->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <h1>Already uploaded image</h1>
            <br><br>
            <img src="{{asset('image/'.$excitingdeal->image)}}" width="100px" height="100px" alt="image">
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading" id="heading" required value="{{$excitingdeal->heading}}">
            <br><br>
            <label for="">Offer</label>
            <input type="text" name="offer" id="offer" required value="{{$excitingdeal->offer}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection