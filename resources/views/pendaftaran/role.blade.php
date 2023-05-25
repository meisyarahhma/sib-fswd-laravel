@extends('layout.main')

@section('content')
        <div class="col-lg-10 col-sm-12">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="user/create" role="button">Tambah Role</a>
            </div> 
            <div class="my-2">
                <h2>Grup Pengguna</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Role</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
               
                <tr>
                    <td>1.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td>Admin</td>
                    <td>4</td>
                </tr>  
                <tr>
                    <td>2.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td>User</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>
@endsection