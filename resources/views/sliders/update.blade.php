@extends('layout.main')

@section('content')
    <body>
        <div class="container-fluid px-4 my-3">
            <h2>Edit Slider</h2>
            <form action="{{route('sliders.prosesupdate',$sliders->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                Nama</br>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Pengguna" value="{{$sliders->name}}">
                <div class="my-3">
                    <label for="gambar">Unggah Gambar Slider</label> 
                    <input class="form-control" id="gambar" name="gambar" type="file" >
                </div>
                <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Upload</button>
            </form>
        </div>
    </body>
@endsection