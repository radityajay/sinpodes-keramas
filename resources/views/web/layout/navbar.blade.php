<header class="fixed-top main-header header-white transparent with-side-panel-ico" id="waituk-main-header">
                <div id="nav-section">
                    <div class="bottom-header container-fluid mega-menus" id="mega-menus">
                        <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple"
                            id="navbar-inner-container">
                            <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                                <div class="form-group no-margin">
                                    <input class="form-control no-border" id="search_term" name="search_term"
                                        placeholder="Type & Press Enter" type="text">
                                </div>
                            </form>
                            <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse"
                                data-target="#mega-menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand mr-auto m-sm-auto" href="{{ url('/')}}"> <img src="/assets/web/img/logoo.png"
                                    alt="keramas" style="height: 40px !important"> <img src="/assets/web/img/logoo.png"
                                    alt="keramas" style="height: 40px !important"> </a>
                            <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown" data-animation="fadeIn">
                                        <a href="{{ url('/')}}" data-title="Home"> Home </a>
                                    </li>
                                    <li class="dropdown" data-animation="fadeIn">
                                        <a href="{{ route('profildesa.index')}}" data-title="Profil Desa"> Profil Desa </a>
                                    </li>
                                    <li class="dropdown" data-animation="fadeIn">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.html"
                                            data-title="Home"> Pemerintahan </a>
                                        <ul class="dropdown-menu no-border-radius">
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('perangkatdesa.index')}}"> Perangkat Desa</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('pkk.index')}}"> PKK</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('linmas.index')}}"> Linmas</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('bpd.index')}}"> BPD</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('lpm.index')}}"> LPM</a>
                                            </li>
                                            <li><a href="{{ route('karangtaruna.index')}}"> Karang Taruna </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown" data-animation="fadeIn">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.html"
                                            data-title="Home"> Artikel </a>
                                        <ul class="dropdown-menu no-border-radius">
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('announ.index')}}"> Pengumuman</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('berita.index')}}"> Berita</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown" data-animation="fadeIn">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.html"
                                            data-title="Home"> Potensi Desa </a>
                                        <ul class="dropdown-menu no-border-radius">
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensipariwisata.index')}}"> Pariwisata</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensialam.index')}}"> Alam</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensisenbud.index')}}"> Seni Budaya</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensikuliner.index')}}"> Kuliner</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensipertanian.index')}}"> Pertanian</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensiperikanan.index')}}"> Perikanan</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensikerajinan.index')}}"> Kerajinan</a>
                                            </li>
                                            <li class="dropdown dropdown-left dropdown-parent">
                                                <a href="{{ route('potensiusahamikro.index')}}"> Usaha Mikro</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li>
                                        <a href="about.html"> About </a>
                                    </li>
                                    <li>
                                        <a href="team.html"> Team </a>
                                    </li> -->
                                    <li class="dropdown right-dropdown" data-animation="fadeIn">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.html"
                                            data-title="Home"> Produk Hukum </a>
                                        <ul class="dropdown-menu no-border-radius">
                                            <li><a href="{{ route('aturandesa.index')}}"> Peraturan Desa </a></li>
                                            <li><a href="{{ route('skperbekel.index')}}"> SK Perbekel </a></li>
                                            <li><a href="{{ route('peraturanperbekel.index')}}"> Peraturan Perbekel </a></li>
                                        </ul>
                                    </li>
                                    {{-- <li>
                                        <a href="contact.html"> APBDesa </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('pengaduan.index')}}"> Pengaduan Masyarakat </a>
                                    </li>
                                    <!-- <li class="dropdown cart-list margin-0-sm">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><span class="hidden-lg-up"> Shopping Cart </span><i class="custom-icon-cart m-marker"></i></a>
                                        <div class="dropdown-menu-container">
                                            <div class="dropdown-menu no-border-radius col-lg-1 col-md-4 col-sm-4">
                                                <h4> Shopping Cart </h4>
                                                <ul class="s-list no-padding">
                                                    <li class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                            <div class="img">
                                                                <a href="#"><img src="img/img-02.jpg" alt="image description"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                            <h6> <a href="#"><strong>Product 1 </strong></a><span class="text-muted float-right"> x 1 </span></h6>
                                                            <h6> $199 </h6>
                                                        </div>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                            <div class="img">
                                                                <a href="#"><img src="img/img-02.jpg" alt="image description"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                            <h6> <a href="#"><strong>Product 2 </strong></a><span class="text-muted float-right"> x 2 </span></h6>
                                                            <h6> $199 </h6>
                                                        </div>
                                                    </li>
                                                    <li class="divider margin-bottom-1"></li>
                                                    <li class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-5 col">
                                                            <h2> Total </h2>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-7 col">
                                                            <h2 class="text-right"> $3300 </h2>
                                                        </div>
                                                    </li>
                                                    <li><a href="#" class="btn btn-sm btn-block btn-secondary btn-mina btn-mina-rip-br"> View Cart </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <!-- <div class="navbar-pos-search with-side-panel">
                                <a href="#" class="x-search x-search-trigger navbar-link"><i class="custom-icon-search"></i></a>
                                <a href="#" class="x-search icon-close-round navbar-link"><i class="icon-line-cross"></i></a>
                            </div>
                            <div class="nav-trigger navbar-pos-search overlay-trigger">
                                <a href="#" class="navbar-link"><i class="icon-sort-1"></i></a>
                            </div> -->
                        </nav>
                    </div>
                </div>
            </header>