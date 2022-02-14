@extends('template/base')
@section('title','Home')
@section('container')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-10 mt-4">
                    <h1>Selamat Datang di latihan </h1>
                </div>
                <div class="col-5 mt-2">
                    <h6>Apa saja yang akan kita pelajari?</h6>
                </div>
            </div>
            <div class="row row-cols-4">
                <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Konfigurasi Database</h5>
                        <p class="card-text">Menhubungkan database dengan projek kita</p>
                    </div>
                </div>
                <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Create</h5>
                        <p class="card-text">Proses memasukan data kedalam database</p>
                    </div>
                </div>
                <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Read</h5>
                        <p class="card-text">Proses menampilkan data dari database</p>
                    </div>
                </div>
                <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Update</h5>
                        <p class="card-text">Proses merubah data pada databse</p>
                    </div>
                </div>
                <div class="card mt-4 ml-4 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Delete</h5>
                        <p class="card-text">Proses menghapus data dari database</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection