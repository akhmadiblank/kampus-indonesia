@extends('layouts.main')
@section('title','Dasboard')
@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1>Halaman detail Mahasiswa</h1>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card" style="width: 18rem;">
                <img src="{{asset('page')}}/images/courses-image1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1>{{$student->nama}}</h1>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/students">kembali</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection