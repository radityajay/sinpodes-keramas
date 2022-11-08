<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | SINPODES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SMART BE" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="/assets/images/sample-logo.png"> --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />

    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- jquery.vectormap css -->
    <link href="/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Full Calendar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" />

    {{-- <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> --}}

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }
    </style>

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.partial.navbar')

        @include('admin.partial.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © STMIK Primakara
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/10.0.0/highcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script src="/assets/ckeditor/ckeditor.js"></script>

    <!-- jquery.vectormap map -->
    <script src="/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <!-- Required datatable js -->
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Full Calendar -->


    {{-- Vue --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="/assets/js/pages/dashboard.init.js"></script>

    <script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script src="/assets/ckeditor/ckeditor.js"></script>

    <script src="/assets/libs/select2/js/select2.min.js"></script>
    <script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
    <script src="/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <script src="/assets/js/pages/form-advanced.init.js"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>


    <!-- App js -->
    <script src="/assets/js/app.js"></script>

    <script src="/assets/js/pages/jquery.mask.min.js"></script>
    {{-- <script src="/assets/tinymce/js/tinymce/tinymce.js"></script> --}}

    <!-- custom js for this page -->
    <script>
        var dataTable;
    </script>

    @stack('script')

    <script>
        $(document).on('click', '.delete-item', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var url = $(this).data('url');
            var label = $(this).data('label');

            swal({
                    title: "Apakah anda yakin menghapus?",
                    type: "warning",
                    confirmButtonText: "Hapus Sekarang",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "DELETE",
                            dataType: "JSON",
                            url: url,
                            data: {
                                "id": id,
                                "_method": 'DELETE',
                                "_token": "{{ csrf_token() }}",
                            }
                        }).then((data) => {
                            console.log(data);
                            if (typeof data.message !== 'undefined') {
                                $("#datatable").DataTable().ajax.reload();
                                // alert(data.message);
                                swal(
                                    'success',
                                    "<strong>Success!</strong> " + data.message + "",
                                    'success'
                                );
                            }
                        })
                    }
                })
            // if (confirm('Apakah anda yakin menghapus ' + label + ' ini?')) {
            //     $.ajax({
            //         type: "DELETE",
            //         dataType: "JSON",
            //         url: url,
            //         data: {
            //             "id": id,
            //             "_method": 'DELETE',
            //             "_token": "{{ csrf_token() }}",
            //         }
            //     }).then((data) => {
            //         console.log(data);
            //         if (typeof data.message !== 'undefined') {
            //             $("#datatable").DataTable().ajax.reload();
            //             // alert(data.message);
            //             swal(
            //                 'success',
            //                 "<strong>Success!</strong> " + data.message + "",
            //                 'success'
            //             );
            //         }
            //     })
            // }
        });
    </script>

    @stack('scripts')
</body>

</html>