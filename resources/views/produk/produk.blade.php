@extends('layout.main')

@section('content')
    <section class="py-4">
            <div class="container px-4 px-lg-5 mt-2">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4  justify-content-center">
                        @foreach($produk as $p) 
                        <div class="col mb-5 card" width="200" height="600">
                            <!-- Product image-->
                            <img class="card-img-top my-3" src="{{ asset('storage/produk/' . $p->gambar) }}" width="200" height="200"alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$p['name']}}</h5>
                                    <!-- Product price-->
                                    Rp{{$p['price']}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Add to cart</a></div>
                            </div>
                        </div>
                        @endforeach
                    
                </div>
            </div>
        </section>
@endsection