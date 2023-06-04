                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            @if (Auth::user()->role->name=='Admin'||Auth::user()->role->name=='Staff')
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            @endif

                            @if (Auth::user()->role->name=='Admin'||Auth::user()->role->name=='Staff')
                            <div class="sb-sidenav-menu-heading">Content</div>
                            <a class="nav-link" href="/sliders">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Slider
                            </a>
                            @endif

                            <div class="sb-sidenav-menu-heading">Management</div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-table-list"></i></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if (Auth::user()->role->name=='Admin'||Auth::user()->role->name=='Staff')
                                    <a class="nav-link" href="/category">Kategori</a>
                                    @endif
                                    <a class="nav-link" href="{{route('product.index')}}">Daftar Produk</a>
                                </nav>
                            </div>
                            

                            @if (Auth::user()->role->name=='Admin')
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/grup">Role</a>
                                    <a class="nav-link" href="/user">Daftar User</a>
                                </nav>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{Auth::user()->name}}
                    </div>
                </nav>