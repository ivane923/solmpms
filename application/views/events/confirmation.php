<?php $this->load->view('includes/header_1'); ?>

<div id="viewConfirmationRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/confirmation_req'); ?>
</div>

<div id="content" class="container-fluid">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left"><h3 style="color:dodgerblue;"><i class="glyphicon glyphicon-more_items"></i> Events Services</h3></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-title">
                            <h3>
                                <i class="fa fa-magic"></i>
                                Confirmation Reservation
                            </h3>
                            <div class="pull-right">
                                <h3><a href="#viewConfirmationRequirements" data-toggle="modal"><i class="glyphicon-circle_question_mark"></i></a></h3>
                            </div>
                        </div>
                        <div class="box-content nopadding">
                            <form method="POST" class='form-horizontal form-wizard wizard-vertical' id="ssss">
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
                                        <!-- <li>
                                            <div class="single-step">
                                                <span class="title">3</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Status
                                                </span>
                                            </div>
                                        </li> -->
                                    </ul>
                                    <div class="form-content">
                                        <div class="col-sm-2 hidden">
                                            <div class="form-group">
                                                <input type="text" name="confirmation_id" class="form-control baptism_id RequiredField txtProfile" disabled="true" value="">
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
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Birth Date:</label>
                                                <input type="date" name="birthdate" id="textfield" placeholder="Birth Date" class="form-control birthdate RequiredField txtProfile" required="required" onchange="setAge(event)">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 hidden">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Age:</label>
                                                <input type="text" name="age" id="textfield" placeholder="Age" class="form-control age RequiredField" readonly="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Father's Name:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Father's Name" class="form-control father RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Mother's Maiden Name:</label>
                                                <input type="text" name="mother" id="textfield" placeholder="Mother's Name" class="form-control mother RequiredField" required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Address:</label>
                                                <input type="text" name="address" id="textfield" placeholder="Address" class="form-control address RequiredField" required="true">
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
                                        <!-- <li>
                                            <div class="single-step">
                                                <span class="title">
                                                    3</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Status
                                                </span>
                                            </div>
                                        </li> -->
                                    </ul>
                                    <div class="form-content">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Parish (Simbahang Kinasasakupan):</label>
                                                <input type="input" name="parish" id="textfield" placeholder="Parish" class="form-control parish RequiredField txtProfile" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Date of Confirmation:</label>
                                                <input type="date" name="dateToConfirm" id="" placeholder="Date of Confirmation" class="form-control dateToConfirm RequiredField txtProfile" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Place of Baptism:</label>
                                                <input type="text" name="baptismplace" id="textfield" placeholder="Place of Baptism" class="form-control baptismplace RequiredField txtProfile" required="required">
                                            </div>
                                        </div>
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Date of Baptism:</label>
                                                <input type="date" name="baptismDate" id="textfield" placeholder="Date of Baptism" class="form-control baptismDate RequiredField txtProfile" required="required">    
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                           <div class="form-group">
                                                <label for="textfield" class="control-label">Purpose:
                                                </label>
                                                <select class="form-control cus_form purpose RequiredField txtProfile chosen-select" name="table">
                                                    <option selected="selected" value="">Select Purpose
                                                    </option>
                                                    <option value="Married">Married</option>
                                                    <option value="Record">Record</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 hidden">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Name Of Informant:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Name Of Informant" class="form-control Appointedby RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">God Father:</label>
                                                <input type="text" name="GodFather" id="textfield" placeholder="God Father" class="form-control GodFather RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Address:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control GodFather_bplace RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">God Mother:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="God Mother" class="form-control GodMother RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Address:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control GodMother_bplace RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="form-actions pull-right"> 
                                            <button type="button" class="btn btn-darkblue btnAddSave"><i class="fa fa-hdd-o"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="step" id="thirdStep">
                                    <ul class="wizard-steps steps-3">
                                        <li>
                                            <div class="single-step">
                                                <span class="title">
                                                    1</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Personal Information
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-step">
                                                <span class="title">
                                                    2</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Event Information
                                                </span>
                                            </div>
                                        </li>
                                        <li class='active'>
                                            <div class="single-step">
                                                <span class="title">
                                                    3</span>
                                                <span class="circle">
                                                    <span class="active"></span>
                                                </span>
                                                <span class="description">
                                                    Status
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-content">
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="" class="control-label">Date Added</label>
                                                 <input type="text" name="date_added" id="" placeholder="Date Added" class="form-control date_added RequiredField txtProfile" disabled="true" required="required">
                                            </div>
                                        </div>
                                        <div class="form-actions pull-right"> 
                                            <button type="button" class="btn btn-darkblue btnAddSave"><i class="fa fa-hdd-o"></i> Save</button>
                                        </div>
                                    </div> 
                                </div> -->
                                <h5 class="text-center" id="add_error" style="color: #ff0000;"></h5>
                                <div class="form-actions">
                                    <button type="reset" class="btn btn-default"" id="back">Back</button>
                                    <button type="submit" class="btn btn-primary"" id="Next">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>


<script type="text/javascript">
$(".chosen-select").chosen({
    disable_search_threshold: 10,
    search_contains: true,
    width: '100%'
});

function setAge(e) {
    var bday = new Date(Date.parse(e.target.value));
    var today = new Date;
    var sub_date = today.getFullYear() - bday.getFullYear();
    $('.age').val(sub_date);
}
    
// var table = $('#exam').DataTable();
// var filteredData = table
//     .column( 0 )
//     .data()
//     .filter( function ( value, index ) {
//         return value > 20 ? true : false;
//     } );

$(document).ready(function() {
    $('.btnAddSave').click(function(){
        var fname           = $('.fname').val();
        var mname           = $('.mname').val();
        var lname           = $('.lname').val();
        var dateToConfirm   = $('.dateToConfirm').val();
        var birthdate       = $('.birthdate').val();
        var age             = $('.age').val();
        var baptismplace    = $('.baptismplace').val();
        var parish          = $('.parish').val();
        var baptismDate     = $('.baptismDate').val();
        var purpose         = $('.purpose').val();
        var father          = $('.father').val();
        var mother          = $('.mother').val();
        var address         = $('.address').val();
        var Appointedby     = $('.Appointedby').val();
        var attendance      = $('.attendance').val();
        var doc_status      = $('.doc_status').val();
        var GodFather       = $('.GodFather').val();
        var GodFather_bplace= $('.GodFather_bplace').val();
        var GodMother       = $('.GodMother').val(); 
        var GodMother_bplace= $('.GodMother_bplace').val();
        var err;

        if(fname && mname && lname && dateToConfirm && birthdate && baptismplace && parish && baptismDate && purpose && father && mother && address && GodFather && GodFather_bplace && GodMother && GodMother_bplace) {

            var url = "<?=base_url();?>events_reg/addConfirmation";
            var param = {
                'fname'             : fname,
                'mname'             : mname,
                'lname'             : lname,
                'dateToConfirm'     : dateToConfirm,
                'birthdate'         : birthdate,
                'baptismPlace'      : baptismplace,
                'parish'            : parish,
                'baptismDate'       : baptismDate,
                'age'               : age,
                'purpose'           : purpose,
                'father'            : father,
                'mother'            : mother,
                'address'           : address,
                'Appointedby'       : Appointedby,
                'attendance'        : attendance,
                'doc_status'        : doc_status,
                'GodFather'         : GodFather,
                'GodFather_bplace'  : GodFather_bplace,
                'GodMother'         : GodMother,
                'GodMother_bplace'  : GodMother_bplace
            }
            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>redirect/confirmation_reg";
                    // $(".baptismalTable").load(location.href+" .baptismalTable>*","");
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
    $('#btnDirectBaptismal').click(function(){
        window.location="<?=base_url();?>registration";    
    });
    $('#btnBackEvents').click(function(){
    window.location="<?=base_url();?>events";    
    });
     $('#btnDirectTransaction').click(function(){
    window.location="<?=base_url();?>payment";    
    });
</script>
    