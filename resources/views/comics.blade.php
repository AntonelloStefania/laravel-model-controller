@extends('layouts.app')

@section('content')
<div class="main-bkg position-relative">
    @include('partials.jumbotron')
        <div class="col-12 blue-line-comics"></div>
        <div class="d-flex justify-content-around position-relative">
            <div class="col-3 ms-5 film-card d-flex position-absolute card-show " style="background-image:url({{ $comic['thumb'] }})"
                alt="poster">
                <div class="w-100 d-flex align-self-end h-100 flex-column justify-content-between">
                <span class="label w-50 text-center text-thumb">COMIC BOOK</span>
                <span class="label w-100 text-center text-thumb">VIEW GALLERY</span>
                </div>
            </div>
            <div  class="text-white ps-5 py-4">
                <div class="d-flex justify-content-around pt-5">
                    <div class="col">
                        {{-- <h4>{{$comic['title']}}</h4>
                        <h6>{{$comic['series']}}</h6> --}}
                        <div class="d-flex flex-column">
                            {{-- <span><strong>Release Date:</strong> <span class="text-uppercase">{{ date('Y-M-d', strtotime($comic['sale_date'])) }}</span></span>
                            <span><strong>Price:</strong>{{$comic['price']}}</span>
                            <div class="col pe-5 mt-5">
                                <p class=" text-white">{{$comic['description']}}</p> --}}
                            </div>
                            <div class="pt-4 d-flex">
                                <div class="d-flex flex-column">
                                    <h5 class="ms-5">Art by:</h5>
                                    <ul class="ms-4">
                                        {{-- @foreach ($comic['artists'] as $artist)
                                    <li> 
                                        {{$artist}}
                                    </li>
                                    @endforeach --}}
                                    </ul>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 class="ms-5">Writers:</h5>
                                    <ul class="ms-4">
                                        {{-- @foreach($comic['writers'] as $writers)
                                        <li>
                                            {{$writers}}
                                        </li> --}}
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="me-5 position-relative">
                        <span class="label bg-warning fw-bold position-absolute p-2 m-2">ADVERTISEMENT</span>
                        <img src="{{ Vite::asset('/public/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>    
            
        </div>
</div>
<div class="container-fluid">
    <div class="row comic-footer-top-row">
        <div class="col-8 offset-2 px-5 py-5 comic-footer-top">
            <ul class=" list-unstyled d-flex align-items-center h-100 justify-content-around">
                <li><a href="/" class="text-white text-decoration-none">
                    <span class="ms-3 ">
                        DIGITAL COMICS
                    </span>
                    <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-digital-comics.png')}}" alt="">
                    </a></li>
                <li><a href="/" class="text-white text-decoration-none">
                    <span class="ms-3 ">
                        DC MERCHANDISE
                    </span>
                    <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-merchandise.png')}}" alt=""> 
                </a></li>
                <li><a href="/" class="text-white text-decoration-none">
                    <span class="ms-3 ">
                        SUBSCRIPTION
                    </span>
                    <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-subscriptions.png')}}" alt=""> 
                </a></li>
                <li class="d-flex"><a href="/" class="text-white text-decoration-none d-flex">
                    <span class="align-self-center ps-2 ">
                        COMIC SHOP LOCATOR
                    </span>
                    <img class="footer-icons w-25" src="{{Vite::asset('./resources/images/buy-comics-shop-locator.png')}}" alt="">
                    </a></li>
                <li class="text-center d-flex"><a href="/" class="text-white text-decoration-none">
                    <span class="align-self-center ms-3 ">
                        DC POWER VISA
                    </span>
                    <img class="footer-icons w-25" src="{{Vite::asset('./resources/images/buy-dc-power-visa.svg')}}" alt=""> 
                </a></li>
            </ul>
        </div>
    </div>
</div>
@endsection