@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="d-flex justify-content-center row text-center ">
    @foreach ($data as $buktiPesanan)
    <div class="col-4 m-3 mt-4 card border border-dark">  
    <div class="card-header">
      {{$buktiPesanan->tipekamar}}
    </div>
    <div class="card-body">
      <ul style="list-style: none">
        <li  class="card-text">Nama Pemesan: {{$buktiPesanan->name}}</li>
        <li class="card-text">Jumlah Kamar:  {{$buktiPesanan->jumlahkamar}} </li>
        <li class="card-text">Tanggal Check-In:  {{$buktiPesanan->cekin}} </li>
        <li class="card-text">Tanggal Check-Out:  {{$buktiPesanan->cekout}}</li>
    </ul>
    </div> 
   </div>
    @endforeach
</div>

@include('layouts.footer')
@endsection