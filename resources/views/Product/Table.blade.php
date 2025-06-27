@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Product</h4>
            </div>
        </div>
        <table border="1" method="POST" action="{{route('table.Product')}}">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Text</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>PreviousPrice</th>
                    <th>Button</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <!-- category is a function which we make in product model and category is name attribute in input type in which we store category_id  -->
                    <td>{{$product->category->category}}</td>
                    <td><img src="{{ asset('images/'.$product->image)}}" class="img-fluid" width="100px" height="100px" alt="image"></td>
                    <td>{{$product->text}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->price2}}</td>
                    <td>{{$product->button}}</td>
                    <td>
                        <a href="{{route('Product')}}">Add</a>
                        <a href="{{route('edit.Product',$product->id)}}">Edit</a>
                        <a href="{{route('delete.Product',$product->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection