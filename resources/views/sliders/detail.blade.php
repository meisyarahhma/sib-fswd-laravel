@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            <a class="btn btn-primary my-3" href="{{route('sliders')}}" role="button"><i class="fa fa-arrow-left"></i></a>
           <!-- Product section-->
            <section class="py-2">
                <div class="container px-4 px-lg-5 my-2">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/slider/' . $sliders->gambar) }}" alt="..." /></div>
                        <div class="col-md-6">
                            <h1 class="display-5 fw-bolder">{{ $sliders->name }}</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection