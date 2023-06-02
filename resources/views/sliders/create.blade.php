@extends('layout.main')

@section('content')
    <body>
        <div class="container-fluid px-4">
            <h2>Tambah Slider</h2>
            <form action="/sliders/store" method="POST" enctype="multipart/form-data" >
                @csrf
                Nama</br>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Pengguna">
                <div class="my-3">
                    <label for="gambar">Unggah Gambar Slider</label> 
                    <input class="form-control" id="gambar" name="gambar" type="file" >
                </div>
                <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Upload</button>
            </form>
        </div>
    </body>
@endsection