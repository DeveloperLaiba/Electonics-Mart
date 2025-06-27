@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('update.Contact',$contact->id)}}" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" id="name" required value="{{$contact->name}}">
            <br><br>
            <label for="">Email</label>
            <input type="text" name="email" id="email" required value="{{$contact->email}}">
            <br><br>
            <label for="">Subject</label>
            <input type="text" name="subject" id="subject" required value="{{$contact->subject}}">
            <br><br>
            <label for="">Website</label>
            <input type="text" name="website" id="website" required value="{{$contact->website}}">
            <br><br>
            <label for="">Message</label>
            <input type="text" name="message" id="message" required value="{{$contact->message}}">
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection