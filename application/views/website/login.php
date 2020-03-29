<body>
<?php $this->load->view('includes/header_1');?>
<div id="content" class="container-fluid">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <!-- <div class="pull-left"><h1>Members / Sign In</h1></div> -->
            </div>
            <?php if ($this->session->userdata('user_type') == 'Member') {  ?>
                <br>
                <div class="row">
                    <div class="col-sm-8 col-md-offset-2">
                        <div class="box" style="margin-top: -20px;">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Login Success</strong> Hi, <?php echo $this->session->userdata('fullname');?>
                            </div>
                            <div class="box-title">
                                <!-- <h3 class="text-center">Welcome, <span style="color: red; font-weight: bold;"></span> -->
                                <!-- </h3> -->
                                <h3 class="text-center"><b>Here's what you can do: </b> </h3>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="offer col-sm-4">
                                        <a href="<?=base_url();?>redirect/my_profile" class="o-item">
                                            <div class="offer-item offer-profile">
                                                <h4>
                                                    <i class="fa fa-check"></i>
                                                    Update Profile
                                                </h4>
                                                <h1 class="offer-icon text-center">
                                                    <i class="fa fa-user"></i>
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="offer col-sm-4">
                                        <a href="#" class="o-item">
                                            <div class="offer-item offer-update">
                                                <h4>
                                                    <i class="fa fa-check"></i>
                                                    Get Shrine updates
                                                </h4>
                                                <h1 class="offer-icon text-center">
                                                    <i class="fa fa-bullhorn"></i>
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="offer col-sm-4">
                                        <a href="#" class="o-item">
                                            <div class="offer-item offer-reservation">
                                                <h4>
                                                    <i class="fa fa-check"></i>
                                                    Reserve for an event
                                                </h4>
                                                <h1 class="offer-icon text-center">
                                                    <i class="fa fa-calendar"></i>
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="offer col-sm-4">
                                        <a href="#" class="o-item">
                                            <div class="offer-item offer-notify">
                                                <h4>
                                                    <i class="fa fa-check"></i>
                                                    Get notify
                                                </h4>
                                                <h1 class="offer-icon text-center">
                                                    <i class="fa fa-envelope-o"></i>
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="offer col-sm-4">
                                        <a href="#" class="o-item">
                                            <div class="offer-item offer-discussion">
                                                <h4>
                                                    <i class="fa fa-check"></i>
                                                    Join on a discussion
                                                </h4>
                                                <h1 class="offer-icon text-center">
                                                    <i class="fa fa-comments"></i>
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="offer col-sm-4">
                                        <a href="#" class="o-item">
                                            <div class="offer-item offer-view">
                                                <h4>
                                                    <i class="fa fa-check"></i>
                                                    View Records
                                                </h4>
                                                <h1 class="offer-icon text-center">
                                                    <i class="fa fa-search"></i>
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <button class="btn btn-primary center-block btn-rad" id="btnEParishiansContinue">&nbsp;<i class="glyphicon glyphicon-share"></i> Continue Here &nbsp;</button>
                    </div>
                </div>
            <?php 
            } else if ($this->session->userdata('user_type') == 'Administrator' || $this->session->userdata('user_type') == 'Cashier') { ?>
                <div class="col-sm-8 col-md-offset-2">
                        <div class="box" style="margin-top: 40px;">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Login Success</strong> Hi, <?php echo $this->session->userdata('fullname');?>
                            </div>
                            <div class="box-title">
                                <h3 class="text-center"><b>It's been a great day! </b> </h3>
                            </div>
                            <div class="box-content">
                                <button class="btn btn-primary center-block btn-rad" id="btnEmployeeContinue">&nbsp;<i class="glyphicon glyphicon-share"></i> Continue Here &nbsp;</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else if ($this->session->userdata('user_type') == 'Priest') { ?>
                <div class="col-sm-8 col-md-offset-2">
                        <div class="box" style="margin-top: 40px;">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Login Success</strong> Hi,  Father <?php echo $this->session->userdata('fullname');?>
                            </div>
                            <div class="box-title">
                                <h3 class="text-center"><b>It's been a great day! </b> </h3>
                            </div>
                            <div class="box-content">
                                <button class="btn btn-primary center-block btn-rad" id="btnEmployeeContinue">&nbsp;<i class="glyphicon glyphicon-share"></i> Continue Here &nbsp;</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
            <div class="row">
                <div class="col-sm-4 col-md-offset-4" id="col-login" style="border: 1px solid lightblue; border-radius: 5px; margin-top: 0px; padding: 10px 10px;">
                    <div class="box-content">
                        <div class="container-fluid">
                            <h3><i class="fa fa-lock"></i> SIGN IN</h3>
                            <hr>
                            <img src="<?=base_url();?>img/apple-touch-icon-precomposed.png" alt="" class='retina-ready center-block' width="140" height="140">
                            <!-- <h4 class="text-center">MEMBERS</h4> -->
                            <h4 class="text-center">Shrine of Our Lady of Mercy<small><br>Novaliches, Quezon City</small></h4>

                            <hr>
                            <form>
                                <div class="form-group">
                                    <div class="email controls">
                                        <input name="username" placeholder="Username" class="form-control username" type="text">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="pw controls">
                                        <input name="password" placeholder="Password" class="form-control password" type="password">
                                    </div>
                                </div>
                                <p id="status" style="color: red; text-align: center;"></p>
                                <div class="submit" style="width: 100%;">
                                    <button type="button" class='btn btn-primary btn-rad' id="btnLogin" style="width: 100%;">Sign me in</button>
                                </div>
                            </form>
                            <br>
                            <div class="text-center">
                                <div class="remember">
                                    <a href="#" class="forgot-pass" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
                                    <br><small>Do not have an account? </small>
                                    <a href="<?=@base_url();?>redirect/registration" class="signup">Signup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    $('.password, .username').keypress(function(event) {
        if (event.which==13) $('#btnLogin').trigger('click');
    });

    $('#btnLogin').click(function(){
        var username = $('.username').val();
        var password = $('.password').val();
    
        var url = "<?=base_url();?>redirect/login_validation";
        var param = {   
            'username'  : username,
            'password'  : password
        };
        $.post(url, param, function(data){
            if(data){
                $('#status').html(data);
                $('.password').val('');
            } else {
                window.location="<?=base_url();?>redirect/login";
            }
        });
    });
});

$('#rdct_home').click(function(){
    window.location="<?=base_url();?>home";    
});
$('#btnEmployeeContinue').click(function(){
    window.location="<?=base_url();?>main_c";    
});
$('#btnEParishiansContinue').click(function(){
    window.location="<?=base_url();?>redirect";    
});

</script>
</body>
