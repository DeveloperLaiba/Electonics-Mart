@extends('layout.layout')
  @section('content')
  @foreach($hbackgroundimage as $item)
  <div class="body1"style="
    background-image: url('{{ asset('image/' . $item->image) }}'); /* Replace with your image path */
    background-size: 100%;
    background-attachment: fixed; /* Keeps the image fixed in place */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
  ">
    <!-- crousal starts -->
    @foreach($cbackgroundimage as $item)
    <div class="card excimg"style="margin-bottom: -80px;background-image: url('{{ asset('image/' . $item->image) }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100%;">
        <div class="row g-0">
          <div class="col-md-5">
            <div class="card-body padd1 ps-5">
                <span class="bra">{{$item->paragraph1}}</span><span class="bra1"><b>{{$item->boldtext}}</b> </span><span class="bra">{{$item->paragraph2}}</span>
                <div class="pt-3"><a href="/Home" class="text-warning text-decoration-none">{{$item->button}}</a> <span>{{$item->text}}</span>
                </div>               
            </div>
          </div>
        </div>
      </div>
      @endforeach
    <!-- product page -->
 <div class="bg-white ps-5 pe-5">
 <div class="container-fluid mt-5 bg-white">
    <div class="row pcard">
      <div class="col-lg-3 bg-body-tertiary ">
        <h3 class="pt-5"><b>Customer Review</b></h3>
        <div>
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          &nbsp;&nbsp;5.0
        </div>
        <div>
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          4.0
        </div>
        <div>
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (1).png')}}">3.5

        </div>
        <div>
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">3.0

        </div>
        <div>
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (2).png')}}">
          <img src="{{asset('image/star-solid (1).png')}}">
          2.5
        </div>
        <br>
        <br>

        <h3><b>Price</b></h3>

        <a href="#" class="brstyle">Under $1,000</a><br>
        <a href="#" class="brstyle">$1,000 - 5,000</a><br>
        <a href="#" class="brstyle">$5,000 - 10,000</a><br>
        <a href="#" class="brstyle">$10,000 - 20,000</a><br>
        <a href="#" class="brstyle">$20,000 - 30,000</a><br>
        <a href="#" class="brstyle">$30,000 - over</a><br><br>

        <h3><b>Discount</b></h3>

        <br>
        <div class="checkbox-group">
          <input type="checkbox" href="#"> 5% or More<br>
          <input type="checkbox" href="#"> 10% or More<br>
          <input type="checkbox"> 20% or More<br>
          <input type="checkbox"> 30% or More<br>
          <input type="checkbox"> 50% or More<br>
          <input type="checkbox"> 60% or More<br>
        </div>


        <h3><b>Electronics</b></h3>

        <br>

        <div class="checkbox-group">
          <input type="checkbox"> Accessories<br>
          <input type="checkbox"> Cameras & Photography<br>
          <input type="checkbox"> Car & Vehicle Electronics<br>
          <input type="checkbox"> Computers & Accessories<br>
          <input type="checkbox"> GPS & Accessories<br>
          <input type="checkbox"> Headphones<br>
          <input type="checkbox"> Home Audio<br>
          <input type="checkbox"> Home Theater, TV & Video<br>
          <input type="checkbox"> Mobiles & Accessories<br>
          <input type="checkbox"> Portable Media Players<br>
          <input type="checkbox"> Tablets<br>
          <input type="checkbox"> Telephones & Accessories<br>
          <input type="checkbox"> Wearable Technology<br>
        </div>


        <h3><b>Cash On Delivery</b></h3>

        <br>
        <div class="checkbox-group">
          <input type="checkbox" href="#"> Eligible for Cash On Delivery<br>

        </div>

        <h3><b>New Arrivals</b></h3>

        <br>
        <div class="checkbox-group">
          <input type="checkbox" href="#"> Last 30 days<br>
          <input type="checkbox" href="#"> Last 90 days<br>

        </div>


        <h3><b>Best Seller</b></h3>
        <!-- cards -->
        <marquee behavior="" direction="up" style="height: 40vh;">
          <div class="card mb-3" style="max-width:240px; height: 25vh; border: none;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('image/k1.png')}}" class="img-fluid rounded-start pt-4 ps-3" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="" class="ccolor">Samsung Galaxy F62 (Laser Grey, 128 GB) (6 GB RAM)</a><br>
                  <a href="" class="price-mar mt-2">$12,990.00</a>

                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width:240px; height: 25vh; border: none;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('image/k2.png')}}" class="img-fluid rounded-start pt-4 ps-3" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="" class="ccolor">Samsung 192 L Direct Cool Single Door 3(2021)
                    Refrigerator</a><br>
                  <a href="" class="price-mar">$12,499.00</a>

                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width:240px; height: 25vh; border: none;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('image/k3.png')}}" class="img-fluid rounded-start pt-4 ps-3" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="" class="ccolor">boAt Rockerz 450 Bluetooth Headset (Luscious Black, On the
                    Ear)</a><br>
                  <a href="" class="price-mar">$1,199.00 </a>

                </div>
              </div>
            </div>
          </div>
        </marquee>
      </div>
      <div class="col-lg-9 mt-5">
        <div class="row">
          @foreach($product as $item)
          <div class="col-lg-6 mb-4 mt-3">
            <div class="card text-center">
              <div class="col-5 mx-auto mt-3 image-container pt-4 pb-4">
                <img style="aspect-ratio: 7/10;" src="{{ asset('images/' . $item->image) }}" class="card-img-top" alt="...">
                <div class="overlay">
                  <span class="text">{{$item->text}}</span>
                </div>
              </div>
              <div class="card-body">
                <a href="{{route('Cart',$item->id)}}" style="text-decoration: none;">
                  <h5 class="price-weight">{{$item->name}}</h5>
                </a>
                <p class="price-mar mt-2">{{$item->price}} &nbsp;<del class="ope">{{$item->price2}}</del></p>
                <a class="add-to-cart-btn mb-5" href="{{route('Cart',$item->id)}}" style="text-decoration: none;">{{$item->button}}</a>
              </div>
            </div>
            <!-- card end -->
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
 </div>

  <!-- smart watches and phone page  -->
  <div class="container-fluid">
    <div class="row" style="margin-top: 8%;">
    @foreach($smartwatches as $item)
      <div class="col-lg-6">
        <div class="card mb-3 pb1" style="max-width: 34rem; margin-left: 5%;">
          <div class="row g-0">
            <!-- Text on the left side -->
            <div class="col-md-8 mt-5">
              <div class="card-body cb">
                <h5 class="card-title cardh">{{$item->paragraph1}}</h5>
                <h3 class="card-text smart"><b>{{$item->heading}}</b></h3>
                <h5 class="card-title cardh">{{$item->paragraph2}}</h5>

              </div>
            </div>
            <!-- Image on the right side -->
            <div class="col-md-4 pt-3">
              <img src="{{ asset('image/' . $item->image) }}" class="img-fluid rounded-start" alt="...">
            </div>
          </div>
        </div>

      </div>
      @endforeach

    </div>
  </div>
  @endforeach
  @endsection