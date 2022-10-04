@extends('layouts.master')
@section('children')
@include('layouts.navbar')

 <!-- Services Section Begin -->
 <section class="services spad">
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                @if (Auth::check())
                @if (auth()-> user()->role == 'Admin')
                <a href="/addService" class="btn btn-dark">Tambah Fasilitas</a>
                @endif
                @endif
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($data as $dataServices)
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">{{$dataServices['judul']}}</h5>
                      <p class="card-text">{{$dataServices['deskripsi']}}</p>
                      <div class="col-lg-6 p-0 pt-3 order-lg-2 order-md-2 col-md-6">
                        @if (Auth::check())
                        @if (auth()-> user()->role == 'Admin')
                        <a href="/ubahServiceForm/{{$dataServices->id}}" class="btn btn-dark">Edit</a>
                        @endif
                        @endif
                    </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <img src="/assets/img/services/{{$dataServices->image}}" class="pt-5" alt="..." style=" min-width: 80px;">
                  </div>
                </div>
              </div>
        @endforeach
    </div> 
    </div>
</section>
<!-- Services Section End -->
@include('layouts.footer')
@endsection