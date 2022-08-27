@extends('layouts.app')

@section('content')




<div class="block-header">
    <h2>Serpul</h2>
</div>

<!-- Widgets -->
<!-- <div class="row clearfix"> -->
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


<!-- Select -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    SERVER PULSA ELEKTRONIK
                    <small>Integrasi Serverpulsa dengan web</small>
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
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <select class="form-control show-tick" id="product_id">
                            <option value="">-- Pilih Kategori --</option>

                            @forelse ($category as $item)
                            <option value="{{$item->product_id}}">{{$item->product_name}}</option>

                            @empty
                            @endforelse


                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" id="operator">
                            <option value="">-</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Product
                    <!-- <small>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</small> -->
                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <div id="isi">
                        <!-- <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="http://placehold.it/500x300">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy
                                    text ever since the 1500s
                                </p>
                                <p>
                                    <a href="javascript:void(0);" class="btn btn-primary waves-effect"
                                        role="button">BUTTON</a>
                                </p>
                            </div>
                        </div>
                    </div> -->



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Custom Content -->



<!-- #END# Select -->
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
<!-- </div> -->
<!-- #END# Widgets -->





<!-- </div> -->



@endsection

@section('customjs')

<script>
$('#menuSerpul').addClass('active');
</script>
<script>
$(document).on('change', '#product_id', function() {

    // $('.edit_folder').on('click', function() {
    // console.log('asdasdas');
    $('#operator').empty();
    $('#isi').empty();


    var data = $('#product_id').val();
    console.log(data);
    // $('.code_edit').val(data['description_programm']);
    $.ajax({
        type: 'POST',
        data: {
            "_token": "{!! csrf_token() !!}",
            "operator": data
        },
        dataType: 'JSON',
        url: "{!! route('serpul.operator') !!}",
        success: function(data) {
            console.log(data);

            if (data['responseCode'] == 200) {

                $('#operator').append(
                    "<option value=''>-Pilih-</option>"
                ).selectpicker('refresh');

                //     window.open(data['url']);

                for (i = 0; i < data['responseData'].length; i++) {
                    // console.log(data.data[i]);
                    $('#operator').append(
                        "<option value='" + data['responseData'][i]['product_id'] + "'>" + data[
                            'responseData'][i][
                            'product_name'
                        ] +
                        "</option>"
                    ).selectpicker('refresh');


                };
            };


            // $('.name').val(data['name']);
            // // $('.is_active').val(data['is_active']).change();
            // $('.class_id').val(data['id']);
        }
    });

});

$(document).on('change', '#operator', function() {

    // $('.edit_folder').on('click', function() {
    // console.log('asdasdas');
    $('#isi').empty();

    var data = $('#operator').val();
    // console.log(data);
    // $('.code_edit').val(data['description_programm']);
    $.ajax({
        type: 'POST',
        data: {
            "_token": "{!! csrf_token() !!}",
            "product": data
        },
        dataType: 'JSON',
        url: "{!! route('serpul.product') !!}",
        success: function(data) {
            console.log(data);



            // <div class="col-sm-6 col-md-3">
            //             <div class="thumbnail">
            //                 <img src="http://placehold.it/500x300">
            //                 <div class="caption">
            //                     <h3>Thumbnail label</h3>
            //                     <p>
            //                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
            //                         Ipsum has been the industry's standard dummy
            //                         text ever since the 1500s
            //                     </p>
            //                     <p>
            //                         <a href="javascript:void(0);" class="btn btn-primary waves-effect"
            //                             role="button">BUTTON</a>
            //                     </p>
            //                 </div>
            //             </div>
            //         </div>

            if (data['responseCode'] == 200) {

                // $('#operator').append(
                //     "<option value=''>-Pilih-</option>"
                // ).selectpicker('refresh');

                //     window.open(data['url']);

                for (i = 0; i < data['responseData'].length; i++) {
                    // console.log(data.data[i]);
                    if (data['responseData'][i]['status'] == "ACTIVE") {
                        var btn = "";
                    } else {
                        var btn = "disabled";
                    }
                    $('#isi').append(
                        // "<option value='" + data['responseData'][i]['product_id'] + "'>" + data[
                        //     'responseData'][i][
                        //     'product_name'
                        // ] +
                        // "</option>"
                        "<div class='col-sm-6 col-md-3'>" +
                        "<div class='thumbnail'>" +
                        // "<img src='http://placehold.it/500x300'>" +
                        "<div class='caption'>" +
                        "<h3>" + data['responseData'][i]['operator_name'] + " - " + data[
                            'responseData'][i]['product_name'] + "</h3>" +
                        "<p>Harga : Rp. " + data['responseData'][i]['product_price']
                        .toLocaleString() + "</p>" +
                        "<p>Syarat : " + data['responseData'][i]['product_syarat'] + "</p>" +
                        "<p>" +
                        "<button value = '" + data['responseData'][i]['product_price'] +
                        "'class='btn btn-primary waves-effect bayar' role='button' " + btn +
                        ">BELI</button>" +
                        "</p>" +
                        "</div>" +
                        "</div>" +
                        "</div>"




                    );


                };
            };


            // $('.name').val(data['name']);
            // // $('.is_active').val(data['is_active']).change();
            // $('.class_id').val(data['id']);
        }
    });

});

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