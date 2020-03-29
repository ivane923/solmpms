<?php $this->load->view('common/header'); ?>

<script src="<?=base_url();?>js/js/jquery.min.js"></script>
<script src="<?=base_url();?>js/js/instascan.min.js"></script>

<div id="viewCamera" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title modal-title-cus" id="myModalLabel"><i class="glyphicon glyphicon-camera"></i> QR Scanner</h4>
            </div>
            <div class="modal-body">
                <video id="preview" style="height: 100%; width: 100%"></video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="viewTransactionModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?=@$title;?> Detail</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="get" class="form-vertical" name="randform">
                    <center><span id="add_error" style="color: #ff0000;"></span></center>
                    <div class="form-group">
                       <div class="row">
                            <center><img src="" width="200px" height="200px" alt="" id="imgQR"></center>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" name="tran_id" class="form-control tran_id RequiredField" disabled="true" value="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" name="payment_id" class="form-control payment_id RequiredField" disabled="true" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="events" class="control-label">Name of Event</label>
                                    <input type="text" name="events" id="" placeholder="Events" class="form-control events RequiredField" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="applicant_name" class="control-label">Applicant</label>
                                    <input type="text" name="applicant_name" id="" placeholder="Applicant" class="form-control applicant_name RequiredField" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="informant" class="control-label">Informant</label>
                                    <input type="text" name="informant" id="" placeholder="Informant" class="form-control informant RequiredField" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="informant" class="control-label">Amount</label>
                                    <input type="text" name="amount" id="" placeholder="Amount" class="form-control amount RequiredField" required="required">
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cash" class="control-label">Cash</label>
                                    <input type="text" name="cash" id="" placeholder="Cash" class="form-control cash RequiredField" required="required">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnEditSave">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<div id="content" class="container-fluid nav-hidden">
    <div>
        <!-- <div class="container-fluid"> -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box box-color box-bordered green">
                                    <div class="box-title">
                                        <h3>
                                            <i class="fa fa-table"></i>
                                            List of Records
                                        </h3>
                                        <div class="actions">
                                            <a href="#viewCamera" data-toggle="modal" class="btn btn-mini content-refresh" id="openCam">
                                                <i class="fa fa-camera"></i>
                                            </a>
                                        </div>
                                    </div>
                                   <div class="box-content nopadding" style="overflow-x:auto;"> 
                                         <table class="table table-hover table-nomargin table-bordered deductionTable" id="deductionTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date Added</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach(@$transactions as $transaction) { ?>
                                                <tr rel="<?=@$transaction['payment_id'];?>">
                                                    <td class="applicant_nameTD"><?=@$transaction['applicant_name'];?></td>
                                                    <td class="date_addedTD"><?=date('m/d/Y', strtotime(@$transaction['date_added']));?></td>
                                                    <td>
                                                        <span class="hidden eventsTD"><?=@$transaction['events'];?></span>
                                                        <span class="hidden informantTD"><?=@$transaction['informant'];?></span>
                                                        <span class="hidden amountTD"><?=@$transaction['payment_amount'];?></span>
                                                        <span class="hidden cashTD"><?=@$transaction['cash'];?></span>
                                                        <span class="hidden tran_idTD"><?=@$transaction['tran_id'];?></span>
                                                        <span class="hidden qrcode_imageTD"><?=@$transaction['qrcode_image'];?></span>
                                                        <a a href="#viewTransactionModal" data-toggle="modal" class="btn btn-orange btn-small btnView"><i class="glyphicon-list"></i> View Details</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
<script type="text/javascript">
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
scanner.addListener('scan', function (content) {
    // alert(content);
    $('#myInput').val(content);
});
$('#openCam').click(function(){
    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
      }).catch(function (e) {
      console.error(e);
    });
});
$(document).ready(function() {

    $('.deductionTable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        "searching": true,
        "sPaginationType": "full_numbers",
        "fnDrawCallback": function(oSettings) {

            $('.btnView').click(function() {
                var el = $(this).closest('tr');
                var id=el.attr('rel');
                var eventsTD = el.find('.eventsTD').html();
                var applicant_nameTD = el.find('.applicant_nameTD').html();
                var informantTD = el.find('.informantTD').html();
                var amountTD = el.find('.amountTD').html();
                var cashTD = el.find('.cashTD').html();
                var tran_idTD = el.find('.tran_idTD').html();
                var qrcode_imageTD = el.find('.qrcode_imageTD').html();
            
                console.log(id, eventsTD, applicant_nameTD, informantTD, amountTD, cashTD, qrcode_imageTD);
                $('.payment_id').val(id);
                $('.events').val(eventsTD);
                $('.applicant_name').val(applicant_nameTD);
                $('.informant').val(informantTD);
                $('.amount').val(amountTD);
                $('.cash').val(cashTD);
                $('.tran_id').val(tran_idTD);
                $('.qrcode_image').val(qrcode_imageTD);
                $('#imgQR').attr('src', qrcode_imageTD);
              
           });
            var table = $('.deductionTable').DataTable();
            // #myInput is a <input type="text"> element
            $('#myInput').on( 'keyup', function () {
            table.search( this.value ).draw();
            } );
        }

    });
    

    $('.btnEditSave').click(function(){        
        var payment_id = $('.payment_id').val();
        var cash = $('.cash').val();
        var amount = $('.amount').val();
        var change;
        change = cash - amount;
        var err;
        console.log(payment_id, cash);
        if(change >= 0) {
            var url = "<?=base_url();?>transaction/edit";
            var param = {
                'payment_id'    : payment_id,
                'cash'        : cash
            };
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>transaction";
                }
            });
        } else {
            $('#add_error').html('Please input the right amount');
        }
    });
});

</script>
