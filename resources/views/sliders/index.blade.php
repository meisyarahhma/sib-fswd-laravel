@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-3" href="/sliders/create" role="button">Tambah Slider</a>
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
                    @foreach($sliders as $slider)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{ asset('storage/slider/' . $slider->gambar) }}" class="img-fluid" style="max-width: 100px;"alt="{{ $slider->gambar }}"></td>
                        <td>{{$slider['name']}}</td>
                        <td>
                            <p class="lead">
                                <a class="btn btn-warning" href="/sliders/update/{{$slider->id}}" role="button">Update</a>
                                <a class="btn btn-danger"href="/sliders/delete/{{$slider->id}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')" role="button">Delete</a>
                            </p>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection