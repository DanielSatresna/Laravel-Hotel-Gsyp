@extends('layouts.master')
@section('children')
@include('layouts.navbar')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Fasilitas</h4>
            </div>
            <form class="card-body" method="POST" action="/editFasilitas/{{$fasilitas->id}}">
                @csrf                
                    @method('PUT')
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Fasilitas</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="namafasilitas" value="{{$fasilitas->namafasilitas}}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="deskfasilitas" value="{{$fasilitas->deskfasilitas}}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control inputtags" name="image" {{$fasilitas->image}}>
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

