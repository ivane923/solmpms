<?php $this->load->view('website/header'); ?> 
<script type="text/javascript" src="<?=base_url();?>js/numeral.min.js"></script>
<script src="<?=base_url();?>js/jquery.mask.min.js" type="text/javascript"></script>

<div id="content" class="container-fluid">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <!-- <div class="pull-left"><h1>Members / Sign In</h1></div> -->
            </div>
            <div class="row">
                <div class="col-sm-8 col-md-offset-2" style="border: 1px solid lightblue;" >
                    <br>
                    <div class="box-content nopadding">
                        <h2><i class="fa fa-book"></i> Email </h2>
                        <hr>
                        <form>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="FirstName" class="control-label">First Name:</label>
                                        <input type="text" name="fname" id="" placeholder="First Name" class="form-control fname RequiredField txtProfile" required="required">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group Name">
                                        <label for="Email" class="control-label">Email:</label>
                                        <input type="text" name="lname" id="" placeholder="Email Address" class="form-control email RequiredField txtProfile" required="required">
                                    </div>
                                </div>
                            </div>
                        </form>
                         <div class="form-actions pull-right"> 
                            <button type="button" class="btn btn-primary btncopyPath"><i class="fa fa-hdd-o"></i> Copy Path</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('website/footer'); ?> 

<script type="text/javascript">
$(document).ready(function() {

    $('.btncopyPath').click(function(){
        // window.location.host          #returns host
        // window.location.hostname      #returns hostname
        // window.location.path          #return path
        // window.location.href          #returns full current url
        // window.location.port          #returns the port
        // window.location.protocol      #returns the protocol
        // var currentURL = window.location.href;
        // console.log(currentURL);
        var url = "<?=base_url();?>email/send_email";
        var param = {
            'fname'         : fname,
            'email'         : email,
        }
        $.post(url, param, function(data) {
            if(data) {
                $('#add_error').html(data);
            }else {
                window.location="<?=base_url();?>death_reg";
                // $(".baptismalTable").load(location.href+" .baptismalTable>*","");
                 $('#add_error').html('Data has been inserted!');   
            }
        });
    });
});
</script>