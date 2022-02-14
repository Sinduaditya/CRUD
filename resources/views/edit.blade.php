@extends('template/base')
@section('title','Edit Siswa')
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
            <h3>Form Edit Siswa</h3>
            <form action="/daftar/update" method="post">
                @csrf

                <div class="form-group">
                    <input class="form-control" type="hidden" name="id" id="id" 
                    value="{{ $students->id_siswa}}">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input class="form-control @error('nama_siswa') is-invalid @enderror" type="text" name="nama_siswa" 
                    value="{{ $students->nama_siswa }}" id="nama_siswa" placeholder="Masukkan Nama Siswa"> 
                    @error('nama_siswa')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input class="form-control @error('jurusan') is-invalid @enderror" type="text" name="jurusan" 
                    value="{{ $students->jurusan }}" id="jurusan" placeholder="Masukkan Nama Jurusan">
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input class="form-control @error('angkatan') is-invalid @enderror" type="text" name="angkatan" 
                    value="{{ $students->angkatan }}" id="angkatan" placeholder="Masukkan tahun angkatan">
                    @error('angkatan')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input class="form-control @error('kelas') is-invalid @enderror" type="text" name="kelas" 
                    value="{{ $students->kelas }}" id="kelas" placeholder="Masukkan kelas">
                    @error('kelas')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
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