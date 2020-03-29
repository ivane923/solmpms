<?php $this->load->view('includes/header_1'); ?>

<div id="viewDeathRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/death_req'); ?>
</div>

<div id="viewBaptismalRecords" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Death Records</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-nomargin table-bordered baptismalTable" id="baptismalTable">
                    <thead>   
                        <tr>
                            <th>Deceased</th>
                            <th>Display</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach(@$deaths as $death) { ?>
                        <tr rel="<?=@$death['ID'];?>">
                            <td><?=@$death['FULLNAME'];?></td>
                            <td style="width: 95px;">
                                <span class="hidden fnameTB"><?=@$death['fname'];?></span>
                                <span class="hidden mnameTB"><?=@$death['mname'];?></span></span>
                                <span class="hidden lnameTB"><?=@$death['lname'];?></span>
                                <span class="hidden date_deceasedTB"><?=@$death['date_deceased'];?></span>
                                <span class="hidden date_burialTB"><?=@$death['date_burial'];?></span>
                                <span class="hidden ageTB"><?=@$death['age'];?></span>
                                <span class="hidden civil_statusTB"><?=@$death['civil_status'];?></span>
                                <span class="hidden name_informantTB"><?=@$death['name_informant'];?></span>
                                <span class="hidden addressTB"><?=@$death['address'];?></span>
                                <span class="hidden sacramentTB"><?=@$death['sacrament'];?></span>
                                <span class="hidden death_causedTB"><?=@$death['death_caused'];?></span>
                                <span class="hidden place_burialTB"><?=@$death['place_burial'];?></span>
                                <span class="hidden administer_priestTB"><?=@$death['administer_priest'];?></span>
                                <span class="hidden date_filingTB"><?=@$death['date_filing'];?></span>
                                <span class="hidden eventTimeTB"><?=@$death['eventTime'];?></span>
                                
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

<div id="content" class="container-fluid" style="margin-top: -20px;">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left"><h3 style="color:dodgerblue;"><i class="glyphicon glyphicon-more_items"></i> Events Services</h3></div>  
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-title" style="margin-top: -4px;">
                            <h3> Death </h3>

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
                                <span class="label label-lightred count" id="getNotif" style="border-radius: 10px;"></span>    
                            </div>

                            <div class="pull-right" id="eventReqToggle">
                                <h3 style="margin-top: 0px;"><a href="#viewDeathRequirements" data-toggle="modal"><i class="glyphicon-circle_question_mark"></i></a></h3>
                            </div>
                        </div>
                        <div class="box-content nopadding"> 
                            <form method="POST" class='form-horizontal form-wizard wizard-vertical resetForm' id="ssss">
                                <div class="step" id="firstStep">
                                    <ul class="wizard-steps steps-2">
                                        <li class='active'>
                                            <div class="single-step">
                                                <span class="title">1</span>
                                                <span class="circle">
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
                                        <div class="row">
                                            <div class="col-sm-2 hidden">
                                                <div class="form-group">
                                                    <input type="text" name="death_id" class="form-control death_id RequiredField txtProfile" disabled="true" value="">
                                                </div>
                                            </div>
                                            <span class="operation hidden"></span>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="FirstName" class="control-label">First Name:</label>
                                                    <input type="text" name="fname" id="" placeholder="First Name" class="form-control fname RequiredField txtProfile" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">     
                                                <div class="form-group">
                                                    <label for="MI" class="control-label">Middle Name</label>
                                                    <input type="text" name="mname" id="" placeholder="Enter middle name" class="form-control mname RequiredField txtProfile" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group Name">
                                                    <label for="LastName" class="control-label">Last Name:</label>
                                                    <input type="text" name="lname" id="" placeholder="Last Name" class="form-control lname RequiredField txtProfile" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Age year:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Enter age year" class="form-control age" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" max="200" min="0" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Age month:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Enter age Month" class="form-control month_old" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" max="12" min="1" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12"> 
                                               <div class="form-group">
                                                    <label for="textfield" class="control-label">Civil Status:
                                                    </label>
                                                    <select class="form-control cus_form civil_status chosen-select" name="table">
                                                        <option selected="selected">Select Civil Status:
                                                        </option>
                                                        <option value="Married">Married</option>
                                                        <option value="Single">Single</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Address:</label>
                                                    <textarea name="textfield" id="textfield" placeholder="Address" class="form-control address " required="required" style="resize: none;">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Date Deceased:</label>
                                                    <input type="date" name="death_deceased" id="textfield" placeholder="Date Deceased" class="form-control date_deceased" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Date Burial:</label>
                                                    <input type="date" name="date_burial" id="textfield" placeholder="Date Burial" class="form-control date_burial RequiredField" required="required">
                                                    
                                                    <input type="date" name="date_burial" id="textfield" placeholder="Date Burial" class="form-control date_burial_1 hidden">
                                                    <input type="hidden" name="date_burial" id="textfield" placeholder="Date Burial" class="form-control eventTime_1 hidden">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Arrival Time:</label>
                                                    <select class="form-control eventTime chosen-select">
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
                                            </div>
                                            <div class="col-sm-12 hidden">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Name Of Informant:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Name Of Informant" class="form-control name_informant RequiredField txtProfile" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Sacrament:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Sacrament" class="form-control sacrament " required="required" value="Death Blessing">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Death Caused:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Death Caused" class="form-control death_caused" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Place of Burial:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Place of Burial" class="form-control place_burial RequiredField" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 hidden">
                                                <div class="form-group">
                                                    <label for="textfield" class="control-label">Administer Priest:</label>
                                                    <input type="text" name="textfield" id="textfield" placeholder="Administer Priest" class="form-control administer_priest RequiredField" required="required">
                                                </div>
                                            </div>
                                            <div class="form-actions pull-right"> 
                                                <button type="button" class="btn btn-darkblue btnAddSave" id="btnAddSave"><i class="fa fa-hdd-o"></i> Save</button>
                                                <button type="button" class="btn btn-darkblue" id="btnUpdateSave"><i class="fa fa-hdd-o"></i> Update Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-center" id="add_error" style="color: #ff0000;"></h5>
                                <div class="form-actions">
                                    <button type="reset" class="btn btn-default" id="back">Back</button>
                                    <button type="submit" class="btn btn-primary" id="Next">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
                <div class="col-sm-4">
                    <div class="blog-style" id="eventReqHide">
                        <div class="box">
                            <div class="box-title">
                                <h3 style="color: red;"><i class="glyphicon-circle_question_mark"></i> Fill in for Death Burial</h3>
                            </div>
                            <div class="box-content">
                                <div class="panel-group" id="ac4">
                                    <div class="panel panel-default blue">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#c11" data-toggle="collapse" data-parent="#ac4">
                                                    <b>Step 1:</b> Add the prefered information of the Burial
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
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>
<?php $this->load->view('includes/footer_1'); ?>

<script type="text/javascript">
$(".chosen-select").chosen({
    disable_search_threshold: 10,
    search_contains: true,
    width: '100%'
});

$(document).ready(function() {
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
                var death_idTB = el.attr('rel');
                var fnameTB = el.find('.fnameTB').html();
                var mnameTB = el.find('.mnameTB').html();
                var lnameTB = el.find('.lnameTB').html();
                var date_deceasedTB = el.find('.date_deceasedTB').html();
                var date_burialTB = el.find('.date_burialTB').html();
                var ageTB= el.find('.ageTB').html();
                var civil_statusTB = el.find('.civil_statusTB').html();
                var name_informantTB = el.find('.name_informantTB').html();
                var addressTB = el.find('.addressTB').html();
                var sacramentTB = el.find('.sacramentTB').html();
                var death_causedTB = el.find('.death_causedTB').html();
                var place_burialTB = el.find('.place_burialTB').html();
                var administer_priestTB = el.find('.administer_priestTB').html();
                var date_filingTB = el.find('.date_filingTB').html();
                var eventTimeTB = el.find('.eventTimeTB').html();
           
                $('.operation').html("add");
                $('.death_id').val(death_idTB);
                $('.fname').val(fnameTB);
                $('.mname').val(mnameTB);
                $('.lname').val(lnameTB);
                $('.date_deceased').val(date_deceasedTB);
                $('.date_burial').val(date_burialTB);
                $('.date_burial_1').val(date_burialTB);
                $('.age').val(ageTB);
                $('.civil_status').val(civil_statusTB);
                $('.name_informant').val(name_informantTB);
                $('.address').val(addressTB);
                $('.sacrament').val(sacramentTB);
                $('.death_caused').val(death_causedTB);
                $('.place_burial').val(place_burialTB);
                $('.administer_priest').val(administer_priestTB);
                $('.date_filing').val(date_filingTB);
                $('.eventTime').val(eventTimeTB);
                $('.eventTime_1').val(eventTimeTB);

                // console.log(death_causedTB);
                
                $('.chosen-select').trigger("chosen:updated");
            });
        }

    });

    $('.date_burial').on('change', function(){
        $('.chosen-select').trigger("chosen:updated");
    }); 

    $('#btnNotifyEvent').click(function() { 
        var status = "0";
        var notif = $('#getNotif').html();
        var dataString = 'status='+ status;           
        if(notif =='0') {
            // alert('Please Give Valid Details');
        } else {
            var status = "0";
            var dataString = 'status='+ status;           
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>events_reg/displayNUpdatenotificationDeath/",
                cache: false,  
                data: dataString,
                success: function(data){
                    getNotifyBaptismal();
                }
            }); 
        } return;
    });

    $('#btnClearEvent').click(function() {
        $('#btnClearEvent').addClass('hidden');
        $('#btnUpdateSave').addClass('hidden');
        $('#btnAddSave').removeClass('hidden');
        $('#back').click();
        $('.resetForm').trigger("reset");
        $('.chosen-select').trigger("chosen:updated");

    });

    $(".fname, .mname, .lname, .name_informant").bind("keypress", function (event) {
        if (event.charCode!=0) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    
    $( ".fname" ).focusout(function() {
        var fname = $('.fname').val();
        if (fname <= 1 ) {
            alert('Please provide atleast 2 character');
        }        
    });

    // for all copy paste special character
    $(document).on("keyup", ".fname, .mname, .lname", function () {
        $(".fname").val($(".fname").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
        $(".mname").val($(".mname").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
        $(".lname").val($(".lname").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
    }); 

    $('.btnAddSave').click(function(){
        var fname = $('.fname').val();
        // var mname = $('.mname').val();
        var mname = $(".mname").val().charAt(0);
        var lname = $('.lname').val();
        var date_deceased = $('.date_deceased').val();
        var eventTime = $('.eventTime').val();
        var date_burial = $('.date_burial').val();
        var age = $('.age').val();
        var civil_status = $('.civil_status').val();
        var name_informant = $('.name_informant').val();
        var address = $('.address').val();
        var sacrament = $('.sacrament').val();
        var death_caused = $('.death_caused').val();
        var place_burial = $('.place_burial').val();
        var administer_priest = $('.administer_priest').val();
        // var date_filing = $('.date_filing').val();
        var attendance = $('.attendance').val();
        var doc_status = $('.doc_status').val();
        var err;

       if(fname && mname && lname && date_deceased && eventTime && date_burial && age && civil_status && address && sacrament && death_caused && place_burial) {
            var url = "<?=base_url();?>events_reg/addDeath";
            var param = {
                'fname'         : fname,
                'mname'         : mname,
                'lname'         : lname,
                'date_deceased' : date_deceased,
                'eventTime'     : eventTime,
                'date_burial'   : date_burial,
                'age'           : age,
                'civil_status'  : civil_status,
                'name_informant': name_informant,
                'address'       : address,
                'sacrament'     : sacrament,
                'death_caused'  : death_caused,
                'place_burial'  : place_burial,
                'administer_priest'     : administer_priest,
                'attendance'            : attendance,
                'doc_status'            : doc_status

            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>redirect/death_reg"; 
                }
            });
        } else {
             $('#add_error').html('Sorry, Please fill in all required information.');
        }
    });

    $('#btnUpdateSave').click(function(){
        var death_id = $('.death_id').val();
        var fname = $('.fname').val();
        var mname = $('.mname').val();
        var lname = $('.lname').val();
        var date_deceased = $('.date_deceased').val();
        var eventTime = $('.eventTime').val();
        var eventTime_1 = $('.eventTime_1').val();
        var date_burial = $('.date_burial').val();
        var date_burial_1 = $('.date_burial_1').val();
        var age = $('.age').val();
        var civil_status = $('.civil_status').val();
        var name_informant = $('.name_informant').val();
        var address = $('.address').val();
        var sacrament = $('.sacrament').val();
        var death_caused = $('.death_caused').val();
        var place_burial = $('.place_burial').val();
        var administer_priest = $('.administer_priest').val();
        // var date_filing = $('.date_filing').val();
        var attendance = $('.attendance').val();
        var doc_status = $('.doc_status').val();
        var err;

       if(fname && mname && lname && date_deceased && eventTime && date_burial && age && civil_status && address && sacrament && death_caused && place_burial) {
            var url = "<?=base_url();?>events_reg/editDeath";
            var param = {
                'death_id'         : death_id,
                'fname'         : fname,
                'mname'         : mname,
                'lname'         : lname,
                'date_deceased' : date_deceased,
                'eventTime'     : eventTime,
                'eventTime_1'   : eventTime_1,
                'date_burial'   : date_burial,
                'date_burial_1' : date_burial_1,
                'age'           : age,
                'civil_status'  : civil_status,
                'name_informant': name_informant,
                'address'       : address,
                'sacrament'     : sacrament,
                'death_caused'  : death_caused,
                'place_burial'  : place_burial,
                'administer_priest'     : administer_priest,
                'attendance'            : attendance,
                'doc_status'            : doc_status

            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>redirect/death_reg"; 
                }
            });
        } else {
             $('#add_error').html('Sorry, Please fill in all required information.');
        }
    });

    $('#btnDirectregister').click(function(){
        window.location="<?=base_url();?>registration";    
    });
    $('#btnBackEvents').click(function(){
    window.location="<?=base_url();?>events";    
    });
});

function getNotifyBaptismal(value) {

    $.ajax({
        url: '<?php echo base_url();?>events_reg/Death_Notif/',
        type: 'POST',
        error: function() {
            
        },
        success: function(data) {
            $('#getNotif').html(data);
            var notif = data
            // console.log(data);
            if (notif == '0') {
                $('#getNotif').remove(); 
            } else {
                $('#getNotif').show(); 
            }

        }   
    });
}

</script>
    