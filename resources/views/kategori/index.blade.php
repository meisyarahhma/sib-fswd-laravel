@extends('layout.main')

@section('content')
        <div class="col-lg-10 col-sm-12">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="user/create" role="button">Tambah Kategori</a>
            </div> 
            <div class="my-2">
                <h2>Daftar Kategori</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Range Harga</th>
                        <th scope="col">Keterangan</th>
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
                    <td>Kategori 1</td>
                    <td>Rp15.000 - Rp80.000</td>
                    <td>Buket Snack</td>
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
                    <td>Kategori 2</td>
                    <td>Rp45.000 - Rp185.000</td>
                    <td>Buket Bunga</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td>Kategori 3</td>
                    <td>Rp80.000 - Rp250.000</td>
                    <td>Buket Boneka + Bunga</td>
                </tr>
                </tbody>
            </table>
        </div>
@endsection