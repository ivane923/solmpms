
<?php $this->load->view('includes/header_0'); ?>

<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete User</h4>
            </div>
            <div class="modal-body">
                <span class="del_username hidden"></span>
                <p> Are you sure you want to remove user? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Close Window</button>
                <button type="button" class="btn btn-primary btnDeleteSave">Yes, Remove User</button>
            </div>
        </div>
    </div>  
</div>
<div id="viewDetailsModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-th-list"></i> Baptismal Information</h3>

            </div>
            <div class="modal-body">
                <div class="col-sm-12 hidden" id="viewME">
                    <div class="box">
                        <!-- <div class="box-content nopadding">
                         <div class="box box-bordered box-color"> -->
                        <div class="box-title">
                            <!-- <h3><i class="fa fa-th-list"></i>Baptismal Information</h3> -->
                        </div>
                        <div class="box-content padding">
                            <form action="#" method="get" class="form-vertical" name="randform">
                                <div class="row">
                                    <div class="col-sm-10 hidden">
                                        <div class="form-group">
                                            <input type="text" name="tran_id" class="form-control tran_id RequiredField txtProfile" disabled="true" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 hidden">
                                        <div class="form-group">
                                            <input type="text" name="baptism_id" class="form-control baptism_id RequiredField txtProfile" disabled="true" value="">
                                        </div>
                                    </div>
                                    <span class="operation hidden"></span>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="FirstName" class="control-label">First Name:</label>
                                            <input type="text" name="fname" id="" placeholder="First Name" class="form-control fname RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="MI" class="control-label">M.I:</label>
                                            <input type="text" name="mname" id="" placeholder="M.I" class="form-control mname RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group Name">
                                            <label for="LastName" class="control-label">Last Name:</label>
                                            <input type="text" name="lname" id="" placeholder="Last Name" class="form-control lname RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Date of Baptism:</label>
                                            <input type="date" name="dateTobaptise" id="" placeholder="Date of Baptism" class="form-control dateTobaptise RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Birth Date:</label>
                                            <input type="date" name="birthdate" id="textfield" placeholder="Birth Date" class="form-control birthdate RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Birth Place:</label>
                                            <input type="text" name="" id="textfield" placeholder="Birth Place" class="form-control birthplace RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Father's Name:</label>
                                            <input type="text" name="" id="textfield" placeholder="Father's Name" class="form-control father RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Father's Birth Place:</label>
                                            <input type="text" name="father_birthplace" id="textfield" placeholder="Father's Birth Place" class="form-control father_birthplace RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Mother's Maiden Name:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Mother's Name" class="form-control mother RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Mother's Birth Place:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Mother's Birth Place" class="form-control mother_birthplace RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Address:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control address RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Cellphone no.</label>
                                            <input type="text" name="mobile_no" id="textfield" placeholder="Cellphone no." class="form-control mobile_no RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">E-mail:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="E-mail" class="form-control email RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Marriage:</label>
                                            <!-- <input type="text" name="marriage" id="textfield" placeholder="Marriage" class="form-control marriage RequiredField txtProfile" required="required"> -->
                                            <select class="form-control cus_form marriage RequiredField txtProfile chosen-select" name="table">
                                                <option selected="selected" value="">Select Status
                                                </option>
                                                <option value="Catholic Church">Catholic Church</option>
                                                <option value="Huwes">Huwes</option>
                                                <option value="Not Marriage">Not Marriage</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Name Of Informant:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Name Of Informant" class="form-control Appointedby RequiredField txtProfile" required="required">
                                        </div>
                                    </div>
                                </div>
                                <h4>Baptist Person Status</h4>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Attendance:</label>
                                            <select class="form-control cus_form attendance RequiredField txtProfile chosen-select" name="table">
                                                <option selected="selected" value="11:00am">Select Status
                                                </option>
                                                <option value="0">Absent</option>
                                                <option value="1">Present</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Doc. Status:
                                            </label>
                                            <select class="form-control cus_form doc_status RequiredField txtProfile chosen-select" name="table">
                                                <option selected="selected" value="11:00am">Select Status
                                                </option>
                                                <option value="0">Unready</option>
                                                <option value="1">Ready</option>
                                                <option value="2">Processed</option>
                                            </select>
                                        </div>
                                </div>
                                <h4>God Father and God Mother</h4>
                                <div class="">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">God Father:</label>
                                            <input type="text" name="GodFather" id="textfield" placeholder="God Father" class="form-control GodFather RequiredField txtProfile">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Address:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control GodFather_bplace RequiredField txtProfile">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">God Mother:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="God Mother" class="form-control GodMother RequiredField txtProfile">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Address:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control GodMother_bplace RequiredField txtProfile">
                                        </div>
                                    </div>
                                     <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Additional Father</label>
                                             <textarea name="additional_GodFather" placeholder="Additional GodFather" class="form-control additional_GodFather RequiredField txtProfile" id="ninong"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Additional Godmother</label>
                                            <textarea name="additional_GodMother" placeholder="Additional GodMother" class="form-control additional_GodMother RequiredField txtProfile" id="ninang"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Date Added</label>
                                             <input type="text" name="date_added" id="" placeholder="Date Added" class="form-control date_added RequiredField txtProfile" disabled="true" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Amount</label>
                                             <input type="text" name="amount" id="" placeholder="Amount" class="form-control amount RequiredField txtProfile" disabled="true" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <center><span id="add_error" style="color: #ff0000;"></span></center>
                                        </div>
                                    </div>
                                    <div class="form-actions pull-right"> 
                                        <button type="button" class="btn btn-darkblue btnAddSave"><i class="fa fa-hdd-o"></i> Save</button>
                                        <button type="button" class="btn btn-green btnUpdateSave"><i class="fa fa-hdd-o"></i> Update</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close Window</button>
            </div>
        </div>
    </div>  
