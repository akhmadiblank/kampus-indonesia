@extends('layouts.main')
@section('title','Dasboard')
@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1>Halaman Mahasiswa</h1>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <a href="{{route('students.create')}}" class="btn btn-primary mt-1 mb-2">Tambah data Baru</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" class="px-5">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $data)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nip}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{route('students.show',$data->id)}}" class="badge badge-primary">Detail</a>
                            <a href="{{route('students.edit',$data->id)}}" class="badge badge-success">Update</a>
                            <form action="{{route('students.destroy',$data->id)}}" method="POST" class="">
                                @csrf
                                @method('delete')
                                <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $students->links() }}
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection