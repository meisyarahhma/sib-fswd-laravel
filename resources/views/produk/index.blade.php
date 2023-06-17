@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
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
                    <td><img src="{{ asset('storage/produk/' . $p->gambar) }}" class="img-fluid" style="max-width: 100px;"alt="{{ $p->gambar }}"></td>
                    <td>{{$p['name']}}</td>
                    <td>Rp{{$p['price']}}</td>
                    <td>
                        <span class="badge {{ $p->category ? ($p->category->name == 'Admin' ? 'bg-success' : 'bg-primary') : 'bg-primary' }}">
                            {{ $p->category ? $p->category->name : 'Tidak Tersedia' }}
                        </span>
                    </td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-info" href="/product/detail/{{$p->id}}" role="button"><i class="fa fa-info"></i></a>
                            <a class="btn btn-warning " href="/product/update/{{$p->id}}" role="button"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-danger"href="/product/delete/{{$p->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" role="button"><i class="fa fa-trash"></i></a>
                        </p>
                    </td>
                </tr> 
                @endforeach   
                </tbody>
            </table>
        </div>
@endsection