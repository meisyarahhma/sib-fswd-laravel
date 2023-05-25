@extends('layout.main')

@section('content')
        <div class="col-lg-10 col-sm-12">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="user/create" role="button">Tambah Produk</a>
            </div> 
            <div class="my-2">
                <h2>Daftar Produk</h2>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kategori</th>
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
                    <td> <img src="{{asset('./image/buket1.jpg')}}" style=width:50px> </td>
                    <td>Buket Boneka + Bunga</td>
                    <td>Rp80.000</td>
                    <td>Kategori 3</td>
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
                    <td> <img src="{{asset('./image/buket2.jpg')}}" style=width:50px> </td>
                    <td>Buket Bunga</td>
                    <td>Rp45.000</td>
                    <td>Kategori 2</td>
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
                    <td> <img src="{{asset('./image/buket3.jpg')}}" style=width:50px> </td>
                    <td>Buket Boneka + Bunga</td>
                    <td>Rp100.000</td>
                    <td>Kategori 3</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td> <img src="{{asset('./image/buket4.jpg')}}" style=width:50px> </td>
                    <td>Buket Boneka + Bunga</td>
                    <td>Rp150.000</td>
                    <td>Kategori 3</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td> <img src="{{asset('./image/buket5.jpg')}}" style=width:50px> </td>
                    <td>Buket Snack</td>
                    <td>Rp55.000</td>
                    <td>Kategori 1</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td> <img src="{{asset('./image/buket6.jpg')}}" style=width:50px> </td>
                    <td>Buket Snack</td>
                    <td>Rp15.000</td>
                    <td>Kategori 1</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td> <img src="{{asset('./image/buket7.jpg')}}" style=width:50px> </td>
                    <td>Buket Snack</td>
                    <td>Rp25.000</td>
                    <td>Kategori 1</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                    <td> <img src="{{asset('./image/buket8.jpg')}}" style=width:50px> </td>
                    <td>Buket Snack</td>
                    <td>Rp65.000</td>
                    <td>Kategori 1</td>
                </tr>
                </tbody>
            </table>
        </div>
@endsection