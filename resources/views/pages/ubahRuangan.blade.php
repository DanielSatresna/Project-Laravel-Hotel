@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kamar </h4>
            </div>
            <form class="card-body" method="POST" action="/ubahRuangan/{{$ruangan->id}}">
                @csrf
                @method('PUT')
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="typekamar" value="{{$ruangan->typekamar}}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Besar Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="besarkamar" value="{{$ruangan->besarkamar}}">
                    </div>

                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ukuran Kasur</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="ukurankasur" value="{{$ruangan->ukurankasur}}">
                    </div>

                </div>
                </div>   

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fasilitas Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="fasilitaskamar" {{$ruangan->fasilitaskamar}}>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Ruangan</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="number" class="form-control inputtags" min="1" value="{{$ruangan->jumlahruangan}}" name="jumlahruangan" >
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control inputtags" name="image" {{$ruangan->image}}>
                    </div>
                </div>

                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


@include('layouts.footer')
@endsection

