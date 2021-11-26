@extends('layouts.dashboard')

@section('title')
    Rooms
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Rooms</h2>
                <p class="dashboard-subtitle">Manage it well and get money !</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('room-create') }}" class="btn btn-success">Add New Room</a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('room-details', 1) }}" class="card card-dashboard-room d-block">
                            <div class="card-body">
                                <img src="/images/room.jpg" alt="" class="w-100 mb-2" />
                                <div class="room-title">Family Room</div>
                                <div class="room-category">Family</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('room-details', 1) }}" class="card card-dashboard-room d-block">
                            <div class="card-body">
                                <img src="/images/room.jpg" alt="" class="w-100 mb-2" />
                                <div class="room-title">Double Room</div>
                                <div class="room-category">Double</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
