@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah biodata baru</h4>
            </div>
            <form class="card-body" method="POST" action="/tambahkamar">
                @csrf

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="typekamar">
                    </div>

                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Besar Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="besarkamar">
                    </div>

                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Besar Kasur</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="ukurankasur">
                    </div>

                </div>
                

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fasilitas Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="fasilitaskamar">
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

