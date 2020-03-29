<?php $this->load->view('includes/header_1'); ?>

<div id="viewBaptismalRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/baptismal_req'); ?>
</div>

<div id="viewCalendars" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Change Password</h4>
            </div>
            <div class="modal-body">
                <?php $this->load->view('home/calendar')?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Close Window</button>
                <button type="button" class="btn btn-primary btnPasswordSave">Yes, Save Changes</button>
            </div>
        </div>
    </div>
</div>

<div id="viewBaptismalRecords" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Baptismal Records</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-nomargin table-bordered baptismalTable" id="baptismalTable">
                    <thead>   
                        <tr>
                            <th>Applicants</th>
                            <th>Display</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach(@$baptismals as $baptismal) { ?>
                        <tr rel="<?=@$baptismal['baptism_id'];?>">
                            <td><?=@$baptismal['FULLNAME'];?></td>
                            <td style="width: 95px;">
                                <span class="hidden fnameTB"><?=@$baptismal['fname'];?></span>
                                <span class="hidden mnameTB"><?=@$baptismal['mname'];?></span></span>
                                <span class="hidden lnameTB"><?=@$baptismal['lname'];?></span>
                                <span class="hidden dateTobaptiseTB"><?=@$baptismal['dateTobaptise'];?></span>
                                <span class="hidden timeToBaptiseTB"><?=@$baptismal['timeToBaptise'];?></span>
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
                                <a class="btn btn-orange btn-small btnView" data-dismiss="modal"><i class="glyphicon-list"></i> Details..</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <br>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close Window</button>
            </div>
        </div>
    </div>
</div>

<div id="content" class="container-fluid nav-hidden" style="margin-top: -20px;">
    <div id="main">
        <div class="container-fluid">
            <div class="page-header">
               <div class="pull-left"><h3 style="color:dodgerblue;"><i class="glyphicon glyphicon-more_items"></i> Events Services</h3></div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-title" style="margin-top: -4px;">
                            <h3>
                                Baptismal
                            </h3>
                            <div class="pull-right">
                                <h3>
                                    <a href="#ClearEvent" id="btnClearEvent">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </h3>
                                <h3>
                                    <a href="#viewBaptismalRecords" data-toggle="modal" id="btnNotifyEvent">
                                        <i class="fa fa-database"></i>
                                    </a>
                                </h3>
                                <span class="label label-lightred count" id="getNotif1" style="border-radius: 10px;"></span>
                            </div>
                            <div class="pull-right" id="eventReqToggle">
                                <h3 style="margin-top: 0px;"><a href="#viewBaptismalRequirements" data-toggle="modal"><i class="glyphicon-circle_question_mark"></i></a></h3>
                            </div>
                        </div>
                        <div class="box-content nopadding">
                            <form method="POST" class='form-horizontal form-wizard wizard-vertical resetForm' id="ssss">
                                <div class="step" id="firstStep">
                                    <ul class="wizard-steps steps-2">
                                        <li class='active'>
                                            <div class="single-step">
                                                <span class="title">1</span>
                                                <span clas0s="circle">
                                                    <span class="active"></span>
                                                </span>
                                                <span class="description">
                                                    Personal Information
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-step">
                                                <span class="title">2</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Event Information
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-content">
                                        <!-- <div class="col-sm-6"> -->
                                            <div class="row">
                                                <div class="col-sm-10 hidden">
                                                    <div class="form-group">
                                                        <input type="text" name="tran_id" class="form-control tran_id RequiredField txtProfile" disabled="true" value="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 hidden">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control baptism_id RequiredField txtProfile" disabled="true" value="">
                                                    </div>
                                                </div>
                                                <span class="operation hidden"></span>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="FirstName" class="control-label">First Name:</label>
                                                        <input type="text" id="fname" name="fname" id="" placeholder="First Name" class="form-control fname RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="MI" class="control-label">Middle Initial</label>
                                                        <input type="text" id="textfield" name="mname" id="" placeholder="Middle Initial" class="form-control mname RequiredField txtProfile" required="required" data-rule-minlength="1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group Name">
                                                        <label for="LastName" class="control-label">Last Name:</label>
                                                        <input type="text" id="lname" name="lname" id="" placeholder="Last Name" class="form-control lname RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Birth Date:</label>
                                                        <input type="date" name="birthdate" id="birthdate" placeholder="Birth Date" class="form-control birthdate RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Birth Place:</label>
                                                        <input type="text" name="" id="textfield" placeholder="Birth Place" class="form-control birthplace RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Father's Name:</label>
                                                        <input type="text" name="" id="textfield" placeholder="Father's Name" class="form-control father RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Father's Birth Place:</label>
                                                        <input type="text" name="father_birthplace" id="textfield" placeholder="Father's Birth Place" class="form-control father_birthplace RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Mother's Maiden Name:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Mother's Name" class="form-control mother RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Mother's Birth Place:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Mother's Birth Place" class="form-control mother_birthplace RequiredField" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Marriage:</label><br>
                                                        <select class="form-control marriage chosen-select" required="required">
                                                            <option selected="selected" value="">Select Marriage Status
                                                            </option>
                                                            <option value="Catholic Church">Catholic Church</option>
                                                            <option value="Huwes">Huwes</option>
                                                            <option value="Not Marriage">Not Marriage</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-7 hidden">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Cellphone no.</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">+(63) - 0</span>
                                                            <input type="number" name="mobile_no" id="textfield" placeholder="900000000" class="form-control mobile_no RequiredField txtProfile" required="required" data-rule-minlength="10" data-rule-maxlength="10" min="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 hidden">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">E-m ail:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="E-mail" class="form-control email RequiredField txtProfile" required="required" value="csdserver101@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Address:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control address RequiredField txtProfile" required="required" value="Address ng mga magulang" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div><!-- form-content -->
                                </div>
                                <div class="step" id="secondStep">
                                    <ul class="wizard-steps steps-2">
                                        <li>
                                            <div class="single-step">
                                                <span class="title">1</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Personal Information
                                                </span>
                                            </div>
                                        </li>
                                        <li class='active'>
                                            <div class="single-step">
                                                <span class="title">
                                                    2</span>
                                                <span class="circle">
                                                    <span class="active"></span>
                                                </span>
                                                <span class="description">
                                                    Event Information
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-content">
                                        <!-- <div class="col-sm-6"> -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Date of Baptism:</label>
                                                        <input type="date" name="dateTobaptise" id="dateTobaptise" placeholder="Date of Baptism" class="form-control dateTobaptise RequiredField txtProfile" required="required">
                                                        <input type="date" class="form-control dateTobaptise_1 hidden">
                                                        <input type="hidden" class="form-control eventTime_1 hidden">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <span id="dayIndex hidden"></span>
                                                    <div class="form-group" id="dayName0">
                                                        <label for="textfield" class="control-label">Time of Event:</label>
                                                        <select class="form-control chosen-select eventTime">
                                                            <option selected="selected" value="">Select Event Time
                                                            </option>
                                                            <option value="08:00">08:00 am</option>
                                                            <option value="08:30">08:30 am</option>
                                                            <option value="09:00">09:00 am</option>
                                                            <option value="09:30">09:30 am</option>
                                                            <option value="10:00">10:00 am</option>
                                                            <option value="10:30">10:30 am</option>
                                                            <option value="11:30">11:30 am</option>
                                                            <option value="13:00">01:00 pm</option>
                                                            <option value="13:30">01:30 pm</option>
                                                            <option value="14:00">02:00 pm</option>
                                                            <option value="14:30">02:00 pm</option>
                                                            <option value="15:00">03:00 pm</option>
                                                            <option value="15:30">03:30 pm</option>
                                                            <option value="16:00">04:00 pm</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="dayName1">
                                                        <label for="textfield" class="control-label">Time of Event:</label>
                                                        <select class="form-control cus_form eventTime chosen-select">
                                                            <option selected="selected" value="">Select Event Time
                                                            </option>
                                                            <option value="10:00">10:00 am</option>
                                                            <option value="11:00">11:00 am</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 hidden">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Name Of Informant:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Name Of Informant" class="form-control Appointedby RequiredField txtProfile" required="required" value="Pangalan ng Informant/Nag Proseso ng Online Reservation">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">God Father:</label>
                                                        <input type="text" name="GodFather" id="textfield" placeholder="God Father" class="form-control GodFather">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">GodFather Address:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control GodFather_bplace">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">God Mother:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="God Mother" class="form-control GodMother">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">GodMother Address:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control GodMother_bplace">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Additional Father</label>
                                                         <textarea name="additional_GodFather" placeholder="Additional GodFather (Line by line to recognize...)" class="form-control additional_GodFather RequiredField txtProfile" id="ninong"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label">Additional Godmother</label>
                                                        <textarea name="additional_GodMother" placeholder="Additional GodMother (Line by line to recognize...)" class="form-control additional_GodMother RequiredField txtProfile" id="ninang"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions pull-right"> 
                                                    <button type="button" class="btn btn-darkblue btnAddSave" id="btnAddSave"><i class="fa fa-hdd-o"></i> Save</button>
                                                    <button type="button" class="btn btn-darkblue" id="btnUpdateSave"><i class="fa fa-hdd-o"></i> Update Changes</button>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <h5 class="text-center" id="add_error" style="color: #ff0000;"></h5>
                                <div class="form-actions">
                                    <button type="reset" class="btn btn-default"" id="back">Back</button>
                                    <button type="submit" class="btn btn-primary"" id="Next">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-style" id="eventReqHide">
                        <div class="box">
                            <div class="box-title">
                                <h3 style="color: red;"><i class="glyphicon-circle_question_mark"></i> Planning for Baptismal?</h3>
                            </div>
                            <div class="box-content">
                                <div class="panel-group" id="ac4">
                                    <div class="panel panel-default blue">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#c11" data-toggle="collapse" data-parent="#ac4">
                                                    <b>Step 1:</b> Reserve for particular date and Time
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="c11" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                Choose a date when you want your child to be baptized.
                                                <hr>
                                                <ul>
                                                    <li>  Monday - Saturday: From 8:00 AM to 4:00 PM</li>
                                                    <li>  Sunday Baptism: 10:00 AM and 11:00 AM only</li>
                                                </ul> 
                                                <hr>
                                                <b>Take note:</b> Reservation is allowed 1 day before or earlier. We dont give approaval to those who want to reserve for the current day they want to reserve.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#c22" data-toggle="collapse" data-parent="#ac4">
                                                    <b>Step 2:</b> Bring the requirements
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="c22" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <hr> - Monday to Saturday service - P1000
                                                <hr> - Sunday service:
                                                <br>P500
                                                <br>&nbsp;P50
                                                <hr>
                                                If the Reservation appoved, Please visit your event records to check the event code image as a proof of transaction. Please bring it to our office together with the other requirements indicated Below :
                                                <hr>
                                                <ul>
                                                    <li>  Live Birth Certificate</li>
                                                    <li>  No Record of Baptism (Get the record from the Baranggay or from the Parish   
                                                          Office if the child is above 2yrs of age.)
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#c33" data-toggle="collapse" data-parent="#ac4">
                                                    <b>Step 3:</b> Attend the event
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="c33" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                You may now attend to the event. The event certificate will be given as the shrine notify you nin your email account.  Thank you and God Bless!! 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer_1'); ?>

<script type="text/javascript">
$(".chosen-select").chosen({
    disable_search_threshold: 10,
    search_contains: false,
    width: '100%'
});
    
$(document).ready(function() {
    showTimeProvider();
    getNotifyBaptismal();
    
    $('#btnUpdateSave').addClass('hidden');
    $('#btnClearEvent').addClass('hidden');

    $('.baptismalTable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        "sPaginationType": "full_numbers",
        "fnDrawCallback": function(oSettings) {
            $('.btnView').click(function(){
                $('#btnUpdateSave').removeClass('hidden');
                $('#btnClearEvent').removeClass('hidden');
                $('#btnAddSave').addClass('hidden');

                var el = $(this).closest('tr');
                var baptism_id = el.attr('rel');
                var fnameTB = el.find('.fnameTB').html();
                var mnameTB = el.find('.mnameTB').html();
                var lnameTB = el.find('.lnameTB').html();
                var dateTobaptiseTB = el.find('.dateTobaptiseTB').html();
                var timeToBaptiseTB = el.find('.timeToBaptiseTB').html();
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
                var tran_idTB = el.find('.tran_idTB').html();
                
                $('.operation').html("add");
                $('.baptism_id').val(baptism_id);
                $('.fname').val(fnameTB);
                $('.mname').val(mnameTB);
                $('.lname').val(lnameTB);
                $('.dateTobaptise').val(dateTobaptiseTB);
                $('.dateTobaptise_1').val(dateTobaptiseTB);
                $('.eventTime').val(timeToBaptiseTB);
                $('.eventTime_1').val(timeToBaptiseTB);
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
                $('.tran_id').val(tran_idTB);

                $('.chosen-select').trigger("chosen:updated");
                showTimeProvider();


            });
        }
    });

    $('#btnClearEvent').click(function() {
        newBaptismal();
        $('#btnClearEvent').addClass('hidden');
        $('#btnUpdateSave').addClass('hidden');
        $('#btnAddSave').removeClass('hidden');
        $('#back').click();
        $('.resetForm').trigger("reset");
        $('.chosen-select').trigger("chosen:updated");
    });

    $('#btnNotifyEvent').click(function() { 
        var status = "0";
        var notif = $('#getNotif1').html();
        var dataString = 'status='+ status;           
        if(notif =='0') {
            // alert('Please Give Valid Details');
        } else {
            var status = "0";
            var dataString = 'status='+ status;           
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>events_reg/displayNUpdatenotificationBaptismal/",
                cache: false,  
                data: dataString,
                success: function(data){
                    getNotifyBaptismal();
                }
            }); 
        } return;
    });

    $('#dateTobaptise').on('change', function(){
        showTimeProvider();
        $('.chosen-select').trigger("chosen:updated");
    }); 
         
    // for all special character 
    $("#fname, #mname, #lname, .father, .mother, .GodFather, .GodMother, .additional_GodFather, .additional_GodMother").bind("keypress", function (event) {
        if (event.charCode!=0) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    
    $( "#fname" ).focusout(function() {
        var fname = $('#fname').val();
        if (fname <= 1 ) {
            // alert('Please provide atleast 2 character');
        }        
    });

    // for all copy paste special character
    $(document).on("keyup", "#fname, #mname", function () {
        $("#fname").val($("#fname").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
        $("#mname").val($("#mname").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
        $("#lname").val($("#lname").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
    }); 

    $('.btnAddSave').click(function(){
        showTimeProvider();

        var fname = $('.fname').val();
        // var mname = $('.mname').val();
        var mname = $(".mname").val().charAt(0);
        var lname = $('.lname').val();
        var dateTobaptise = $('.dateTobaptise').val();
        var eventTime = $('.eventTime').val();
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
        var dayIndex = $('#dayIndex').val();
        
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
        // console.log(dayIndex);
        if (dayIndex == "0") {
            $("#dayName0").removeClass('hidden');
            $("#dayName1").addClass('hidden');
            total_ninong = total_ninong * 50;
            total_ninang = total_ninang * 50;

            var total_ninongNninang;
            total_ninongNninang = total_ninong + total_ninang;
            var compute;
            var sunday = 500;
            amount = total_ninongNninang + sunday;
        } else if(dayIndex >= "1") {
            $("#dayName0").addClass('hidden');
            $("#dayName1").removeClass('hidden');
            amount = "1000";
        }

        if(fname && mname && lname && dateTobaptise && eventTime && birthdate && birthplace && father && father_birthplace && mother && mother_birthplace && address && marriage && GodFather && GodMother) {
            var url = "<?=base_url();?>events_reg/addBaptism";
            var param = {
                'fname'                 : fname,
                'mname'                 : mname,
                'lname'                 : lname,
                'dateTobaptise'         : dateTobaptise,
                'eventTime'             : eventTime,
                'birthdate'             : birthdate,
                'birthplace'            : birthplace,
                'father'                : father,
                'father_birthplace'     : father_birthplace,
                'mother'                : mother,
                'mother_birthplace'     : mother_birthplace,
                'address'               : address,
                'mobile_no'             : mobile_no,
                'email'                 : email,
                'marriage'              : marriage,
                'Appointedby'           : Appointedby,
                'GodFather'             : GodFather,
                'GodFather_bplace'      : GodFather_bplace,
                'GodMother'             : GodMother,
                'GodMother_bplace'      : GodMother_bplace,
                'additional_GodFather'  : additional_GodFather,
                'additional_GodMother'  : additional_GodMother,
                'tran_id'               : tran_id,
                'amount'                : amount,
                'dayIndex'              : dayIndex
            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                } else {  
                    window.location="<?=base_url();?>redirect/baptismal_reg";
                }
            });
        } else {
            $('#add_error').html('Sorry, Please fill all necessary information.');
        }
    });

    $('#btnUpdateSave').click(function() { 
        showTimeProvider();

        var baptism_id = $('.baptism_id').val();
        var fname = $('.fname').val();
        var mname = $('.mname').val();
        var lname = $('.lname').val();
        var dateTobaptise = $('.dateTobaptise').val();
        var dateTobaptise_1 = $('.dateTobaptise_1').val();
        console.log(dateTobaptise_1);
        var eventTime = $('.eventTime').val();
        var eventTime_1 = $('.eventTime_1').val();
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
        var dayIndex = $('#dayIndex').val();
        var tran_id = $('.tran_id').val();

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
            $("#dayName0").removeClass('hidden');
            $("#dayName1").addClass('hidden');
            total_ninong = total_ninong * 50;
            total_ninang = total_ninang * 50;

            var total_ninongNninang;
            total_ninongNninang = total_ninong + total_ninang;
            var compute;
            var sunday = 500;
            amount = total_ninongNninang + sunday;
        } else if(dayIndex >= "1") {
            $("#dayName0").addClass('hidden');
            $("#dayName1").removeClass('hidden');
            amount = "1000";
        }
        if(fname && mname && lname && dateTobaptise && eventTime && birthdate && birthplace && father && father_birthplace && mother && mother_birthplace && address && marriage && GodFather && GodMother) {
            var url = "<?=base_url();?>events_reg/editBaptismal";
            var param = {
                'baptism_id'            : baptism_id,
                'fname'                 : fname,
                'mname'                 : mname,
                'lname'                 : lname,
                'dateTobaptise'         : dateTobaptise,
                'dateTobaptise_1'       : dateTobaptise_1,
                'eventTime'             : eventTime,
                'eventTime_1'           : eventTime_1,
                'birthdate'             : birthdate,
                'birthplace'            : birthplace,
                'father'                : father,
                'father_birthplace'     : father_birthplace,
                'mother'                : mother,
                'mother_birthplace'     : mother_birthplace,
                'address'               : address,
                'mobile_no'             : mobile_no,
                'email'                 : email,
                'marriage'              : marriage,
                'Appointedby'           : Appointedby,
                'GodFather'             : GodFather,
                'GodFather_bplace'      : GodFather_bplace,
                'GodMother'             : GodMother,
                'GodMother_bplace'      : GodMother_bplace,
                'additional_GodFather'  : additional_GodFather,
                'additional_GodMother'  : additional_GodMother,
                'tran_id'               : tran_id,
                'amount'                : amount,
                'dayIndex'              : dayIndex
            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                } else {  
                    window.location="<?=base_url();?>redirect/baptismal_reg";
                }
            });
        } else {
             $('#add_error').html('Sorry, Please fill all necessary information.');
        }
    });

});

function validateAmount(elem) {
    var regex = /\d*\.?\d?\d?/g;

    elem.value = regex.exec(elem.value);
}

function randomStringNew() {
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTU VWXTZabcdefghiklmnopqrstuvwxyz";
    var string_length = 12;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
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

function getNotifyBaptismal(value) {

    $.ajax({
        url: '<?php echo base_url();?>events_reg/Baptismal_Notif/',
        type: 'POST',
        error: function() {
            
        },
        success: function(data) {
            $('#getNotif1').html(data);
            var notif = data
            // console.log(data);
            if (notif == '0') {
                $('#getNotif1').remove(); 
            } else {
                $('#getNotif1').show(); 
            }

        }   
    });
}

function showTimeProvider() {
    var dateTobaptise = $('.dateTobaptise').val();
    today = new Date(dateTobaptise);
    dayIndex = today.getDay()
    if (dayIndex == "0") {
        $("#dayName0").addClass('hidden');
        $("#dayName1").removeClass('hidden');
        $('#dayIndex').html(dayIndex);
    } else {
        $("#dayName0").removeClass('hidden');
        $("#dayName1").addClass('hidden');
        $('#dayIndex').html(dayIndex);
    }
}    


</script>
