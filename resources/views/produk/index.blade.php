@extends('layout.main')

@section('content')
        <div class="col-lg-10 col-sm-12">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="{{route('product.create')}}" role="button">Tambah Produk</a>
            </div> 
            <div class="my-2">
                <h2>Daftar Produk</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
               
                @foreach($produk as $p) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> <img src="image/{{$p['gambar']}}" style=width:50px> </td>
                    <td>{{$p['name']}}</td>
                    <td>Rp{{$p['price']}}</td>
                    <td>{{$p->category_id}}</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-warning" href="/product/update/{{$p->id}}" role="button">Update</a>
                            <a class="btn btn-danger"href="/product/delete/{{$p->id}}" role="button">Delete</a>
                        </p>
                    </td>
                </tr> 
                @endforeach   
                </tbody>
            </table>
        </div>
@endsection