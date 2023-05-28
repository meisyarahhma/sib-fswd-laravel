@extends('layout.main')

@section('content')
        <div class="col-lg-10 col-sm-12">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="{{route('slider.create')}}" role="button">Tambah Slider</a>
            </div> 
            <div class="my-2">
                <h2>Daftar Slider</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Slider</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($slider as $slid) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> <img src="slider/{{$slid['gambar']}}" style=width:50px> </td>
                    <td>{{$slid['name']}}</td>
                    <td>
                        <p class="lead">
                            <a class="btn btn-warning" href="" role="button">Update</a>
                            <a class="btn btn-danger"href="" role="button">Delete</a>
                        </p>
                    </td>
                </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
@endsection