@extends('layout.main')

@section('content')
            <div class="container-fluid px-4">
                <div class=" justify-content-space-between">
                    <a class="btn btn-primary my-3" href="user/create" role="button">Add User</a>
                    <!-- <a class=" btn btn-danger " href="" role="button">Logout</a> -->
                </div>  
                <h2>Daftar User</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $u) 
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->name}}</td> 
                        <td>{{$u->email}}</td>
                        <td>{{$u->phone}}</td>
                        <td>{{$u->address}}</td>
                        <td>
                            <span class="badge {{ $u->role ? ($u->role->name == 'Admin' ? 'bg-success' : 'bg-primary') : 'bg-primary' }}">
                                {{ $u->role ? $u->role->name : 'Tidak Tersedia' }}
                            </span>                        
                        </td>
                        <td>
                            <p class="lead">
                                <a class="btn btn-warning" href="/user/update/{{$u->id}}" role="button">Update</a>
                                <a class="btn btn-danger"href="/user/delete/{{$u->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" role="button">Delete</a>
                            </p>
                        </td>
                    </tr>  
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
  