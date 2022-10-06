@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kamar </h4>
            </div>
            <form class="card-body" method="POST" action="/tambahKamar">
                @csrf

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tipe Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="tipekamar">
                    </div>

                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Besar Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="besarkamar">
                    </div>

                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fasilitas Kamar</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="fasilitaskamar">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Ruangan</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="number" class="form-control inputtags" min="1" value="1" name="jumlahkamar">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control inputtags" name="image">
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

