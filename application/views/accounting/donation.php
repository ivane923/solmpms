<?php $this->load->view('common/header'); ?>

<div id="viewDonationModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">More Detail</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="get" class="form-vertical" name="randform">
                    <div class="form-group">
                       <div class="row">
                            <div class="col-sm-2 hidden">
                                <div class="form-group">
                                    <input type="text" name="record_id" class="form-control record_id RequiredField" disabled="true" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="events" class="control-label">Name of Donator</label>
                                    <input type="text" name="donator" id="" placeholder="Donators" class="form-control donators RequiredField" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="applicant_name" class="control-label">Address</label>
                                    <input type="text" name="address" id="" placeholder="Address" class="form-control address RequiredField" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="informant" class="control-label">Mobile No.</label>
                                    <input type="text" name="mobile_no" id="" placeholder="Mobile No" class="form-control mobile_no RequiredField" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="text" name="email" id="" placeholder="Email" class="form-control email RequiredField" required="required">
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="amount" class="control-label">Amount</label>
                                    <input type="text" name="amount" id="" placeholder="Cash" class="form-control amount RequiredField" required="required">
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
                                        <!-- <button type="button" onClick="randomStringNew();" class="btn btn-primary pull-right"><b>Add New <i class="glyphicon-circle_plus"></i></b></button> -->
                                        <!-- <form> <input type="text" name="" id="myInput"></form> -->
                                       
                                    </div>
                                   <div class="box-content nopadding" style="overflow-x:auto;">
                                        <table class="table table-hover table-nomargin table-striped table-bordered donationTable">
                                            <thead>
                                                <tr>
                                                    <th>Donators</th>
                                                    <th>Date Added</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach(@$donations as $donation) { ?>
                                                <tr rel="<?=@$donationTD['record_id'];?>">
                                                    <td class="donatorsTD"><?=@$donation['donators'];?></td>
                                                    <td class="date_addedTD"><?=date('m/d/Y', strtotime(@$donation['date_added']));?></td>
                                                    <td>
                                                    <span class="hidden addressTD"><?=@$donation['address'];?></span>
                                                    <span class="hidden mobile_noTD"><?=@$donation['mobile_no'];?></span>
                                                    <span class="hidden emailTD"><?=@$donation['email'];?></span>
                                                    <span class="hidden amountTD"><?=@$donation['amount'];?></span>
                                                    <a a href="#viewDonationModal" data-toggle="modal" class="btn btn-orange btn-small btnView"><i class="glyphicon-list"></i> View Details</a>
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
     $(document).ready(function() {

        $('.donationTable').dataTable({
            "aaSorting": [[ 1, "asc" ]],
            "searching": true,
            "sPaginationType": "full_numbers",
            "fnDrawCallback": function(oSettings) {

                $('.btnView').click(function() {
                    var el = $(this).closest('tr');
                    var id=el.attr('rel');
                    var donatorsTD = el.find('.donatorsTD').html();
                    var addressTD = el.find('.addressTD').html();
                    var mobile_noTD = el.find('.mobile_noTD').html();
                    var emailTD = el.find('.emailTD').html();
                    var amountTD = el.find('.amountTD').html();
                
                    $('.record_id').val(id);
                    $('.donators').val(donatorsTD);
                    $('.address').val(addressTD);
                    $('.mobile_no').val(mobile_noTD);
                    $('.email').val(emailTD);
                    $('.amount').val(amountTD);
               });
            }

        });
    });
</script>

