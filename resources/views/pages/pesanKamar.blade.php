@extends('layouts.master')
@section('children')
@include('layouts.navbar')


<div class="card">
    <div class="card-body">
        <form method="POST" action="/pesanKamar/{{$data->id}}">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label>Tipe Kamar</label>
                    <input name="tipekamar" type="text" class="form-control" value="{{$data->tipekamar}}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>Nama Pemesan</label>
                    <input name="name" type="text" class="form-control" placeholder="Masukkan Nama Pemesan" value="{{auth()->user()->name}}">
                </div>
                <div class="form-group col-6">
                    <label>E-Mail</label>
                    <input name="email" type="email" class="form-control" placeholder="Masukkan E-Mail" value="{{auth()->user()->email}}" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>NIK</label>
                    <input name="nik" type="tel" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{auth()->user()->nik}}">
                </div>
                <div class="form-group col-6">
                    <label>Jumlah Kamar</label>
                    <input name="jumlahkamar" type="number" class="form-control" value="1" min="1">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>Tanggal Check-In</label>
                    <input name="cekin" type="date" class="form-control">
                </div>
                <div class="form-group col-6">
                    <label>Tanggal Check-Out</label>
                    <input name="cekout" type="date" class="form-control">
                </div> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
        </form>
    </div>
</div>

@include('layouts.footer')
@endsection