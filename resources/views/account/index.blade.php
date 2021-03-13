@extends('layouts.main')
@section('title','Dasboard')
@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1>Halaman Account</h1>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Level</th>
                        <th scope="col">Email</th>
                        <th scope="col">password</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($accounts as $acc)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ Auth::user()->name }}</td>
                        <td>Admin</td>
                        <td>{{ Auth::user()->email }}</td>
                        <td>{{ Auth::user()->password}}</td>
                        <td>
                            <a href="/mahasiswa/{{$acc->id}}" class="badge badge-primary">Delete</a>
                            <a href="/mahasiswa/{{$acc->id}}" class="badge badge-success">Update</a>
                            <a href="/mahasiswa/{{$acc->id}}" class="badge badge-danger">hapus</a>
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