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
            @if (Auth::check())
            @if (auth()-> user()->role == 'Admin')
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                <a href="/addKamar" class="btn btn-dark">Tambah Kamar</a>
            </div>
            @endif
            @endif
        </div>
        <div class="row pb-5">
            @if (Auth::check())
            @if (auth()-> user()->role == 'Tamu')
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                <a href="/buktiPemesanan" class="btn btn-dark">Cek Bukti Pemesanan</a>
            </div>
            @endif
            @endif
        </div>
        @foreach ($data as $dataKamar)
        <div class="row">
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                <div class="room__pic__slider owl-carousel">
                    <div class="room__pic__item set-bg" data-setbg="/assets/img/rooms/{{$dataKamar->image}}"></div>
                </div>
            </div>
            <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                <div class="room__text">
                    <h3>{{$dataKamar['typekamar']}}</h3>
                    <ul>
                        <li><span>Ukuran Kamar</span> : {{$dataKamar['besarkamar']}}</li>
                        <li><span>Ukuran Kasur</span> : {{$dataKamar['ukurankasur']}}</li>
                        <li><span>Fasilitas</span> : {{$dataKamar['fasilitaskamar']}}</li>
                        <li><span>Ruangan</span> : {{$dataKamar['jumlahruangan']}}</li>
                    </ul>  
                    
                    <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6 pb-5">
                                <a href="/pesanKamarForm/{{$dataKamar->id}}" class="btn">Pesan Kamar</a>
                            </div>
                            <div class="row">
                                @if (Auth::check())
                                @if (auth()-> user()->role == 'Admin')
                                <div class="col-lg-1 p-0 order-lg-2 order-md-2 col-md-6">
                                    <a href="/ubahRuanganForm/{{$dataKamar->id}}" class="btn">Edit</a>
                                </div>
                                <form action="/deleteThis/{{$dataKamar->id}}" method="POST" class="col-lg-4 p-0 order-lg-2 order-md-2 col-md-6">
                                    @csrf
                                    @method('delete')
                                    <div >
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                                @endif
                                @endif
                            </div>
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