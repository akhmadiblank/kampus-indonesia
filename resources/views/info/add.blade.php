@extends('layouts.main')
@section('title','Dasboard')
@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1>Halaman Tambah artikel</h1>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">

                    <form action="{{route('info.store')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Artikel</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control @error('nama') is-invalid @enderror ckeditor" id="nama" name="nama" value="{{old('nama')}}"></textarea>
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label" for="inlineRadio1">is_actived</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            @error('nrp')
                            <div id="nrpFeedback" class="invalid-feedback">
                                {{$message }}
                            </div>
                            @enderror
                        </div>
                        <div></div>




                        <button type="submit" class="btn btn-primary"> Tambah</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection