@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="grup/create" role="button">Tambah Role</a>
            </div> 
            <div class="my-2">
                <h2>Grup Pengguna</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
               @foreach($roles as $r) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$r['name']}}</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-danger"href="/grup/delete/{{$r->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" role="button">Delete</a>
                        </p>
                    </td>
                </tr> 
                @endforeach 
                </tbody>
            </table>
        </div>
@endsection