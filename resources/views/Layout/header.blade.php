<nav class="navbar navbar-expand-lg bg-body-tertiary size">
    <div class="container-fluid">
        <a class="navbar-brand clr ps-5" href="#">Wecome to our shop!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link clr" aria-current="page" href="#"><i
                            class="fa-solid fa-location-dot clr"></i>&nbsp;&nbsp;Select Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link clr" href="{{ route('login') }}"><i
                            class="fa-solid fa-right-to-bracket clr"></i>&nbsp;&nbsp;Log
                        In</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link clr" href="{{ route('register') }}"><i
                            class="fa-solid fa-right-from-bracket clr"></i>&nbsp;&nbsp;Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- 2nd navbar -->
<nav class="navbar navbar-expand-lg bg p-4 f-b">
    <div class="container-fluid">
        <a class="navbar-brand navclr text-light ps-4" href="#">Electronic Mart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="
    background-color: #f3ad16; /* Teal background */

"></span>
        </button>
        <div class="collapse navbar-collapse navclr" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll navclr" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="/Home">Home</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($category as $item)
                            <li><a class="dropdown-item "
                                    href="{{ route('category.product', $item->id) }}">{{ $item->category }} </a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-disabled="true" href="/About">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-disabled="true" href="/Contact">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-disabled="true" href="{{ route('logout') }}">Logout</a>
                </li>
                {{-- <span class="bg-warning ps-4 pe-4"><i class="fa-solid fa-magnifying-glass meg"></i></span> --}}
                <a href="{{ route('carttable') }}" style="color:white;"> <i
                        class="fa-solid fa-cart-shopping cart"></i></a>
            </ul>
        </div>
    </div>
</nav>
