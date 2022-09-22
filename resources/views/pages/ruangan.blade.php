@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="/assets/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Our Room</h1>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>Rooms</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Rooms Section Begin -->
<section class="rooms spad">
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                <a href="/addKamar" class="btn btn-dark">Tambah Kamar</a>
            </div>
        </div>
        @foreach ($data as $dataKamar)
        <div class="row">
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                <div class="room__pic__slider owl-carousel">
                    <div class="room__pic__item set-bg" data-setbg="/assets/img/rooms/room-1.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="/assets/img/rooms/room-2.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="/assets/img/rooms/room-3.jpg"></div>
                    <div class="room__pic__item set-bg" data-setbg="/assets/img/rooms/room-4.jpg"></div>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                <div class="room__text">
                    <h3>{{$dataKamar['typekamar']}}</h3>
                    <h2><sup>$</sup>99<span>/day</span></h2>
                    <ul>
                        <li><span>Ukuran Kamar:</span>{{$dataKamar['besarkamar']}}</li>
                        <li><span>Ukuran Kasur:</span>{{$dataKamar['ukurankasur']}}</li>
                        <li><span>Fasilitas:</span>{{$dataKamar['fasilitaskamar']}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination__number">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- Rooms Section End -->
@include('layouts.footer')
@endsection