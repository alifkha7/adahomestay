@extends('layouts.app')

@section('title')
    Ada Homestay
@endsection

@section('content')
    <div class="page-content page-home">
        <section class="home-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-in">
                        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#homeCarousel" data-slide-to="0"></li>
                                <li data-target="#homeCarousel" data-slide-to="1"></li>
                                <li data-target="#homeCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/banner1.jpg" alt="Carousel Image" class="d-block w-100" />
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/banner2.jpg" alt="Carousel Image" class="d-block w-100" />
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/banner3.jpg" alt="Carousel Image" class="d-block w-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="rooms" class="home-rooms">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Rooms</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('detail', 1) }}" class="component-rooms d-block">
                            <div class="rooms-thumbnail">
                                <div class="rooms-image" style="background-image: url('/images/room.jpg')"></div>
                            </div>
                            <div class="rooms-text">Double Room</div>
                            <div class="rooms-price">Rp.300K</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('detail', 1) }}" class="component-rooms d-block">
                            <div class="rooms-thumbnail">
                                <div class="rooms-image" style="background-image: url('/images/room.jpg')"></div>
                            </div>
                            <div class="rooms-text">Family Room</div>
                            <div class="rooms-price">Rp.500K</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
