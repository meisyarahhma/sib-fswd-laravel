@extends('layout.main')

@section('content')
        <div class="col-lg-10 col-sm-12">
            <div class="my-3">
                <h2>Tambah Role</h2>
            </div>
            
            <form action="{{route('role.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <input class="form-control" type="text" id="name" name="name" placeholder="Masukkan Role">
                <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Upload</button>
            </form>    
        </div>
@endsection