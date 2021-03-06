<?php $this->load->view('includes/header_1'); ?>

<div id="viewCommunionRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/communion_req'); ?>
</div>

<div id="content" class="container-fluid">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left"><h3 style="color:dodgerblue;"><i class="glyphicon glyphicon-more_items"></i> Events Services</h3></div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-default" id="btnBackEvents"><span><i class="glyphicon-circle_arrow_left"></i></span> Back to Events</button>
                    <button type="submit" class="btn btn-primary" id="btnDirectTransaction"><i class="glyphicon glyphicon-sort"></i> View Records</button>
                </div>   
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-title">
                            <h3>
                                <i class="fa fa-magic"></i>
                                Communion Reservation
                            </h3>
                            <div class="pull-right">
                                <h3><a href="#viewCommunionRequirements" data-toggle="modal">-<i class="glyphicon-circle_question_mark"></i>-</a></h3>
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
                                    </ul>
                                    <div class="form-content">
                                        <div class="col-sm-2 hidden">
                                            <div class="form-group">
                                                <input type="text" name="conversion_id" class="form-control RequiredField txtProfile" disabled="true" value="">
                                            </div>
                                        </div>
                                        <span class="operation hidden"></span>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="FirstName" class="control-label">First Name:</label>
                                                <input type="text" id="fname" name="fname" id="" placeholder="First Name" class="form-control fname RequiredField txtProfile" required="required">
                                            </div>
                                        </div>
                                         <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="MI" class="control-label">M.I:</label>
                                                <input type="text" id="mname" name="mname" id="" placeholder="M.I" class="form-control mname RequiredField txtProfile" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group Name">
                                                <label for="LastName" class="control-label">Last Name:</label>
                                                <input type="text" id="lname" name="lname" id="" placeholder="Last Name" class="form-control lname RequiredField txtProfile" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Gender:</label>
                                                <select class="form-control cus_form gender chosen-select">
                                                    <option selected="selected" value="">Select
                                                    </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Birth Date:</label>
                                                <input type="date" name="birthdate" id="textfield" placeholder="Birth Date" class="form-control birthdate RequiredField txtProfile" required="required">
                                            </div>
                                        </div>  
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Birth Place:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Birth Place" class="form-control bplace RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Father's Name:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Father's Name" class="form-control father RequiredField" required="required">
                                            </div>
                                        </div>
                                         <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Father's Address:</label>
                                                <input type="text" name="textfield" id="textfield" placeholder="Father's address" class="form-control father_address RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Mother's  Name:</label>
                                                <input type="text" name="mother" id="textfield" placeholder="Mother's Name" class="form-control mother RequiredField" required="true">
                                            </div>
                                        </div>
                                         <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Mother's  Address:</label>
                                                <input type="text" name="mother" id="textfield" placeholder="Mother's address" class="form-control mother_address RequiredField" required="true">
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
                                                <label for="textfield" class="control-label">Date of Baptism:</label>
                                                <input type="date" name="dateToConvert" id="" placeholder="Date of Baptism" class="form-control date_baptised RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="textfield" class="control-label">Date of Communion:</label>
                                                <input type="date" name="dateToConvert" id="" placeholder="Date of Communion" class="form-control dateToCommunion RequiredField" required="required">
                                            </div>
                                        </div>
                                        <div class="form-actions pull-right"> 
                                            <button type="button" class="btn btn-darkblue btnAddSave"><i class="fa fa-hdd-o"></i> Reserve now</button>  
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-center" id="add_error" style="color: #ff0000;"></h5>
                                <div class="form-actions">
                                    <button type="reset"  class="btn btn-default"" id="back">Back</button>
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
$(document).ready(function() {
    $("#fname").bind("keypress", function (event) {
        if (event.charCode!=0) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    $("#mname").bind("keypress", function (event) {
        if (event.charCode!=0) {
            var regex = new RegExp("^[a-zA-Z]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    $("#lname").bind("keypress", function (event) {
        if (event.charCode!=0) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
});
// $(function() {
    $(".btnAddSave").click(function() {
        var fname           = $('.fname').val();
        var mname           = $('.mname').val();
        var lname           = $('.lname').val();
        var gender          = $('.gender').val();
        var birthdate       = $('.birthdate').val();
        var bplace          = $('.bplace').val();
        var address         = $('.address').val();
        var father          = $('.father').val();
        var mother          = $('.mother').val();
        var father_address  = $('.father_address').val();
        var mother_address  = $('.mother_address').val();
        var date_baptised   = $('.date_baptised').val();
        var dateToCommunion  = $('.dateToCommunion').val();
        var informant       = "<?php echo $this->session->userdata('fullname');?>";
        var parish          = $(".parish").val();
        var dataString = 'fname='+ fname +'& mname='+ mname +'& lname='+ lname +'& gender='+ gender +'& birthdate='+ birthdate +'& bplace='+ bplace +'& address='+ address + '& father=' + father+ '& mother=' + mother + '& father_address=' + father_address + '& mother_address=' + mother_address + '& date_baptised=' + date_baptised + '& dateToCommunion=' + dateToCommunion + '& informant=' + informant+ '& parish=' + parish;
        console.log(dataString);
        if(fname=='' || mname=='' || lname=='' || parish=='') {
            alert('Please Give Valid Details');
        } else {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>index.php/communion/add/",
                data: dataString,
                cache: false,  
                success: function(data){
                    // alert ("na-save ang record");
                    $(".fname").val(null);
                    $(".mname").val('');
                    $(".lname").val('');
                    $(".gender").val('');
                    $(".birthdate").val('');
                    $(".bplace").val('');
                    $(".address").val('');
                    $(".father").val('');
                    $(".mother").val('');
                    $(".father_address").val('');
                    $(".mother_address").val('');
                    $(".date_baptised").val('');
                    $(".dateToCommunion").val('');
                    $(".parish").val('');
                }
            });
        } return false;
    });
// });

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
    