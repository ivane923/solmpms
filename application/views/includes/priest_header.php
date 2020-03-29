
<div id="pwModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Change Password</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="reloadEffect">
                    <span id="user_id" class="hidden"><?php echo $this->session->userdata('user_id');?></span>
                    <div class="form-group">
                        <label class="control-label col-sm-3">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control newpassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Re-Type Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control repassword">
                        </div>
                    </div>
                    <center>
                        <span id="pw_error" style="color: #ff0000;"></span>
                        <span id="pw_success" style="color: dodgerblue;"></span>
                    </center>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="btnclose">No, Close Window</button>
                <button type="button" class="btn btn-primary btnPasswordSave">Yes, Save Changes</button>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->userdata('user_id')<>'') {  ?>
    <div id="navigation" class="navbar-fixed-top" style="height:44px">
        <div class="container-fluid">
            <!-- <a href="<?=base_url();?>" id="brand"></a> -->
            <!-- <a href="" id="brand">
                <div class="custom-logo">
                   <img src="<?=base_url();?>img/apple-touch-icon-precomposed.png" width="30px" height="100%" alt=""> SOLMP - MS
                </div>
            </a> -->
            <a href="index.php" id="brand" style="font-size: 15px; font-weight: bold;margin-top: 0px;">
                <img src="<?=base_url();?>img/apple-touch-icon-precomposed.png" width="40px" height="100%" alt="">
                <span id="solmpText" style="padding-bottom:-3px;"> SOLMP - MS</span>
            </a>
            <!--a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
                <i class="fa fa-bars"></i>
            </a-->
            <ul class='main-nav'>
                <li class='<?=(@$menu=='Main_c') ? 'active' : ''; ?>'>
                    <a href="<?=base_url();?>main_c">
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Users</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">Users</a></li>
                        <li><a href="">Parish Members</a></li>
                        <li><a href="">Parish Priest</a></li>
                    </ul>
                </li> -->
                <!--li class='<?=(@$menu=='transactions') ? 'active' : ''; ?>'>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Transactions</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?=base_url();?>invoice">Invoice</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>receiving">Receiving</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>adjustment">Adjustment</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Reports</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url();?>reports/all">Transactions</a></li>
                        <li><a href="<?=base_url();?>reports/paid">Paid Transactions</a></li>
                        <li><a href="<?=base_url()?>reports/unpaid">Unpaid Transactions</a></li>
                    </ul>
                </li-->
                <li class='<?=(@$menu=='users') ? 'active' : ''; ?>'>
                    <a href="<?=base_url();?>main_c/users"><span>Users</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                        <span>Events</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url();?>baptismal">Baptismal</a></li>
                        <li><a href="<?=base_url();?>">Confirmation</a></li>
                        <li><a href="">Convertion</a></li>
                        <li><a href="">Death</a></li>
                        <li><a href="">First Communion</a></li>
                        <li><a href="">Matrimony</a></li>
                    </ul>
                </li>
                <li class='<?=(@$menu=='transaction') ? 'active' : ''; ?>'>
                    <a href="<?=base_url();?>transaction"><span>Accounting</span></a>
                </li>
            </ul>
            <div class="user">
                <div class="dropdown">
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                        <span style="font-family: Arial Rounded MT Bold"><?php echo $this->session->userdata('fullname');?></span>
                        <img src="<?=@base_url();?><?php echo $this->session->userdata('profile');?>" style="height: 27px; width: 27px;" alt="">        
                    </a>    
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="<?=base_url();?>main_c/user_profile">My Profile</a>
                        </li>
                        <li>
                            <a href="#pwModal" data-toggle="modal" id="changePW">Change Password</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/logout">Logout</a>
                        </li>
                    </ul>
                </div>
                <ul class="icon-nav" style="margin-left: -4px; margin-top: 2px;">
                    <li class='dropdown'>
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown" id="btnNotify">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-lightred count" id="getNotif"></span>
                        </a>
                        <ul class="dropdown-menu pull-right message-ul">
                           <li id="display_notification"></li>
                            <!-- <li>
                                <a href="components-messages.html" class='more-messages'>Go to Message center
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>

<script type="text/javascript">
$(document).ready(function() {
    getNotify();
    $('.btnPasswordSave').click(function() {
        var user_id = $('#user_id').html();
        var newpass = $('.newpassword').val();
        var repass = $('.repassword').val();
        var err;

        if(newpass && repass) {
            if (newpass!=repass) {
                $('#pw_error').html("Your Password did not match!");
            } else if (newpass.length < 5) {
                $('#pw_error').html("Please provide atleast 5 characters Password");
            } else {
                var url = "<?=base_url();?>users/change_password";
                var param = {
                    'user_id'   : user_id,
                    'newpass'   : newpass
                };

                $.post(url, param, function(data) {
                    if(data) {
                        $( "#pw_error" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 ).html(data);
                    }else {
                        $('#pw_error').html('');
                        $( "#pw_success" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 ).html('Password has been changed');
                        $('#pw_success').removeClass('hidden');
                        $('.newpassword').val('');
                        $('.repassword').val('');
                        // $('#btnclose').click();
                    }
                });
            }
        }else {
            $('#pw_error').html('Sorry, please fill in all required information.');
        }

    }); 

    $('#changePW').click(function(){
        $('#pw_success').addClass('hidden');
    });
    
    $('#btnclose').click(function() {
        $('#pw_success').removeClass('hidden');
    });
    
    $('#btnNotify').click(function() { 
        var status = "0";
        var notif = $('#getNotif').html();
        var dataString = 'status='+ status;           
        if(notif =='0') {
            // alert('Please Give Valid Details');
        } else {
            var status = "0";
            var dataString = 'status='+ status;           
            $("#display_notification").fadeIn(1000).html('<img src="<?php echo base_url();?>img/ajax-loader.gif" /> Loading Comment...');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>main_c/displayNUpdatenotification/",
                cache: false,  
                data: dataString,
                success: function(data){
                    $("#display_notification").html(data);
                    getNotify();
                }
            }); 
        } return;
    });

});  
function getNotify(value) {
    $.ajax({
        url: '<?php echo base_url();?>index.php/main_c/notification_total/',
        type: 'POST',
        error: function() {
            $('#getNotif').addClass('hidden');
        },
        success: function(data) {
            $('#getNotif').html(data);

        }   
    });
} 
</script>
