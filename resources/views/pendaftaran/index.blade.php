@extends('layout.main')

@section('content')
        <main>
            <div class="col-lg-10 col-sm-12">
                <div class=" justify-content-space-between">
                    <a class="btn btn-primary my-3" href="user/create" role="button">Add User</a>
                    <!-- <a class=" btn btn-danger " href="" role="button">Logout</a> -->
                </div>  
                <h2>Daftar Pengguna</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pendaftaran as $p) 
                    <tr>
                        <td>{{$p -> id}}</td>
                        <td>
                            <p class="lead">
                                <a class="btn btn-primary" href="/user/detail/{{$p -> id}}" role="button">View</a>
                                <a class="btn btn-warning" href="/user/update/{{$p -> id}}" role="button">Update</a>
                                <a class="btn btn-danger"href="/user/delete/{{$p -> id}}" role="button">Delete</a>
                            </p>
                        </td>
                        <td> <img src="image/{{$p -> foto}}" style=width:50px> </td>
                        <td>{{$p -> name}}</td>
                        <td>{{$p -> email}}</td>
                        <td>{{$p -> telp}}</td>
                        <td>{{$p -> address}}</td>
                        <td>{{$p -> role}}</td>
                    </tr>  
                    @endforeach
                    </tbody>
                </table>
            </div>
            
        </main>
@endsection
  