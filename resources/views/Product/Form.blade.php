@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.Product')}}" enctype="multipart/form-data">
            @csrf
            <label>Category Name</label>
            <select name="category_id" id="">
                <option value="">select</option>
                @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->category}}</option>
                @endforeach
            </select>
            <label for="file_name">Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text" id="text" required>
            <br><br>
            <label for="">Name</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="">Price</label>
            <input type="text" name="price" id="price" required>
            <br><br>
            <label for="">Previous Price</label>
            <input type="text" name="price2" id="price2" required>
            <br><br>
            <label for="">Button</label>
            <input type="text" name="button" id="button" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection