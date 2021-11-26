@extends('layouts.app')

@section('title')
    Room Detail | ADA Homestay
@endsection

@section('content')
    <div class="page-content page-details">
        <section class="home-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Room Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image"
                                alt="" />
                        </transition>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id"
                                data-aos="zoom-in" data-aos-delay="100">
                                <a href="#" @click="changeActive(index)">
                                    <img :src="photo.url" class="w-100 thumbnail-image"
                                        :class="{ active: index == activePhoto }" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="home-details-container" data-aos="fade-up">
            <section class="home-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>Double Room</h1>
                            <div class="jenis">1 Single</div>
                            <div class="price">Rp.300.000</div>
                        </div>
                        <div class="col-lg-2" data-aos="zoom-in">
                            <a href="#" class="btn btn-success px-4 text-white btn-block mb-3">
                                Booking
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-description">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequatur fugiat suscipit, accusantium id non neque culpa
                                ipsam debitis illo velit omnis maxime blanditiis nisi minima
                                hic aperiam provident quaerat unde ut soluta harum dolor?
                                Praesentium minus quibusdam consequatur ullam excepturi velit
                                quae aut ipsam. Non eum omnis cupiditate laboriosam officia?
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Possimus harum consequatur voluptates corrupti error provident
                                reprehenderit architecto! Animi rem accusamus quidem aliquam
                                quos? Adipisci magni autem nemo asperiores rerum, eos optio.
                                Veritatis voluptatum dolor mollitia quia, accusantium nesciunt
                                animi, dolorem obcaecati odit eligendi placeat? Quae minima a
                                quis quod nemo!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 1,
                photos: [{
                        id: 1,
                        url: "/images/room-details-1.jpg",
                    },
                    {
                        id: 2,
                        url: "/images/room-details-2.jpg",
                    },
                    {
                        id: 3,
                        url: "/images/room-details-3.jpg",
                    },
                    {
                        id: 4,
                        url: "/images/room-details-4.jpg",
                    },
                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
