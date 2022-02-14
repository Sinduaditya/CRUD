@extends('template.base')
@section('title','Daftar Siswa')
@section('container')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                @yield('title')</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h1 class="float-left">Daftar Siswa</h1>
            <a class="btn btn-primary float-right mt-2" href="daftar/tambah" role="button">Tambah Siswa</a>
        </div>
        `<div class="col-6">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            </div>
        <div class="col-12">

            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                        <th class="text-center">Angkatan</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?> @foreach($students as $student)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $student->nama_siswa }}</td>
                        <td>{{ $student->jurusan }}</td>
                        <td class="text-center">{{ $student->angkatan }}</td>
                        <td>{{ $student->kelas }}</td>
                        <td>
                            <a href="/daftar/edit/{{ $student->id_siswa }}" class="btn btn-xs btn-primary">EDIT</a>
                            <a href="/daftar/destroy/{{ $student->id_siswa }}" class="btn btn-xs btn-danger" onclick="return confirm('Yakin ?')">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection