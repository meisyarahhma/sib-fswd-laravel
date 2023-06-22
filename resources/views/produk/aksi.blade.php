@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            @if (Auth::user()->role->name=='Admin')
            <a class="btn btn-primary my-3" href="{{route('product.status')}}" role="button"><i class="fa fa-arrow-left"></i></a>
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
                            <div>
                                <form action="{{route('status.validasi',$product->id)}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    @method('PUT')
                                    <div class="my-3">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status" >
                                            <option value="$product->status">{{$product->status}}</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Accepted">Accepted</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection