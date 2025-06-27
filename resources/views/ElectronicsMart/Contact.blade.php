@extends('layout.layout')
@section('content')
    @foreach ($contactbackgroundimage as $item)
        <div class="CBackgroundImage"style="background-image: url('{{ asset('image/' . $item->image) }}');
        background-position: initial;
        background-repeat: 100%;
        background-size: cover;">
            <p class="Afew-words ps-5">{{ $item->paragraph1 }} <span>{{ $item->paragraph2 }}</span></p>
            <p class="AContact ps-5"><a href="/Home" class="AHome">{{ $item->paragraph3 }}</a>{{ $item->paragraph4 }}</p>
        </div>
    @endforeach
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                @foreach ($contactconnect as $item)
                    <h2 class="Cheading ms-5">{{ $item->heading }}</h2>
                @endforeach
                <div class="container">
                    <div class="row">
                        @foreach ($contactcompany as $item)
                            <div class="d-flex mt-5 ps-5">
                                <div class="col-lg-2 mt-2">
                                    <img src="{{ asset('image/' . $item->image) }}" class="img-fluid CMap" alt="">
                                </div>
                                <div class="col-lg-10 ms-3">
                                    <h3 class="CCompany">{{ $item->name }}</h3>
                                    <p class="CLocation">{{ $item->address }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @if (session('success'))
                    <div class="alert alert-success"
                        style="font-size:30px; border:none; background-color:transparent; color:green; font-weight:bolder;">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('store.Contact') }}">
                    @csrf
                    <div class="CInput">
                        @foreach ($contactform as $item)
                            <div class="input-container">
                                <input type="text" name="{{ $item->text1 }}" placeholder="{{ $item->text2 }}"
                                    required>
                            </div>
                        @endforeach
                    </div>
                    @foreach ($contactconnect as $item)
                        <div class="input-container">
                            <textarea name="{{ $item->text2 }}" placeholder="{{ $item->text1 }}" required></textarea>
                        </div>
                        <div class="button-container">
                            <button type="submit" class="send-button">{{ $item->button }}</button>
                        </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
    <div class="map-container">
        @foreach ($contactmap as $item)
            <iframe src="{{ $item->text1 }}{{ $item->text2 }}" allowfullscreen="" loading="lazy">
            </iframe>
        @endforeach
    </div>
@endsection
