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

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-database-2-fill"></i>
                        <span>Pemerintahan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ (request()->is('admin/village-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('village-apparature.index') }}">Perangkat Desa</a></li>
                        <li class="{{ (request()->is('admin/pkk-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('pkk-apparature.index') }}">PKK</a></li>
                        <li class="{{ (request()->is('admin/linmas-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('linmas-apparature.index') }}">Linmas</a></li>
                        <li class="{{ (request()->is('admin/kt-apparature/*')) ? 'mm-active' : '' }}"><a href="{{ route('kt-apparature.index') }}">Karang Taruna</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri ri-todo-line"></i>
                        <span>Artikel</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ (request()->is('admin/announcement/*')) ? 'mm-active' : '' }}"><a href="{{ route('announcement.index') }}">Pengumuman</a></li>
                        {{-- <li class="{{ (request()->is('admin/announcement/*')) ? 'mm-active' : '' }}"><a href="{{ route('announcement.index') }}">Berita</a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-document"></i>
                        <span>Peraturan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ (request()->is('terms-conditions/*')) ? 'mm-active' : '' }}"><a href="{{ url('terms-conditions') }}">Desa</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Kabupaten</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-document"></i>
                        <span>Potensi Desa</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ (request()->is('terms-conditions/*')) ? 'mm-active' : '' }}"><a href="{{ url('terms-conditions') }}">Pariwisata</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Alam</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Seni dan Budaya</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Kuliner</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Perebunan</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Perikanan</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Kerajinan</a></li>
                        <li class="{{ (request()->is('privacy-policy/*')) ? 'mm-active' : '' }}"><a href="{{ url('privacy-policy') }}">Usaha Mikro</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->