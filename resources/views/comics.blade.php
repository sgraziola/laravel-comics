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

@endsection