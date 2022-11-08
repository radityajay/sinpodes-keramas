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
                                    <p class="text-truncate font-size-14 mb-2">#</p>
                                    <h4 class="mb-0"></h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="ri-team-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card-body border-top py-3">
                            <div class="text-truncate">
                                <a href=""><span class="text-muted ms-2">Selengkapnya <i class="mdi mdi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">#</p>
                                    <h4 class="mb-0"></h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="mdi mdi-bell-alert font-size-24"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top py-3">
                            <div class="text-truncate">
                                <a href=""><span class="text-muted ms-2">Selengkapnya <i class="mdi mdi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-1 overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">#</p>
                                    <h4 class="mb-0"></h4>
                                </div>
                                <div class="text-primary ms-auto">
                                    <i class="mdi mdi-chat-processing font-size-24"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top py-3">
                            <div class="text-truncate">
                                <a href=""><span class="text-muted ms-2">Selengkapnya <i class="mdi mdi-arrow-right"></i></span></a>
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