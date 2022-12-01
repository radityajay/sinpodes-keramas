@extends('web.layout.app')
@section('title', 'Peraturan Perbekel')
@section('content')

<div id="app">
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner blog-default-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
            <div class="container">
                <div class="visual-text-large text-left visual-center">
                    <h1 class="visual-title visual-sub-title">Peraturan Perbekel</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="breadcrumb-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                            <li class="breadcrumb-item"><a href="index.html"> Blog </a></li>
                            <li class="breadcrumb-item active"> Default </li>
                        </ol>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <section class="content-block">
            <div class="container pb-5">
                <div class="card">
                    <div class="py-3 px-3">
                        <h5>Filter</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control" name="start_date" v-model="filter.start_date" value="{{date('Y-m-01')}}">
                                </div>
                            </div>
            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" class="form-control" name="end_date" v-model="filter.end_date" value="{{date('Y-m-t')}}">
                                </div>
                            </div>
            
                            <div class="col-md-4">
                                <button class="btn btn-warning" id="btn-filter" style="margin-top: 25px;" type="button">
                                    </i> Filter
                                </button>
            
                                <button class="btn btn-success" id="btn-reset" style="margin-top: 25px;" type="button">
                                    <i class="fas fa-sync"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row multiple-row">
                    <div v-for="(item, index) in responeData" :key="'productlistdata'+index" class="col-md-6 col-lg-3">
                        <div class="col-wrap">
                            <div class="post-grid reverse-grid">

                                <div class="post-text-block bg-gray-light" style="width: 15rem !important">
                                    <strong class="content-title mb-0">@{{ item.title }}</strong>
                                    <span class="content-sub-title"></span>
                                    <p>@{{ item.description }}</p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <div>
                                                <a class="btn btn-sm btn-primary px-4 rounded" :href="`${item.file_url}`" target="_blank">
                                                    {{__('Download')}}
                                                    <i class="mdi mdi-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <!--/main content wrapper -->
</div>
@endsection
@push('script')
    <script>
    let app = new Vue({
        el: '#app',
        data: {
            responeData: {!! json_encode(old('responeData') ? old('responeData') : (isset($data) ? $data : [])) !!},
            filter:{
                start_date: null,
                end_date: null,
            }
        },
        mounted(){
            let self = this
            $('#btn-filter').on('click', function(){
                $.ajax({ 
                    type: "GET",
                    url: '/filter-perbekel?start_date='+ self.filter.start_date +'&end_date='+ self.filter.end_date,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        self.responeData = response
                        console.log(response)
                    },
                });
            })

            $('#btn-reset').on('click', function(){
                window.location.reload()
            })
        },
        methods:{
            btnFilter(){
                
                $.ajax({ 
                    type: "GET",
                    url: '/filter-perbekel?start_date='+ this.filter.start_date +'&end_date='+ this.filter.end_date,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        this.responeData = response
                        console.log(response)
                    },
                });
            }
        }
    })
    </script>
@endpush