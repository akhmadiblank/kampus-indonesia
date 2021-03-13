@extends('layouts.main')
@section('title','Dasboard')
@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1>Halaman artikel</h1>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{route('info.create')}}" class="btn btn-primary mt-1 mb-2">Tambah data Baru</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Artikle</th>
                        <th scope="col">is_actived</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $data)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$data->artikel}}</td>
                        <td>{{$data->is_actived}}</td>
                        <td class="d-flex align-items-center">
                            <a href="" class="badge badge-primary">Detail</a>
                            <a href="" class="badge badge-success">Update</a>
                            <form action="" method="POST" class="">
                                @csrf
                                @method('delete')
                                <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
    <!-- /.content -->
</div>
@endsection