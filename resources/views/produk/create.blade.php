@extends('layout.main')

@section('content')
    <body>
        <div class="container-fluid px-4">
            <div class="col-lg-10 col-sm-12 my-3">
                <h2>Tambah Produk</h2>
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    Nama</br>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" value="{{ old('name') }}" name="name" placeholder="Nama Pengguna">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="my-3">
                        <label for="category_id">Kategori</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" >
                            <option value="">-Pilih Kategori-</option>
                            @foreach($categories as $category) 
                            <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}" name="price" placeholder="Masukkan harga">
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> 
                    <div class="my-3">
                        <label for="gambar">Unggah Foto Produk</label> 
                        <input class="form-control @error('gambar') is-invalid @enderror" id="gambar" value="{{ old('gambar') }}" name="gambar" type="file" >
                        @error('gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Upload</button>
                </form>
            </div>
        </div>
        
    </body>
@endsection