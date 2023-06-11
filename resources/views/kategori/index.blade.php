@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            @if (Auth::user()->role->name=='Admin')
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="{{route('category.create')}}" role="button">Tambah Kategori</a>
            </div> 
            @endif
            <div class="my-2">
                <h2>Daftar Kategori</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        @if (Auth::user()->role->name=='Admin')
                        <th scope="col">Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
               @foreach($categories as $category) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category['name']}}</td>
                    @if (Auth::user()->role->name=='Admin')
                    <td>
                        <p class="lead">
                            <a class="btn btn-danger"href="/category/delete/{{$category->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" role="button"><i class="fa fa-trash"></i></a>
                        </p>
                    </td>
                    @endif
                </tr> 
                @endforeach 
                </tbody>
            </table>
        </div>
@endsection