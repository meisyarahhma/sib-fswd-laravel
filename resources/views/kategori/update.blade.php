@extends('layout.main')

@section('content')
    <body>
        <div class="container-fluid px-4">
            <div class="col-lg-10 col-sm-12 my-3">
                <h2>Edit Kategori</h2>
                <form action="{{route('category.prosesupdate',$category->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    Nama</br>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Nama Category" value="{{$category->name}}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Upload</button>
                </form>
            </div>
        </div>
        
    </body>
@endsection