</div>
<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left"><h1>Events / Baptismal</h1></div>
                <?php $this->load->view('includes/stats'); ?>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <div class="box">
                    <div class="box-title">
                        <h3>
                            <i class="fa fa-list"></i>
                            Events Management
                        </h3>
                        <a href="#addModal" data-toggle="modal">
                            <h3 class="pull-right" style="margin-right: 12px;">
                            </h3>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box box-color box-bordered green">
                                <div class="box-title">
                                    <h3>
                                        <i class="fa fa-table"></i>
                                        List of Records
                                    </h3>
                                    <!-- <h3 class="pull-right">
                                        <button type="button" class="btn btn-inverse"><i class="fa fa-edit"></i> Update All</button>
                                    </h3> -->
                                   <!--  <button type="button" onClick="randomStringNew();" class="btn btn-primary pull-right"><b>Add New <i class="glyphicon-circle_plus"></i></b></button> -->
                                  
                                </div>
                                <div class="box-content nopadding" style="overflow-x:auto;">
                                    <table class="table table-hover table-nomargin table-bordered baptismalTable" id="baptismalTable">
                                        <div class="col-sm-8 pull-right" style="margin-top: 15px;">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span id="date-label-from" class="date-label">From: </span>
                                                    <input class="date_range_filter date" type="text" id="datepicker_from" style="border: 1px solid gray" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span id="date-label-to" class="date-label" style="margin-left: 17px">To: </span>
                                                    <input class="date_range_filter date" type="text" id="datepicker_to" style="border: 1px solid gray" />
                                                </div>
                                            </div>
                                        </div>
                                        <thead>   
                                            <tr>
                                                <th>Name of Applicant</th>
                                                <th>Date of Baptism</th>
                                                <th>Attendance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach(@$baptismals as $baptismal) { ?>
                                            <tr rel="<?=@$baptismal['baptism_id'];?>">
                                                <td><?=@$baptismal['FULLNAME'];?></td>
                                                <!-- <td></td> -->
                                                <td class="date_addedTB"><?=@$baptismal['dateTobaptise'];?></td>
                                                <td>
                                                    <select id="<?=@$baptismal['baptism_id'];?>" class="form-control cus_form RequiredField txtProfile chosen-select cbstatus">
                                                        <?php if($baptismal['attendance'] == '0') {
                                                            echo "<option value='0' id='absent' selected='selected'>Absent</option>";
                                                            echo "<option value='1' id='present'>Present</option>";
                                                            echo "<option>Select</option>";
                                                        } else if($baptismal['attendance'] == '1') { 
                                                            echo "<option value='1' id='present' selected='selected'>Present</option>"; 
                                                            echo "<option value='0' id='absent'>Absent</option>"; 
                                                            echo "<option>Select</option>"; 
                                                        } else {
                                                            echo "<option selected='selected'>Select</option>"; 
                                                            echo "<option value='1' id='present'>Present</option>";
                                                            echo "<option value='0' id='absent'>Absent</option>"; 
                                                        } ?>
                                                    </select>
                                                </td>
                                                <td style="width: 95px;">
                                                    <span class="hidden fnameTB"><?=@$baptismal['fname'];?></span>
                                                    <span class="hidden mnameTB"><?=@$baptismal['mname'];?></span>
                                                    <span class="hidden lnameTB"><?=@$baptismal['lname'];?></span>
                                                    <span class="hidden dateTobaptiseTB"><?=@$baptismal['date_added'];?></span>
                                                    <span class="hidden mnameTB"><?=@$baptismal['mname'];?></span>
                                                    <span class="hidden birthdateTB"><?=@$baptismal['birthdate'];?></span>
                                                    <span class="hidden birthplaceTB"><?=@$baptismal['birthplace']?></span>
                                                    <span class="hidden fatherTB"><?=@$baptismal['father'];?></span>
                                                    <span class="hidden father_birthplaceTB"><?=@$baptismal['father_birthplace'];?></span>
                                                    <span class="hidden motherTB"><?=@$baptismal['father_birthplace'];?></span>
                                                    <span class="hidden mother_birthplaceTB"><?=@$baptismal['mother_birthplace'];?></span>
                                                    <span class="hidden addressTB"><?=@$baptismal['address'];?></span>
                                                    <span class="hidden tel_noTB"><?=@$baptismal['tel_no'];?></span>
                                                    <span class="hidden mobile_noTB"><?=@$baptismal['mobile_no'];?></span>
                                                    <span class="hidden emailTB"><?=@$baptismal['email'];?></span>
                                                    <span class="hidden marriageTB"><?=@$baptismal['marriage'];?></span>
                                                    <span class="hidden GodFatherTB"><?=@$baptismal['GodFather'];?></span>
                                                    <span class="hidden GodFather_bplaceTB"><?=@$baptismal['GodFather_bplace'];?></span>
                                                    <span class="hidden GodMotherTB"><?=@$baptismal['GodMother'];?></span>
                                                    <span class="hidden GodMother_bplaceTB"><?=@$baptismal['GodMother_bplace'];?></span>
                                                    <span class="hidden additional_GodFatherTB"><?=@$baptismal['additional_GodFather'];?></span>
                                                    <span class="hidden additional_GodMotherTB"><?=@$baptismal['additional_GodMother'];?></span>
                                                    <span class="hidden AppointedbyTB"><?=@$baptismal['Appointedby'];?></span>
                                                    <span class="hidden attendanceTB"><?=@$baptismal['attendance'];?></span>
                                                    <span class="hidden doc_statusTB"><?=@$baptismal['doc_status'];?></span>
                                                    <span class="hidden tran_idTB"><?=@$baptismal['tran_id'];?></span>
                                                    <a id="viewDetails" class="btn btn-orange btn-small btnView" href="#viewDetailsModal" data-toggle="modal"><i class="glyphicon-list"></i> Details</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- row -->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(".chosen-select").chosen({
    disable_search_threshold: 10,
    search_contains: true,
    width: '100%'
});

$(document).ready(function() {
    $('.baptismalTable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        "searching": false,
        paging:false,
        "sPaginationType": "full_numbers",
        "fnDrawCallback": function(oSettings) {
            var oTable = $('.baptismalTable').dataTable();
            $("#datepicker_from").datepicker({
                showOn: "button",
                buttonImage: "images/calendar.gif",
                buttonImageOnly: false,
                "onSelect": function(date) {
                  minDateFilter = new Date(date).getTime();
                  oTable.fnDraw();
                }
            }).keyup(function() {
                minDateFilter = new Date(this.value).getTime();
                oTable.fnDraw();
            });

            $("#datepicker_to").datepicker({
                showOn: "button",
                buttonImage: "images/calendar.gif",
                buttonImageOnly: false,
                "onSelect": function(date) {
                  maxDateFilter = new Date(date).getTime();
                  oTable.fnDraw();
                }
            }).keyup(function() {
                maxDateFilter = new Date(this.value).getTime();
                oTable.fnDraw();
            });

            // Date range filter
            minDateFilter = "";
            maxDateFilter = "";

            $.fn.dataTableExt.afnFiltering.push(function(oSettings, aData, iDataIndex) {
                if (typeof aData._date == 'undefined') {
                  aData._date = new Date(aData[1]).getTime();
                }

                if (minDateFilter && !isNaN(minDateFilter)) {
                  if (aData._date < minDateFilter) {
                    return false;
                  }
                }

                if (maxDateFilter && !isNaN(maxDateFilter)) {
                  if (aData._date > maxDateFilter) {
                    return false;
                  }
                }

                return true;
            });



            $('.btnView').click(function(){
                var el = $(this).closest('tr');
                var baptism_id = el.attr('rel');
                var fnameTB = el.find('.fnameTB').html();
                var mnameTB = el.find('.mnameTB').html();
                var lnameTB = el.find('.lnameTB').html();
                var dateTobaptiseTB = el.find('.dateTobaptiseTB').html();
                var birthdateTB = el.find('.birthdateTB').html();
                var birthplaceTB = el.find('.birthplaceTB').html();
                var fatherTB = el.find('.fatherTB').html();
                var father_birthplaceTB = el.find('.father_birthplaceTB').html();
                var motherTB = el.find('.motherTB').html();
                var mother_birthplaceTB = el.find('.mother_birthplaceTB').html();
                var addressTB = el.find('.addressTB').html();
                var tel_noTB = el.find('.tel_noTB').html();
                var mobile_noTB = el.find('.mobile_noTB').html();
                var emailTB = el.find('.emailTB').html();
                var marriageTB = el.find('.marriageTB').html();
                var GodFatherTB = el.find('.GodFatherTB').html();
                var GodFather_bplaceTB = el.find('.GodFather_bplaceTB').html();
                var GodMotherTB = el.find('.GodMotherTB').html();
                var GodMother_bplaceTB = el.find('.GodMother_bplaceTB').html();
                var additional_GodFatherTB = el.find('.additional_GodFatherTB').html();
                var additional_GodMotherTB = el.find('.additional_GodMotherTB').html();
                var AppointedbyTB = el.find('.AppointedbyTB').html();
                var attendanceTB = el.find('.attendanceTB').html();
                var doc_statusTB = el.find('.doc_statusTB').html();
                var date_addedTB = el.find('.date_addedTB').html();
                var tran_idTB = el.find('.tran_idTB').html();
           
                $('.operation').html("add");
                $('.baptism_id').html(baptism_id);
                $('.baptism_id').val(baptism_id);
                $('.fname').val(fnameTB);
                $('.mname').val(mnameTB);
                $('.lname').val(lnameTB);
                $('.dateTobaptise').val(dateTobaptiseTB);
                $('.birthdate').val(birthdateTB);
                $('.birthplace').val(birthplaceTB);
                $('.father').val(fatherTB);
                $('.father_birthplace').val(father_birthplaceTB);
                $('.mother').val(motherTB);
                $('.mother_birthplace').val(mother_birthplaceTB);
                $('.address').val(addressTB);
                $('.tel_no').val(tel_noTB);
                $('.mobile_no').val(mobile_noTB);
                $('.email').val(emailTB);
                $('.marriage').val(marriageTB);
                $('.GodFather').val(GodFatherTB);
                $('.GodFather_bplace').val(GodFather_bplaceTB);
                $('.GodMother').val(GodMotherTB);
                $('.GodMother_bplace').val(GodMother_bplaceTB);
                $('.additional_GodFather').val(additional_GodFatherTB);
                $('.additional_GodMother').val(additional_GodMotherTB);
                $('.Appointedby').val(AppointedbyTB);
                $('.attendance').val(attendanceTB);
                $('.doc_status').val(doc_statusTB);
                $('.date_added').val(date_addedTB);
                $('.tran_id').val(tran_idTB);

                $('.chosen-select').trigger("chosen:updated");
                // $('.fullname').val(lastname +', ' + firstname);
                // listUserDeduction();
                // listUserEarning()

            });
            <?php foreach(@$baptismals as $baptismal) { ?>
                $('#<?=@$baptismal['baptism_id'];?>').change(function()  {
                    var attendanceStatus = $('#<?=@$baptismal['baptism_id'];?>').val();
                    var el = $(this).closest('tr');
                    var baptism_id = el.attr('rel');
                    if (attendanceStatus == '0') {
                        console.log('Absent');
                        var url = "<?=base_url();?>baptismal/edit_status";
                        var param = {
                            'baptism_id'                  : baptism_id,
                            'attendance'            : attendanceStatus
                        }
                        $.post(url, param, function(data) {
                            if(data) {
                                $('#add_error').html(data);
                            }else {
                                // window.location="<?=base_url();?>baptismal";
                            }
                        });
                    } else if(attendanceStatus == '1') {
                        console.log('Present');
                        var url = "<?=base_url();?>baptismal/edit_status";
                        var param = {
                            'baptism_id'                  : baptism_id,
                            'attendance'            : attendanceStatus
                        }
                        $.post(url, param, function(data) {
                            if(data) {
                                $('#add_error').html(data);
                            }else {
                                // window.location="<?=base_url();?>baptismal";
                            }
                        });
                    }
                });
            <?php } ?>
        }
    });

    $('.btnQR').click(function(){
        var qrUname = $('.qrUname').val();
        var qrContent = $('.qrContent').val();

        // console.log(q22rUname,qrContent);
        if(qrUname) {
            var url = "<?=base_url();?>baptismal/generate_qr";
            var param = {
                'qrUsername'            : qrUname,
                'qrContent'             : qrContent
            }

            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>baptismal";
                }
            });
        } else {
            $('#add_error').html('Sorry, please fill in all required information.');
        }
    });
    $('#viewDetails').click(function(){
        $('#viewME').removeClass('hidden');
    });


    $('.btnAddSave').click(function(){
        var fname = $('.fname').val();
        var mname = $('.mname').val();
        var lname = $('.lname').val();
        var dateTobaptise = $('.dateTobaptise').val();
        var birthdate = $('.birthdate').val();
        var birthplace = $('.birthplace').val();
        var father = $('.father').val();
        var father_birthplace = $('.father_birthplace').val();
        var mother = $('.mother').val();
        var mother_birthplace = $('.mother_birthplace').val();
        var address = $('.address').val();
        var mobile_no = $('.mobile_no').val();
        var email = $('.email').val();
        var marriage = $('.marriage').val();
        var Appointedby = $('.Appointedby').val();
        var attendance = $('.attendance').val();
        var doc_status = $('.doc_status').val();
        var GodFather = $('.GodFather').val();
        var GodFather_bplace = $('.GodFather_bplace').val();
        var GodMother = $('.GodMother').val();
        var GodMother_bplace = $('.GodMother_bplace').val();
        var additional_GodFather = $('.additional_GodFather').val();
        var additional_GodMother = $('.additional_GodMother').val();
        var amount = $('.amount').val();
        
        randomstringSave();
        var tran_id = $('.tran_id').val();
        var err;

        var textGfather = $("#ninong").val();
        textGfather = textGfather.replace(/^\s*[\r\n]/gm, "");
        var lines = textGfather.split(/\r|\r\n|\n/);
        var countGfather = lines.length;
        var total_ninong;
        if (additional_GodFather == "") {
            total_ninong = 0;
        } else {
            total_ninong = countGfather;
        }
        var textGmather = $("#ninang").val();
        textGmather = textGmather.replace(/^\s*[\r\n]/gm, "");
        var lines = textGmather.split(/\r|\r\n|\n/);
        var countGmother = lines.length;
        var total_ninang;
        if (additional_GodMother == "") {
            total_ninang = 0;
        } else {
            total_ninang = countGmother;
        }

        today = new Date(dateTobaptise)
        dayIndex = today.getDay()
        if (dayIndex == "0") {
            total_ninong = total_ninong * 50;
            total_ninang = total_ninang * 50;

            var total_ninongNninang;
            total_ninongNninang = total_ninong + total_ninang;
            var compute;
            var sunday = 500;
            amount = total_ninongNninang + sunday;
        } else {
            amount = "1000";
        }

       if(fname && mname && lname && dateTobaptise && birthdate) {
            var url = "<?=base_url();?>baptismal/add";
            var param = {
                'fname'         : fname,
                'mname'         : mname,
                'lname'         : lname,
                'dateTobaptise' : dateTobaptise,
                'birthdate'     : birthdate,
                'birthplace'    : birthplace,
                'father'        : father,
                'father_birthplace'   : father_birthplace,
                'mother'        : mother,
                'mother_birthplace'   : mother_birthplace,
                'address'       : address,
                'mobile_no'     : mobile_no,
                'email'         : email,
                'marriage'      : marriage,
                'Appointedby'   : Appointedby,
                'attendance'    : attendance,
                'doc_status'    : doc_status,
                'GodFather'           : GodFather,
                'GodFather_bplace'    : GodFather_bplace,
                'GodMother'           : GodMother,
                'GodMother_bplace'    : GodMother_bplace,
                'additional_GodFather'    : additional_GodFather,
                'additional_GodMother'    : additional_GodMother,
                'tran_id'               :   tran_id,
                'amount'               :   amount
            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>baptismal";
                    // $(".baptismalTable").load(location.href+" .baptismalTable>*","");
                }
            });
        } else {
            $('#add_error').html('Sorry, Please fill in all required information.');
        }
    });

    $('.btnUpdateSave').click(function(){
        var baptism_id = $('.baptism_id').val();
        var fname = $('.fname').val();
        var mname = $('.mname').val();
        var lname = $('.lname').val();
        var dateTobaptise = $('.dateTobaptise').val();
        var birthdate = $('.birthdate').val();
        var birthplace = $('.birthplace').val();
        var father = $('.father').val();
        var father_birthplace = $('.father_birthplace').val();
        var mother = $('.mother').val();
        var mother_birthplace = $('.mother_birthplace').val();
        var address = $('.address').val();
        var mobile_no = $('.mobile_no').val();
        var email = $('.email').val();
        var marriage = $('.marriage').val();
        var Appointedby = $('.Appointedby').val();
        var attendance = $('.attendance').val();
        var doc_status = $('.doc_status').val();
        var GodFather = $('.GodFather').val();
        var GodFather_bplace = $('.GodFather_bplace').val();
        var GodMother = $('.GodMother').val();
        var GodMother_bplace = $('.GodMother_bplace').val();
        var additional_GodFather = $('.additional_GodFather').val();
        var additional_GodMother = $('.additional_GodMother').val();
        var tran_id = $('.tran_id').val();
        var err;

        var textGfather = $("#ninong").val();
        textGfather = textGfather.replace(/^\s*[\r\n]/gm, "");
        var lines = textGfather.split(/\r|\r\n|\n/);
        var countGfather = lines.length;
        var total_ninong;
        if (additional_GodFather == "") {
            total_ninong = 0;
        } else {
            total_ninong = countGfather;
        }
        var textGmather = $("#ninang").val();
        textGmather = textGmather.replace(/^\s*[\r\n]/gm, "");
        var lines = textGmather.split(/\r|\r\n|\n/);
        var countGmother = lines.length;
        var total_ninang;
        if (additional_GodMother == "") {
            total_ninang = 0;
        } else {
            total_ninang = countGmother;
        }

        today = new Date(dateTobaptise)
        dayIndex = today.getDay()
        if (dayIndex == "0") {
            total_ninong = total_ninong * 50;
            total_ninang = total_ninang * 50;

            var total_ninongNninang;
            total_ninongNninang = total_ninong + total_ninang;
            var compute;
            var sunday = 500;
            amount = total_ninongNninang + sunday;
        } else {
            amount = "1000";
        }
        
        console.log(baptism_id,tran_id);
        // console.log(fname,mname,lname,dateTobaptise,birthdate,birthplace,father,father_birthplace,mother,mother_birthplace,address,mobile_no,email,marriage,Appointedby,attendance,doc_status,GodFather,GodFather_bplace,GodMother,GodMother_bplace,Appointedby,additional_GodFather,additional_GodMother);
         // && mname && lname && dateTobaptise && birthdate && birthplace && father && father_birthplace && mother && mother_birthplace && address && mobile_no && email && marriage && Appointedby && attendance && doc_status && GodFather && GodFather_bplace && GodMother && GodMother_bplace && additional_GodFather && additional_GodMother
        if(fname && mname && lname && dateTobaptise && birthdate) {
            var url = "<?=base_url();?>baptismal/edit";
            var param = {
                'baptism_id'    : baptism_id,
                'fname'         : fname,
                'mname'         : mname,
                'lname'         : lname,
                'dateTobaptise' : dateTobaptise,
                'birthdate'     : birthdate,
                'birthplace'    : birthplace,
                'father'        : father,
                'father_birthplace'   : father_birthplace,
                'mother'        : mother,
                'mother_birthplace'   : mother_birthplace,
                'address'       : address,
                'mobile_no'     : mobile_no,
                'email'         : email,
                'marriage'      : marriage,
                'Appointedby'   : Appointedby,
                'attendance'    : attendance,
                'doc_status'    : doc_status,
                'GodFather'           : GodFather,
                'GodFather_bplace'    : GodFather_bplace,
                'GodMother'           : GodMother,
                'GodMother_bplace'    : GodMother_bplace,
                'additional_GodFather'    : additional_GodFather,
                'additional_GodMother'    : additional_GodMother,
                'tran_id'               :   tran_id,
                'amount'               :   amount
            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>baptismal";
                    // newBaptismal();                    
                    
                    // $("#baptismalTable").load(location.href+" #baptismalTable>*","");
                    // $('#baptismalTable').dataTable({
                    // "aaSorting": [[ 1, "asc" ]],
                    // "sPaginationType": "full_numbers",
                    // "fnDrawCallback": function(oSettings) {
                        
                    // }
                    // });
               }            
            });
        } else {
             $('#add_error').html('Sorry, Please fill in all required information.');
        }
    });

});

    function validateAmount(elem) {
        var regex = /\d*\.?\d?\d?/g;

        elem.value = regex.exec(elem.value);
    }

    function randomStringNew() {
        var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
        var string_length = 12;
        var randomstring = '';
        for (var i=0; i<string_length; i++) {
            var rnum = Math.floor(Math.random() * chars.length);
            randomstring += chars.substring(rnum,rnum+1);
        }
       
        // document.randform.tran_id.value = randomstring;
         newBaptismal();
         $('.tran_id').val(randomstring);
       
    }

    function randomstringSave() {
       var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghiklmnopqrstuvwxyz";
        var string_length = 12;
        var randomstring = '';
        for (var i=0; i<string_length; i++) {
            var rnum = Math.floor(Math.random() * chars.length);
            randomstring += chars.substring(rnum,rnum+1);
            $('.tran_id').val(randomstring);
        }
         $('.tran_id').val(randomstring);
    }
    function newBaptismal(){
        $('.operation').html("add");
        $('.txtProfile').val("");
        $('.fname').val("");
        $('.mname').val("");
        $('.lname').val("");
        $('.dateTobaptise').val("");
        $('.birthdate').val("");
        $('.birthplace').val("");
        $('.father').val("");
        $('.father_birthplace').val("");
        $('.mother').val("");
        $('.mother_birthplace').val("");
        $('.address').val("");
        $('.tel_no').val("");
        $('.mobile_no').val("");
        $('.email').val("");
        $('.marriage').val("");
        $('.GodFather').val("");
        $('.GodFather_bplace').val("");
        $('.GodMother').val("");
        $('.GodMother_bplace').val("");
        $('.additional_Godfather').val("");
        $('.additional_Godmother').val("");
        $('.Appointedby').val("");
        $('.attendance').val("");
        $('.doc_status').val("");
        $('.date_added').val("");

    }
</script>
 