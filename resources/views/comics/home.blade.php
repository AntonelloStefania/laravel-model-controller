@extends('layouts.app')

    @section('content')
    <div class="main-bkg position-relative">
        @include('partials.jumbotron')
        <div class="container py-5 cards-container">
            <div class="row position-relative">
                <span class="labe bg-primary position-absolute label-blu text-white fw-bold">CURRENT SERIES</span>
                <div class="col-12 d-flex flex-wrap justify-content-center pt-4">
                   @forelse ($comics as $comic)
                   <div class="col-3 m-2 card-custom d-flex" style="background-image:url({{$comic->thumb}})">
                       <span class="align-self-end h-25 text-white fw-bold text-center bg-h4 w-100">{{$comic->title}}</span>
                       <a class="btn btn-sm btn-primary" href="{{route('comic', $comic ->id)}}">More</a>
                   </div>
                   @empty
                    <div> no comics found</div>
                   @endforelse
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-5 py-5 footer-top">
                    <ul class=" list-unstyled d-flex align-items-center h-100 justify-content-around">
                        <li><a href="/" class="text-white text-decoration-none">
                            <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-digital-comics.png')}}" alt="">
                            <span class="ms-3 ">
                                DIGITAL COMICS
                            </span>
                            </a></li>
                        <li><a href="/" class="text-white text-decoration-none">
                            <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-merchandise.png')}}" alt=""> 
                            <span class="ms-3 ">
                                DC MERCHANDISE
                            </span>
                        </a></li>
                        <li><a href="/" class="text-white text-decoration-none">
                            <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-subscriptions.png')}}" alt=""> 
                            <span class="ms-3 ">
                                SUBSCRIPTION
                            </span>
                        </a></li>
                        <li class="d-flex"><a href="/" class="text-white text-decoration-none d-flex">
                            <img class="footer-icons w-25" src="{{Vite::asset('./resources/images/buy-comics-shop-locator.png')}}" alt="">
                            <span class="align-self-center ps-2 ">
                                COMIC SHOP LOCATOR
                            </span>
                            </a></li>
                        <li class="text-center d-flex"><a href="/" class="text-white text-decoration-none">
                            <img class="footer-icons w-25" src="{{Vite::asset('./resources/images/buy-dc-power-visa.svg')}}" alt=""> 
                            <span class="align-self-center ms-3 ">
                                DC POWER VISA
                            </span>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
 