@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->



<div class="block-header">
    <h2>Payment</h2>
</div>

<!-- Widgets -->
<div class="row clearfix">
    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">playlist_add_check</i>
            </div>
            <div class="content">
                <div class="text">E Arsip</div>
                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
            </div>
        </div>
    </div> -->

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Simulasi Pembayaran
                        <small>Ini adalah simulasi pembayaran dengan beberapa metode pembayaran.</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img
                                    src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Crystal_Project_computer.png">
                                <div class="caption">
                                    <!-- <form id="form_validation6" action="{{ route('payment.pay') }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }} -->
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s
                                    </p>
                                    <input type="hidden" name="harga" class="harga" value="12000">

                                    <p>
                                        <!-- <a href="javascript:void(0);" class="btn btn-primary waves-effect"
                                            role="button">BUTTON</a> -->

                                        <button type="button" class="btn btn-primary waves-effect bayar"
                                            value="12000">Rp.
                                            12.000,-</button>

                                    </p>
                                    <!-- </form> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img
                                    src="https://images.saymedia-content.com/.image/c_limit%2Ccs_srgb%2Cq_auto:eco%2Cw_700/MTc0NDY0NTMyOTQzNDgwNDU0/buying-your-first-desktop-computer.webp">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s
                                    </p>
                                    <p>
                                        <!-- <a href="javascript:void(0);" class="btn btn-primary waves-effect"
                                            role="button">BUTTON</a> -->
                                        <button type="button" class="btn btn-primary waves-effect bayar"
                                            value="27000">Rp.
                                            27.000,-</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="https://cdn.murianews.com/wp-content/uploads/2022/05/28015919/POCO-M3.jpg">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s
                                    </p>
                                    <p>
                                        <!-- <a href="javascript:void(0);" class="btn btn-primary waves-effect"
                                            role="button">BUTTON</a> -->

                                        <button type="button" class="btn btn-primary waves-effect bayar"
                                            value="15000">Rp.
                                            15.000,-</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/69/IBM_PC_5150.jpg">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy
                                        text ever since the 1500s
                                    </p>
                                    <p>
                                        <!-- <a href="javascript:void(0);" class="btn btn-primary waves-effect"
                                            role="button">BUTTON</a> -->

                                        <button type="button" class="btn btn-primary waves-effect bayar"
                                            value="20000">Rp.
                                            20.000,-</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Custom Content -->
    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Pengabmas</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">USER</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div> -->
</div>
<!-- #END# Widgets -->





<!-- </div> -->



@endsection

@section('customjs')

<script>
$('#menuHome').addClass('active');
</script>
<script>
$(document).on('click', '.bayar', function() {

    // $('.edit_folder').on('click', function() {
    // console.log('asdasdas');

    var data = $(this).val();
    console.log(data);
    // $('.code_edit').val(data['description_programm']);
    $.ajax({
        type: 'POST',
        data: {
            "_token": "{!! csrf_token() !!}",
            "harga": data
        },
        dataType: 'JSON',
        url: "{!! route('payment.pay') !!}",
        success: function(data) {
            console.log(data);

            if (data['message'] == 'success') {

                window.open(data['url']);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data['message']
                })
            };



            // $('.name').val(data['name']);
            // // $('.is_active').val(data['is_active']).change();
            // $('.class_id').val(data['id']);
        }
    });

});
</script>

@endsection