@extends('layout.layout')
@section('content')
@foreach($aboutbackgroundimage2 as $item)
<div class="ABG"style="background-image: url('{{ asset('image/' . $item->image) }}');
    background-size: 100% 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;">
@foreach($aboutbackgroundimage as $item)
    <div class="ABackgroundImage"style="background-image: url('{{ asset('image/' . $item->image) }}');
    background-position: initial;
    background-repeat: 100%;
    background-size: cover;">
        <p class="Afew-words ps-5">{{$item->paragraph1}} <span>{{$item->paragraph2}}</span></p>
        <p class="AContact ps-5"><a href="/Home" class="AHome">{{$item->paragraph3}}</a>{{$item->paragraph4}}</p>
    </div>
    @endforeach
    <div class="container-fluid bg-white" style="margin-top: -20px;">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="AWe-Work">
                @foreach($wework as $item)
                    <div class="AWork">
                        <p><span>{{$item->heading1}}</span> {{$item->heading2}}</p>
                    </div>
                </div>
                <p class="AConsectetur">{{$item->paragraph}}</p>
                    @endforeach
                    @foreach($aboutcheckbox as $item)
                <div class="AIcon d-flex ">
                    <div class="ACheckbox ">
                    <img src="{{ asset('image/' . $item->image) }}" alt="">
                    </div>
                    <p class="A-UT">{{$item->paragraph}}</p>
                </div>
                @endforeach
                @foreach($wework as $item)
                <a href=""><button class="AProductbtn">{{$item->button}}</button></a>
                @endforeach
            </div>
            @foreach($aboutimage as $item)
            <div class="AImage col-lg-6 col-md-12 col-sm-12">
                <img src="{{ asset('image/' . $item->image) }}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
    </div>
    <div class="mt-2">
    @foreach($aboutcustomer as $item)
        <p class="ACustomer">{{$item->heading1}} <span>{{$item->heading2}} </span> {{$item->heading3}} </p>
        <p class="ASed">{{$item->paragraph1}}<br>{{$item->paragraph2}}</p>
            @endforeach
        <div class="container-fluid">
            <div class="row">
            @foreach($aboutcard as $item)
                <div class="col-lg-4 col-md-12 col-sm-12 ACards">
                    <div class="card ms-3 me-3">
                        <div class="card-content">
                            <div class="Acard-text"><i class="fa-solid fa-quote-left"
                                    style="color: #f3ad16; font-size: larger;"></i><span>
                                    <p class="AText">{{$item->paragraph}}</p>
                                </span>
                            </div>
                            <div class="AIconImage d-flex"> <img src="{{ asset('image/' . $item->image) }}" alt=""
                                    class="img-fluid ACircular-image">
                                <div class="Aname">
                                    <p class="APretey">{{$item->name}}</p>
                                    <p class="ACaption">{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
    @endsection