@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<!--end-->
<section class="image-head-wrapper" style="background-image: url('/assets/images/banner5.jpg');">
                <div class="inner-wrapper">
                    <h1>News</h1>
                </div>
            </section>
            <div class="clearfix"></div>

            <section class="resort-overview-block">
                <div class="row pl-5 tombol-tambah">
                    @if (Auth::check())
                    @if (auth()-> user()->role == 'Admin')
                    <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                        <a href="/tambahFasilitasForm" class="btn btn-primary">Tambah Fasilitas</a>
                    </div>
                    @endif
                    @endif
                </div>
                <div class="container">
                    @foreach ($data as $dataFasilitas)
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="single-blog.html"><img alt="image" class="img-responsive" src="/assets/images/{{$dataFasilitas->image}}"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><a href="single-blog.html">{{$dataFasilitas['namafasilitas']}}</a></h3>
                                    <p>{{$dataFasilitas['deskfasilitas']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        @if (Auth::check())
                        @if (auth()-> user()->role == 'Admin')
                        <div class="col-lg-3 order-lg-1 order-md-1 col-md-6">
                            <a href="/editFasilitasForm/{{$dataFasilitas->id}}" class="btn btn-primary">Edit</a>
                        </div>
                        <form action="/deleteThisFasilitas/{{$dataFasilitas->id}}" method="POST" class="col-lg-1">
                            @csrf
                            @method('delete')
                            <div >
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                        @endif
                        @endif
                    </div>
                    @endforeach
                </div>
            </section>

            @include('layouts.footer')
   
            @endsection