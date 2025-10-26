@extends('layout.main')

@section('title', 'Progressor')

@section('content')
    <div class="landing-main p-5">
        <div class="d-flex align-items-center justify-content-between gap-3 rounded mx-5">
            <div class="hero">
                <h1 class="title">Explore, track, and manage your game library!</h1>
                <p class="text-uppercase mt-5">Join Us For Free</p>
                <div class="btn btn-secondary my-5">Start Playing</div>
            </div>
            <img src="{{ asset('imgs/landing_banner.png') }}" alt="">
        </div>
        <div class="trending-games mx-5">
            <h2 class="ps-3">Trending Games</h2>
            <div class="trending-game-cards d-flex">
                <div class="trending-card w-25 p-3 ">
                    <div class="card-inner">
                        <img class="w-100" src="https://picsum.photos/300/300" alt="">
                        <h3>Game Name</h3>
                        <p class="mb-0">Short Description</p>
                    </div>
                </div>
                 <div class="trending-card w-25 p-3">
                    <div class="card-inner">
                        <img class="w-100" src="https://picsum.photos/300/300" alt="">
                        <h3>Game Name</h3>
                        <p class="mb-0">Short Description</p>
                    </div>
                </div>
                 <div class="trending-card w-25 p-3">
                    <div class="card-inner">
                        <img class="w-100" src="https://picsum.photos/300/300" alt="">
                        <h3>Game Name</h3>
                        <p class="mb-0">Short Description</p>
                    </div>
                </div>
                <div class="trending-card w-25 p-3">
                    <div class="card-inner">
                        <img class="w-100" src="https://picsum.photos/300/300" alt="">
                        <h3>Game Name</h3>
                        <p class="mb-0">Short Description</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="categories mx-5 mt-5 p-3 border-bottom border-top py-5">
            <h3 class="text-center mb-4">Game Categories</h3>
            <div class="categories-container d-flex flex-wrap gap-3 justify-content-center">
                <!-- Categories will be dynamically loaded here -->
            </div>
        </div>
    </div>
@endsection