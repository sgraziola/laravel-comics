@extends('layouts.app')

@section('content')

<div class="container m_neg">
    <button class="main_btn btn_big shadow mb-4"><a href="#">CURRENT SERIES</a></button>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 g-5">

        @forelse($comics as $comic)
        <div class="col">
            <div class="comic">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                <span>{{ $comic['title']}}</span>
            </div>
        </div>
        @empty
        <div class="col">
            <p>No comic to show yet!</p>
        </div>
        @endforelse
    </div>
    <div class="load text-center">
        <button class="main_btn btn_reg shadow mb-4"><a href="#">LOAD MORE</a></button>
    </div>
</div>
<section class="call_to_action py-5">
    <div class="container">
        <div class="row row-cols-5">
            <div class="col d-flex align-items-center justify-content-evenly">
                <a href="#" class="d-flex align-items-center">
                    <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                    <h6>DIGITAL COMICS</h6>
                </a>
            </div>

            <div class="col d-flex align-items-center justify-content-evenly">
                <a href="#" class="d-flex align-items-center">
                    <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                    <h6>DC MERCHANDISE</h6>
                </a>
            </div>
            <div class="col d-flex align-items-center justify-content-evenly">
                <a href="#" class="d-flex align-items-center">
                    <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                    <h6>SUBSCRIPTION</h6>
                </a>
            </div>
            <div class="col d-flex align-items-center justify-content-evenly">
                <a href="#" class="d-flex align-items-center">
                    <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                    <h6>COMIC SHOP LOCATOR</h6>
                </a>
            </div>
            <div class="col d-flex align-items-center justify-content-evenly">
                <a href="#" class="d-flex align-items-center">
                    <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                    <h6>DC POWER VISA</h6>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection