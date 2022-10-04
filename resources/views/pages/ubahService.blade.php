@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah biodata baru</h4>
            </div>
            <form class="card-body" method="POST" action="/ubahService/{{$service->id}}">
                @csrf                
                    @method('PUT')
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="judul" value="{{$service->judul}}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="deskripsi" value="{{$service->deskripsi}}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control inputtags" name="image" value="{{$service->image}}">
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

