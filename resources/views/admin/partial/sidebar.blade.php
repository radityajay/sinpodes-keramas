<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li class="{{ (request()->is('admin')) ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- <hr> --}}
                <li class="menu-title">Master Data</li>

                @can(['village-apparature.index', 'pkk.index', 'linmas.index', 'kt.index'])
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-database-2-fill"></i>
                        <span>Pemerintahan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can(['village-apparature.index'])
                        <li class="{{ (request()->is('admin/village-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('village-apparature.index') }}">Perangkat Desa</a></li>
                        @endcan
                        @can(['pkk.index'])
                        <li class="{{ (request()->is('admin/pkk-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('pkk-apparature.index') }}">PKK</a></li>
                        @endcan
                        @can(['linmas.index'])
                        <li class="{{ (request()->is('admin/linmas-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('linmas-apparature.index') }}">Linmas</a></li>
                        @endcan
                        @can(['bpd.index'])
                        <li class="{{ (request()->is('admin/bpd-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('bpd-apparature.index') }}">BPD</a></li>
                        @endcan
                        @can(['lpm.index'])
                        <li class="{{ (request()->is('admin/lpm-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('lpm-apparature.index') }}">LPM</a></li>
                        @endcan
                        @can(['kt.index'])
                        <li class="{{ (request()->is('admin/kt-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('kt-apparature.index') }}">Karang Taruna</a></li>
                        @endcan
                        
                    </ul>
                </li>
                @endcan
                
                
                @can(['annoncement.index', 'news.index'])
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri ri-todo-line"></i>
                        <span>Artikel</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can(['annoncement.index'])
                        <li class="{{ (request()->is('admin/announcement/*')) ? 'mm-active' : '' }}"><a href="{{ route('announcement.index') }}">Pengumuman</a></li>
                        @endcan
                        @can(['news.index'])
                        <li class="{{ (request()->is('admin/news/*')) ? 'mm-active' : '' }}"><a href="{{ route('news.index') }}">Berita</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
                
                @can(['village-rules.index', 'region-rules.index'])
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-document"></i>
                        <span>Peraturan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can(['village-rules.index'])
                        <li class="{{ (request()->is('admin/village-rules/*')) ? 'mm-active' : '' }}"><a href="{{ route('village-rules.index') }}">Perdes</a></li>
                        @endcan
                        @can(['perbekel-rules.index'])
                        <li class="{{ (request()->is('admin/perbekel-rules/*')) ? 'mm-active' : '' }}"><a href="{{ route('perbekel-rules.index') }}">Perbekel</a></li>
                        @endcan
                        @can(['sk-perbekel.index'])
                        <li class="{{ (request()->is('admin/sk-perbekel/*')) ? 'mm-active' : '' }}"><a href="{{ route('sk-perbekel.index') }}">SK Perbekel</a></li>
                        @endcan
                        
                    </ul>
                </li>
                @endcan
                
                @can(['pariwisata.index', 'alam.index', 'senbud.index', 'kuliner.index', 'perkebunan.index', 'perikanan.index', 'kerajinan.index', 'mikro.index'])
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-document"></i>
                        <span>Potensi Desa</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can(['pariwisata.index'])
                        <li class="{{ (request()->is('admin/pariwisata/*')) ? 'mm-active' : '' }}"><a href="{{ route('pariwisata.index') }}">Pariwisata</a></li>
                        @endcan
                        @can(['alam.index'])
                        <li class="{{ (request()->is('admin/alam/*')) ? 'mm-active' : '' }}"><a href="{{ route('alam.index') }}">Alam</a></li>
                        @endcan
                        @can(['senbud.index'])
                        <li class="{{ (request()->is('admin/senbud/*')) ? 'mm-active' : '' }}"><a href="{{ route('senbud.index') }}">Seni dan Budaya</a></li>
                        @endcan
                        @can(['kuliner.index'])
                        <li class="{{ (request()->is('admin/kuliner/*')) ? 'mm-active' : '' }}"><a href="{{ route('kuliner.index') }}">Kuliner</a></li>
                        @endcan
                        @can(['perkebunan.index'])
                        <li class="{{ (request()->is('admin/pertanian/*')) ? 'mm-active' : '' }}"><a href="{{ route('pertanian.index') }}">Pertanian</a></li>
                        @endcan
                        @can(['perikanan.index'])
                        <li class="{{ (request()->is('admin/perikanan/*')) ? 'mm-active' : '' }}"><a href="{{ route('perikanan.index') }}">Perikanan</a></li>
                        @endcan
                        @can(['kerajinan.index'])
                        <li class="{{ (request()->is('admin/kerajinan/*')) ? 'mm-active' : '' }}"><a href="{{ route('kerajinan.index') }}">Kerajinan</a></li>
                        @endcan
                        @can(['mikro.index'])
                        <li class="{{ (request()->is('admin/usaha-mikro/*')) ? 'mm-active' : '' }}"><a href="{{ route('usaha-mikro.index') }}">Usaha Mikro</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
                

                @can(['role.index', 'user.index'])
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-document"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can(['role.index'])
                        <li class="{{ (request()->is('admin/role/*')) ? 'mm-active' : '' }}"><a href="{{ route('role.index') }}">Roles</a></li>
                        @endcan
                        @can(['user.index'])
                        <li class="{{ (request()->is('admin/user/*')) ? 'mm-active' : '' }}"><a href="{{ route('user.index') }}">Users</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can(['pengaduan-masyarakat.index'])
                <li class="{{ (request()->is('admin/pengaduan-masyarakat')) ? 'mm-active' : '' }}">
                    <a href="{{ route('pengaduan-masyarakat.index') }}" class="waves-effect">
                        <i class="mdi mdi-clipboard-text"></i>
                        <span>Pengaduan Masyarakat</span>
                    </a>
                </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->