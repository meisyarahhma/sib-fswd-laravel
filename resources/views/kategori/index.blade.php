@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="{{route('category.create')}}" role="button">Tambah Kategori</a>
            </div> 
            <div class="my-2">
                <h2>Daftar Kategori</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
               @foreach($categories as $category) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category['name']}}</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-danger"href="/category/delete/{{$category->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" role="button">Delete</a>
                        </p>
                    </td>
                </tr> 
                @endforeach 
                </tbody>
            </table>
        </div>
@endsection