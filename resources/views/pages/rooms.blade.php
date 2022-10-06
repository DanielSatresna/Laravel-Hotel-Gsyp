@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<!--end-->
<section class="image-head-wrapper" style="background-image: url('/assets/images/banner.jpg');">
                <div class="inner-wrapper">
                    <h1>Rooms</h1>
                </div>
            </section>
            <div class="clearfix"></div>

            <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="row pl-5">
                    @if (Auth::check())
                    @if (auth()-> user()->role == 'Admin')
                    <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                        <a href="/tambahKamarForm" class="btn btn-primary">Tambah Kamar</a>
                    </div>
                    @endif
                    @endif
                </div>
                <div class="container">
                    <div class="row pb-5">
                        @if (Auth::check())
                        @if (auth()-> user()->role == 'Tamu')
                        <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                            <a href="/buktiPemesanan" class="btn btn-primary">Cek Bukti Pemesanan</a>
                        </div>
                        @endif
                        @endif
                    </div>
                    @foreach ($data as $dataKamar)
                    <div class="row pt-4">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="/assets/images/{{$dataKamar->image}}">
                            </div>
                        </div>      
                            <div class="col-lg-3 pl-5 col-md-6">
                                <h2 class="pt-2">{{$dataKamar['tipekamar']}}</h2>
                                <div class="room-text">
                                    <ul>
                                        <li><span>Ukuran Kamar</span> : {{$dataKamar['besarkamar']}} </li>
                                        <li><span>Fasilitas</span> : {{$dataKamar['fasilitaskamar']}}</li>
                                        <li><span>Jumlah Ruangan</span> :  {{$dataKamar['jumlahkamar']}} </li>
                                    </ul>  
                                </div>
                            </div>     
                            <div class="col-lg-3 pl-5 order-lg-1 order-md-1 col-md-6">
                                @if (Auth::check())
                                @if (auth()-> user()->role == 'Admin')
                                <div class="col-lg-1 p-0 order-lg-2 order-md-2 col-md-6 mr-5">
                                    <a href="/editKamarForm/{{$dataKamar->id}}" class="btn btn-primary">Edit</a>
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
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                @if (Auth::check())
                                @if (auth()-> user()->role == 'Tamu')
                                <a href="/pesanKamarForm/{{$dataKamar->id}}" class="btn btn-primary">Pesan Kamar</a>
                                @endif
                                @endif
                            </div>    
                    </div>
                    @endforeach
                </div>
            </section>

            @include('layouts.footer')
   
            @endsection