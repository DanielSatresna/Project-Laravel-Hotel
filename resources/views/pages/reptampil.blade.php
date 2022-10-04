@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="card">
  <div class="card-body">
    <table class="table table-sm0">
      <div class="row pb-4">
      <form action="/search" method="GET">
          <input class="form-control col-5 ml-3" type="text" name="search" placeholder="Search Table...">
          <input class="btn btn-primary ml-4" type="submit" value="Search">
      </form>
                <form action="/searchDate" method="GET">
                    <input class="form-control col-4 ml-5" type="date" name="searchDate">
                    <input class="btn btn-primary ml-2" type="submit" value="Search">
                </form>
        </div>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Type Kamar</th>
          <th scope="col">NIK</th>
          <th scope="col">Email</th>
          <th scope="col">Cek-In</th>
          <th scope="col">Cek-Out</th>
          <th scope="col">Jumlah</th>
        </tr>
      </thead>
      <tbody>

      <?php $n=1; ?>
        @foreach($pull as $p)
        <tr>
          <th scope="row">{{$n++}}</th>
          <td>{{$p->nama}}</td>
          <td>{{$p->typekamar}}</td>
          <td>{{$p->nik}}</td>
          <td>{{$p->email}}</td>
          <td>{{$p->cekin}}</td>
          <td>{{$p->cekout}}</td>
          <td>{{$p->jumlah}}</td>
        </tr>
        @endForeach
      </tbody>
    </table>
  </div>
</div>

@include('layouts.footer')
@endsection
