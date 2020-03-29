<?php $this->load->view('includes/header_1');?>

<div id="content" class="container-fluid">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <!-- <div class="pull-left"><h1>Members / Sign In</h1></div> -->
            </div>  
            <div class="row">
                <div class="col-sm-8 col-md-offset-2" style="border: 1px solid #F2F2F2; border-radius: 5px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
                    <br>
                    <div class="box-content nopadding">
                        
                        <?php  if($msg=$this->session->flashdata('msg')): 
                            $msg_class=$this->session->flashdata('msg_class')
                            ?>
                            <div id="gritter-notice-wrapper">
                                <div id="gritter-item-1" class="gritter-item-wrapper">
                                    <div class="gritter-top"></div>
                                    <div class="gritter-item">
                                        <div class="gritter-close"></div>
                                            <div class="gritter-without-image">
                                                <span class="gritter-title">Success</span>
                                                <p><?= $msg; ?></p>
                                            </div>
                                            <div style="clear:both"></div>
                                        </div>
                                    <div class="gritter-bottom"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <h3><i class="fa fa-book"></i> <b>Registration</b> </h3>
                        <hr>
                        <?php echo form_open('registration/add');?>  
                        <div class="col-sm-5">
                            <div class="form-group">
                                <?php echo form_label('First Name :'); ?>
                                <?php echo form_input(array('id' => 'fname', 'name' => 'fname', 'class' => 'form-control', 'placeholder' => 'Enter your First Name..', 'value' => set_value('fname'))); ?>
                                <span class="errorMsg"><?php echo form_error('fname'); ?></span>
                            </div>       
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <?php echo form_label('MI :'); ?>
                                <?php echo form_input(array('id' => 'mi', 'name' => 'mi', 'class' => 'form-control', 'placeholder' => 'Middle Initial', 'value' => set_value('mi'))); ?>
                                <span class="errorMsg"><?php echo form_error('mi'); ?></span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <?php echo form_label('Last Name :'); ?>
                                <?php echo form_input(array('id' => 'lname', 'name' => 'lname', 'class' => 'form-control', 'placeholder' => 'Enter your Last Name..', 'value' => set_value('lname'))); ?>
                                <span class="errorMsg"><?php echo form_error('lname'); ?></span>
                            </div>
                        </div> 
                        <div class="col-sm-7">
                            <div class="form-group">
                                <?php echo form_label('Email :'); ?>
                                <?php echo form_input(array('id' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter your Email..', 'value' => set_value('email'))); ?>
                                <span class="errorMsg"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <?php echo form_label('Address :'); ?>
                                <?php echo form_textarea(array('id' => 'address', 'name' => 'address', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter your Address..', 'style' => 'resize: none', 'value' => set_value('address'))); ?>
                                <span class="errorMsg"><?php echo form_error('address'); ?></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <?php echo form_label('Username :'); ?>
                                <?php echo form_input(array('id' => 'username', 'name' => 'username', 'class' => 'form-control', 'placeholder' => 'Enter your Username..', 'value' => set_value('username'))); ?>
                                <span class="errorMsg"><?php echo form_error('username'); ?></span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <?php echo form_label('Password :'); ?>
                                <?php echo form_password(array('id' => 'password0', 'name' => 'password0', 'class' => 'form-control', 'placeholder' => 'Enter your Password..')); ?>
                                <span class="errorMsg"><?php echo form_error('password'); ?></span> 
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <?php echo form_label('Confirm Password :'); ?>
                                <?php echo form_password(array('id' => 'password1', 'name' => 'password1', 'class' => 'form-control', 'placeholder' => 'Confirm Password..')); ?>
                                <span class="errorMsg"><?php echo form_error('password'); ?></span> 
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <center><span id="add_error" style="color: #ff0000;"></span></center>
                            </div>

                        </div>
                        <div class="form-actions pull-right"> 
                            <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit', 'id' => 'btnAdd']);  ?>
                            <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-inverse','value'=>'Reset']);  ?>
                        </div>
                    </form>
                </div>
            </div>
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
        $("#mi").bind("keypress", function (event) {
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

        $('#passwo , #password1').keyup(function(event) {

            // if (event.which==13) $('#btnLogin').trigger('click');
            var pass0 = $('#password0').val();
            var pass1 = $('#password1').val();
            if (pass0 != pass1) {
                // console.log("not match");
                $("#add_error").html('Password mismatch');

            } else {
                $("#add_error").html('');
            }
        });

        $.validator.addMethod("noSpecialChars", function(value, element) {
            return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
        }, "Username must contain only letters, numbers, or underscore.");

        $("#username").validate();     
    });
</script>
