@include('includes/header_start')

<link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

<!-- Plugins css -->
<link href="{{ URL::asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/custom_checkbox.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('assets/css/jquery.notify.css')}}" rel="stylesheet" type="text/css">

<meta name="csrf-token" content="{{ csrf_token() }}"/>


@include('includes/header_end')


<!-- Page title -->
<ul class="list-inline menu-left mb-0">
    <li class="list-inline-item">
        <button type="button" class="button-menu-mobile open-left waves-effect">
            <i class="ion-navicon"></i>
        </button>
    </li>
    <li class="hide-phone list-inline-item app-search">
        <h3 class="page-title">{{ $title }}</h3>
    </li>
</ul>

<div class="clearfix"></div>
</nav>

</div>
<!-- Top Bar End -->

<!-- ==================
     PAGE CONTENT START
     ================== -->
<div class="page-content-wrapper">

    <div class="container-fluid">

        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">
                    
                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns">
                            <table id="datatable"  class="table table-striped table-bordered data-table"
                                    cellspacing="0"
                                    width="100%">
                                <thead>
                                <tr>
                                    <th>INVOICE NO</th>
                                    <th>CUSTOMER</th>
                                    <th>DATE</th>
                                    <th>PAYMENT TYPE</th>
                                    <th style="text-align: right">PAID</th>
                                    <th style="text-align: right">BALANCE</th>
                                    <th>OPTION</th>
                                </tr>
                                </thead>

                                <tbody>
                               
                                    @if(count($invoiceDetails)!=0)
                                     
                                    @foreach($invoiceDetails as $invoiceDetail)
                                        <tr>
                                            <td>{{ str_pad($invoiceDetail->idinvoice,5,'0',STR_PAD_LEFT) }}</td>
                                            <?php
                                                $customer=\App\User::find($invoiceDetail->customer);
                                            ?>
                                            <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                                            <td>{{$invoiceDetail->date}}</td>
                                            <td>{{$invoiceDetail->payment_type}}</td>
                                             <td style="text-align: right">{{ number_format($invoiceDetail->paid,2) }}</td>
                                             <td style="text-align: right">{{ number_format($invoiceDetail->balance,2) }}</td>
                                           
                                             
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-success waves-effect btn-sm dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        Option
                                                    </button>
                                                    <div class="dropdown-menu"
                                                         aria-labelledby="dropdownMenuButton">
                                                        <a href="#" class="dropdown-item" data-toggle="modal"
                                                           data-id="{{$invoiceDetail->idinvoice}}" id="invoiceId"
                                                           data-target="#viewGrn">View Items</i>
                                                        </a>
                                                        <a href="#" class="dropdown-item" data-toggle="modal"
                                                           data-id="{{$invoiceDetail->idinvoice}}" id="masterId"
                                                           data-target="#viewMore">print</i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                           
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--view irems-->
<div class="modal fade" id="viewGrn" tabindex="-1"
     role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">View Products</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                <table class="table table-striped table-bordered"
                                       cellspacing="0"
                                       width="100%">
                                    <thead>
                                    <tr>
                                        <th>PRODUCT</th>
                                        <th>QTY</th>
                                     
                                    </tr>
                                    </thead>
                                    <tbody id="viewItem">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes/footer_start')

<!-- Plugins js -->
<script src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"
        type="text/javascript"></script>

<!-- Plugins Init js -->
<script src="{{ URL::asset('assets/pages/form-advanced.js')}}"></script>

<!-- Required datatable js -->
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/sweet-alert.init.js')}}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('assets/pages/datatables.init.js')}}"></script>

<!-- Parsley js -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-notify.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.notify.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    $(document).on('focus', ':input', function () {
        $(this).attr('autocomplete', 'off');
    });
    $('.modal').on('hidden.bs.modal', function () {
        $('#errorAlert').hide();
        $('#errorAlert').html('');
        $('#errorAlert1').hide();
        $('#errorAlert1').html('');
        $('input').val('');
        $(".select2").val('').trigger('change');
    });
    function adMethod(dataID, tableName) {

        $.post('activateDeactivate', {id: dataID, table: tableName}, function (data) {

        });
    }
    $(document).on("wheel", "input[type=number]", function (e) {
        $(this).blur();
    });

    $(document).on('click', '#invoiceId', function () {
        var invId = $(this).data("id");
      
        $.post('getInvoiceItems', {invId: invId}, function (data) {
            $('#viewItem').html(data.tableData);
        });
    });


    $(document).on('click', '#masterId', function () {
        var masterId = $(this).data("id");

        $.post('getMoreByGrnID', {masterId: masterId}, function (data) {
            $('#viewMoreArea').html(data.tableData);
        });
    });
    $(document).on('focus', ':input', function () {
        $(this).attr('autocomplete', 'off');
    });
</script>


@include('includes.footer_end')