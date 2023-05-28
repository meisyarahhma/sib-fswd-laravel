@extends('layout.main')

@section('content')
    <body>
        <div class="col-lg-10 col-sm-12 my-3">
            <h2>Tambah Produk</h2>
            <form action="{{route('product.prosesupdate',$produk->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                Nama</br>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Pengguna" value="{{$produk->name}}">
                <div class="my-3">
                    <label for="category_id">Role</label>
                    <select class="form-control" id="category_id" name="category_id" >
                        @foreach($categories as $category) 
                        <option value="{{$category->id}}" {{ $produk->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Masukkan harga" value="{{$produk->price}}">
                </div> 
                <div class="my-3">
                    <label for="gambar">Unggah Foto Produk</label> 
                    <input class="form-control" id="gambar" name="gambar" type="file" >
                </div>
                <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Upload</button>
            </form>
        </div>
    </body>
@endsection