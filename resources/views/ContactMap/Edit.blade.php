@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.ContactMap',$contactmap->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="">Text</label>
            <input type="text" name="text1" id="text1" required value="{{$contactmap->text1}}">
            <br><br>
            <label for="">Text</label>
            <input type="text" name="text2" id="text2" required value="{{$contactmap->text2}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection