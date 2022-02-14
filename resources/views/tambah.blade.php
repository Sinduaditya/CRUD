@extends('template/base')
@section('title','Tambah Siswa')
@section('container')
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/home')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('/daftar')}}">Daftar Siswa</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                @yield('title')
            </li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <h3>Form Tambah Siswa</h3>
            <form action="{{ url('daftar/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input class="form-control @error('nama_siswa') 
                    is-invalid 
                    @enderror" 
                    type="text" name="nama_siswa" value="{{ old('nama_siswa') }}" 
                    id="nama_siswa" placeholder="Masukkan Nama Siswa">
                @error('nama_siswa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input class="form-control @error('jurusan') is-invalid @enderror" type="text" name="jurusan" value="{{ old('jurusan') }}" 
                    id="jurusan" placeholder="masukkan Nama Jurusan">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input class="form-control @error('angkatan') is-invalid @enderror" type="text" name="angkatan" value="{{ old('angkatan') }}" 
                    id="angkatan" placeholder="masukkan tahun angkatan">
                @error('angkatan')<div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input class="form-control 
                @error('kelas') is-invalid 
                @enderror" type="text" name="kelas" value="{{ old('kelas') }}" id="kelas" placeholder="masukkan kelas">
                @error('kelas')<div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group float-right">
                <button class="btn btn-lg btn-danger" type="reset">Reset</button>
                <button class="btn btn-lg btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
