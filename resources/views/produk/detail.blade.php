@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            @if (Auth::user()->role->name=='Admin'||Auth::user()->role->name=='Staff')
            <a class="btn btn-primary my-3" href="{{route('product.index')}}" role="button"><i class="fa fa-arrow-left"></i></a>
            @endif
            @if (Auth::user()->role->name=='User')
            <a class="btn btn-primary my-3" href="{{route('produk')}}" role="button"><i class="fa fa-arrow-left"></i></a>
            @endif
           <!-- Product section-->
            <section class="py-2">
                <div class="container px-4 px-lg-5 my-2">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/produk/' . $product->gambar) }}" alt="..." /></div>
                        <div class="col-md-6">
                            <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                            <div class="fs-5 mb-5">
                                <span>Rp.{{ number_format($product->price, 0) }}</span>
                            </div>
                            <p class="lead">Bisa request variannya. Segera pesan sekarang</p>
                            <div class="card-footer pt-0 border-top-0 bg-transparent">
                                <div class=""><a class="btn btn-outline-dark bg-success text-white mt-auto bi bi-whatsapp" href="https://wa.me/+6281326223552"> Pesan Sekarang</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related items section-->
            <section class="py-5 bg-light">
                <div class="container px-4 px-lg-5 mt-5">
                    <h2 class="fw-bolder mb-4">Related products</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($related as $product)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ asset('storage/produk/' . $product->gambar) }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $product->name }}</h5>
                                            <!-- Product price-->
                                            Rp.{{ number_format($product->price, 0) }}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/product/detail/{{$product->id}}">View options</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
@endsection