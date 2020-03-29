<?php $this->load->view('includes/header_1'); ?>
<div id="content" class="container-fluid nav-hidden" style="margin-top: -30px">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                
            </div>
            <div class="row">
                <div class="col-sm-8 col-md-offset-2 col-main-style">
                    <div class="box">
                        <div class="box-title">
                            <h3><i class="fa fa-edit"></i> Update your Profile</h3>
                            <div class="pull-right">
                                <span class="btn btn-default"><input type="checkbox" name="checkbox" id="checkDisabled"> Edit</span>
                            </div>    
                        </div>
                        <div class="box-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <?php  if($msg=$this->session->flashdata('msg')): 
                                        $msg_class=$this->session->flashdata('msg_class')
                                        ?>
                                        <div id="gritter-notice-wrapper">
                                            <div id="gritter-item-1" class="gritter-item-wrapper">
                                                <div class="gritter-top"></div>
                                                <div class="gritter-item">
                                                    <div class="gritter-close"></div>
                                                        <div class="gritter-without-image">
                                                            <p><?= $msg; ?></p>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                <div class="gritter-bottom"></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo form_open_multipart('users/update_user_1');?>
                                        <div class="col-sm-12">
                                            <div class="img-profile center-block" style="width: 150px; height: 150px;border:1px solid lightgrey">
                                                <img src="<?=base_url();?><?php echo $this->session->userdata('profile');?>" id="preview" style="width: 100%; height: 100%;" />
                                            </div>
                                            <center>
                                                <div class="col-sm-8 col-md-offset-2" style="margin-top: 15px; margin-bottom: 15px;">
                                                    <div class="btn-toolbar">
                                                        <a href="#" class="btn btn-primary" rel="tooltip" title="Upload image" id="uploadTrigger">
                                                            <i class="fa fa-image"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger" rel="tooltip" title="Remove" id="clearPicture">
                                                            <i class="fa fa-remove"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                        <h3 class="text-center"><?php echo $this->session->userdata('fullname'); ?><br> <small>Registered Parishians</small></h3>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="btn-group">
                                                    <input type="file" onchange="readURL(this);" id="picture" name="picture" style="display: none;" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo form_label('Email Address :'); ?>
                                                <span class="errorMsg"><?php echo form_error('email'); ?></span><br />
                                                <?php echo form_input(array('id' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email..', 'value' => $this->session->userdata('mobile_no'))); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php echo form_label('Address :'); ?>
                                                <span class="errorMsg"><?php echo form_error('address'); ?></span><br />
                                                <?php echo form_textarea(array('id' => 'address', 'name' => 'address', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter your address..', 'style' => 'resize: none', 'value' => set_value('address'))); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php echo form_label('New Password :'); ?>
                                                <span class="errorMsg"><?php echo form_error('pass0'); ?></span><br />
                                                <?php echo form_password(array('id' => 'pass0', 'name' => 'pass0', 'class' => 'form-control', 'placeholder' => ' Enter new password..', 'value' => set_value(''))); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">  
                                            <div class="form-group">
                                                <?php echo form_label('Confirm Password :'); ?>
                                                <span class="errorMsg"><?php echo form_error('pass1'); ?></span><br />
                                                <?php echo form_password(array('id' => 'pass1', 'name' => 'pass1', 'class' => 'form-control', 'placeholder' => 'Confirm password..', 'value' => set_value(''))); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="errorMsg text-center" id="errorMsg_pass"></p>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <?php echo form_submit(array('id' => 'submit', 'value' => 'Apply Changes', 'class' => 'btn btn-blue pull-right')); ?>
                                                </div>
                                            </div> 
                                        </div>
                                    </form>
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
    $(document).ready(function() {
        $("#email")[0].disabled = true;
        $("#address")[0].disabled = true;
        $("#pass0")[0].disabled = true;
        $("#pass1")[0].disabled = true;
        $("#uploadTrigger").addClass('hidden');
        $("#clearPicture").addClass('hidden');
        $("#submit").addClass('hidden');

        $("#address").val("<?php echo $this->session->userdata('address'); ?>");

        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true) {
                $("#email")[0].disabled = false;
                $("#address")[0].disabled = false;
                $("#pass0")[0].disabled = false;
                $("#pass1")[0].disabled = false;
                $("#uploadTrigger").removeClass('hidden');
                $("#clearPicture").removeClass('hidden');
                $("#submit").removeClass('hidden');               
            } else if($(this).prop("checked") == false){
                // $('#email').removeAttr('disabled'); //gumagana
                $("#email")[0].disabled = true;
                $("#address")[0].disabled = true;
                $("#pass0")[0].disabled = true;
                $("#pass1")[0].disabled = true;
                $("#uploadTrigger").addClass('hidden');
                $("#clearPicture").addClass('hidden');
                $("#submit").addClass('hidden');        
            }
        });
        $('#uploadTrigger').click(function() {      
           $('#picture').click();
           // $("#preview").removeClass('hidden');
        });

        $('#clearPicture').click(function() {      
           $('#picture').val(null);
           // $("#preview").remove();
           $("#preview").addClass('hidden');
           // $("#clearPicture").remove();
        });

        $('#pass0, #pass1').keyup(function(event) {
            var pass0 = $('#pass0').val();
            var pass1 = $('#pass1').val();
            if (pass0 != pass1) {
                $("#errorMsg_pass").html('Password mismatch');
            } else {
                console.log("match");
                $("#errorMsg_pass").html('');
            }
        });
            
        $('#userSubmit').click(function() {      
            var titleName = $('#titleName').val();
            var articleBody = $('#articleBody').val();
            if (titleName && articleBody) {
                // $('#picture').val('');
                // alert('jhavsdhj');
            }
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // $('#panel-bottom').show();
                $("#preview").removeClass('hidden');
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
