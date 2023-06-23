<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Buket Mekar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Buket Mekar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="col text-right collapse row navbar-collapse" id="navbarSupportedContent">
                    <ul class="col text-right navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="{{ route('landing', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#footer">About</a></li>
                        
                        <form class="d-flex text-right justify-content-space-between">
                                @auth
                                    <a href="{{ route('dashboard') }}" class="btn btn-outline-dark ms-1" role="button">
                                        <i class="bi-person-fill me-1"></i>
                                        Dashboard
                                    </a>
                                @endauth

                                @guest
                                    <a href="{{ route('login') }}" class="btn btn-outline-dark ms-1" role="button">
                                        <i class="bi-person-fill me-1"></i>
                                        Login
                                    </a>
                                @endguest
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($sliders as $slider)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="{{ $loop->first ? 'true' : '' }}" aria-label="Slide 1"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="3000">
                        <img src="{{ asset('storage/slider/' . $slider->gambar) }}" class="d-block w-100" alt="{{ $slider->gambar }}">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Section-->
        <section class="py-3">
            <div class="container px-4 px-lg-5 mt-5">
                <form action="{{ route('landing') }}" method="GET">
                    @csrf
                    <div class="row g-3 my-3">
                        <div class="col-sm-3 mb-2">
                            <input type="text" class="form-control" placeholder="Category" name="category" value="{{ old('category') }}">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <input type="text" class="form-control" placeholder="Min" name="min" value="{{ old('min') }}">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <input type="text" class="form-control" placeholder="Max" name="max" value="{{ old('max') }}">
                        </div>
                        <div class="col-sm-3 mb-2">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                        @foreach($products as $produk) 
                        <div class="col mb-5">
                            <div class="card h-100"> 
                                <div class="col mb-5">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ asset('storage/produk/' . $produk->gambar) }}" width="200" height="200"alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{$produk['name']}}</h5>
                                            <!-- Product price-->
                                            Rp.{{ number_format($produk->price, 0) }}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/produkty/show/{{$produk->id}}">View Option</a></div>
                                    </div>
                                </div>    
                            </div> 
                        </div>
                        
                        @endforeach
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        @include('footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
