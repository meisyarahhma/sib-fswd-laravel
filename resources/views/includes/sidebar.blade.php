<!-- sidebar -->
                <div class="bg-dark col-auto col-md-0 col-lg-3 min-vh-100">
                    <div class="bg-dark p-2"> 
                        <a class="d-flex text-decoration-none mt-1 aligh-items-center text-white">
                            <span class="fs-4 d-none d-sm-inline lead ">BUKET MEKAR</span>
                        </a>
                        <ul class="nav nav-pills flex-column mt-4">
                            <div class="nav-item py-2 py-sm-0">
                                <!-- <span class="text-white" >Core</span> -->
                                <a href="/dashboard" class="nav-link text-white">
                                    <i class="fs-5 fa fa-dashboard"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </div>
                            <div class="nav-item py-2 py-sm-0">
                                <a href="{{route('slider.index')}}" class="nav-link text-white">
                                    <i class="fs-5 fa fa-images"></i><span class="fs-4 ms-3 d-none d-sm-inline">Slider</span>
                                </a>
                            </div>
                            <div class="nav-item py-2 py-sm-0">
                                    <a class="nav-link text-white collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fs-5 fa fa-table-list"></i>
                                            <span class="fs-4 ms-3  d-none d-sm-inline">Produk</span><i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <div class="nav-link text-white">
                                                <a class="nav-link text-white" href="/category">
                                                    <span class="fs-5 ms-4  d-none d-sm-inline">Kategori</span>
                                                </a>
                                                <a class="nav-link text-white" href="/product">
                                                    <span class="fs-5 ms-4  d-none d-sm-inline">Daftar Produk</span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                            </div>    
                            <div class="nav-item py-2 py-sm-0">
                                    <a class="nav-link text-white collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fs-5 fa fa-users"></i>
                                            <span class="fs-4 ms-3  d-none d-sm-inline">Pengguna</span><i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <div class="nav-link text-white" >
                                                <a class="nav-link text-white" href="/grup">
                                                    <span class="fs-5 ms-4  d-none d-sm-inline">Grup Pengguna</span>
                                                </a>
                                                <a class="nav-link text-white" href="/user">
                                                    <span class="fs-5 ms-4  d-none d-sm-inline">Daftar Pengguna</span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                            </div>
                        </ul>
                    </div>
                </div>
