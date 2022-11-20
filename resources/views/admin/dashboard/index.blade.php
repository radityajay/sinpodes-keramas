@extends('admin.partial.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid" id="App">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Sinpodes</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Perangkat Desa</p>
                                    <h4 class="mb-0">{{ $countPerangkatDesa }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">PKK</p>
                                    <h4 class="mb-0">{{ $countPkk }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Linmas</p>
                                    <h4 class="mb-0">{{ $countLinmas }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Karang Taruna</p>
                                    <h4 class="mb-0">{{ $countKt }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->
        </div>
    </div>
    <hr>
    {{-- artikel --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Pengumuman</p>
                                    <h4 class="mb-0">{{ $countPengumuman }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Berita</p>
                                    <h4 class="mb-0">{{ $countBerita }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->
        </div>
    </div>
    <hr>

    {{-- Peraturan --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Peraturan Desa</p>
                                    <h4 class="mb-0">{{ $countPeraturanDesa }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Peraturan Kabupaten</p>
                                    <h4 class="mb-0">{{ $countPeraturanKabupaten }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->
        </div>
    </div>
    <hr>

    {{-- Potensi Desa --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Pariwisata</p>
                                    <h4 class="mb-0">{{ $countPariwisata }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Alam</p>
                                    <h4 class="mb-0">{{ $countAlam }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Seni dan Budaya</p>
                                    <h4 class="mb-0">{{ $countSenbud }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Kuliner</p>
                                    <h4 class="mb-0">{{ $countKuliner }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Perkebunan</p>
                                    <h4 class="mb-0">{{ $countPerkebunan }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Perikanan</p>
                                    <h4 class="mb-0">{{ $countPerikanan }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Kerajinan</p>
                                    <h4 class="mb-0">{{ $countKerajinan }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Usaha Mikro</p>
                                    <h4 class="mb-0">{{ $countUsahaMikro }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->
        </div>
    </div>
    <hr>

    {{-- Master Data --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Roles</p>
                                    <h4 class="mb-0">{{ $countRoles }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Users</p>
                                    <h4 class="mb-0">{{ $countUsers }}</h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end row -->
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var $VUE_VM = new Vue({
        el: '#App',
        data(){
            return{
                total_owner : 0,
                fish_consultation : 0,
                total_subscription : 0,
            }
        },
        methods: {

        }
    })

    $(document).ready(function() {
        const datestart = "{{$datenow}}";
        const dateend = "{{$datethirty}}";
        $VUE_VM.statistics(datestart, dateend);
    })
</script>
@endpush