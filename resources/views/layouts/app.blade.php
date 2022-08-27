<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Document Management System</title>
    <!-- Favicon-->
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('bsb/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('bsb/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('bsb/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('bsb/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('bsb/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('bsb/css/themes/all-themes.css') }}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('bsb/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('bsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ asset('bsb/plugins/waitme/waitMe.css" rel="stylesheet') }}" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('bsb/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Dropzone Css -->
    <!-- <link href="{{ asset('bsb/plugins/dropzone/dropzone.css') }}" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.css"
        integrity="sha256-6X2vamB3vs1zAJefAme/aHhUeJl13mYKs3VKpIGmcV4=" crossorigin="anonymous">


    <!-- JQuery DataTable Css -->
    <link href="{{ asset('bsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ asset('bsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Sweetalert Css -->
    <link href="{{ asset('bsb/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> -->
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    @include('layouts.header')

    <section>
        @include('layouts.sidebar')

    </section>

    <section class="content">
        <div class="container-fluid">


            @yield('content')

        </div>
    </section>


    <!-- tambahan -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
    <!-- <script src="{{ asset('sweetalert/sweetalert.js') }}"></script> -->


    <!-- Jquery Core Js -->
    <script src="{{ asset('bsb/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('bsb/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('bsb/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('bsb/plugins/node-waves/waves.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('bsb/plugins/autosize/autosize.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('bsb/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('bsb/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('bsb/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('bsb/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('bsb/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('bsb/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('bsb/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('bsb/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('bsb/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('bsb/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ asset('bsb/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Moment Plugin Js -->
    <script src="{{ asset('bsb/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>


    <!-- Custom Js -->
    <script src="{{ asset('bsb/js/admin.js') }}"></script>
    <!-- <script src="{{ asset('bsb/js/pages/index.js') }}"></script> -->
    <script src="{{ asset('bsb/js/pages/ui/notifications.js') }}"></script>
    <script src="{{ asset('bsb/js/pages/ui/dialogs.js') }}"></script>
    <!-- <script src="{{ asset('js/custom.js') }}"></script> -->
    <script src="{{ asset('bsb/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset('bsb/js/pages/ui/tooltips-popovers.js') }}"></script>
    <script src="{{ asset('bsb/js/pages/ui/notifications.js') }}"></script>




    <!-- Demo Js -->
    <script src="{{ asset('bsb/js/demo.js') }}"></script>
    <script src="{{ asset('bsb/js/pages/tables/jquery-datatable.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->




    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('bsb/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('bsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Dropzone Plugin Js -->
    <!-- <script src="{{ asset('bsb/plugins/dropzone/dropzone.js') }}"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.js"
        integrity="sha256-IXyEnLo8FpsoOLrRzJlVYymqpY29qqsMHUD2Ah/ttwQ=" crossorigin="anonymous"></script>


    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('bsb/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <!-- <script src="{{ asset('bsb/plugins/sweetalert/sweetalert.min.js') }}"></script> -->

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('bsb/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('bsb/js/pages/forms/form-validation.js') }}"></script>

    <script src="{{ asset('bsb/plugins/ckeditor/ckeditor.js') }}"></script>
    <!-- <script src="{{ asset('bsb/plugins/tinymce/tinymce.js') }}"></script> -->

    <!-- <script src="{{ asset('bsb/js/admin.js') }}"></script>
    <script src="{{ asset('bsb/js/demo.js') }}"></script> -->








    <script>
    // $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    //   $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    $(document).ready(function() {
        $('div.alert').not('.alert-important').fadeIn().delay(3000).fadeOut();
        $('.help-block').fadeIn().delay(1500).fadeOut();
    });
    </script>
    @include('layouts.notification')

    <!-- Custom Js -->

    @yield('customjs')
    <!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->

</body>

</html>