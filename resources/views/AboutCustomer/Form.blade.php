@extends('AdminPanel.Layout.layout')
@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <form method="POST" action="{{route('store.AboutCustomer')}}" enctype="multipart/form-data">
            @csrf
            <label for="">Heading</label>
            <input type="text" name="heading1" id="heading1" required>
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading2" id="heading2" required>
            <br><br>
            <label for="">Heading</label>
            <input type="text" name="heading3" id="heading3" required>
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph1" id="paragraph1" required>
            <br><br>
            <label for="">Paragraph</label>
            <input type="text" name="paragraph2" id="paragraph2" required>
            <br><br>
            <button type="submit"> Submit</button>
        </form>
    </div>
</main>
@endsection