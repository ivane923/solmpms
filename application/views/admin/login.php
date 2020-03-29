<body style="background-color:dodgerblue">

	<div class="login"> 
		<div class="wrapper"  style=" border: 1px solid #ddd; border-radius: 5px; height: auto; padding: 10px 10px; background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.7);">
			<div class="login-body">
				<h3 style="color: dodgerblue; margin-left: 25px;"><i class="fa fa-key"></i> SIGN IN</h3>
				<img src="<?=base_url();?>img/apple-touch-icon-precomposed.png" alt="" class='retina-ready center-block' width="160" height="155">
				<h4 class="text-center">Shrine of Our Lady of Mercy<small><br>Novaliches, Quezon City</small></h4>
				<br>
				<form class="form-validate" id="test">
					<div class="form-group">
						<div class="pw controls">
							<input type="text" name='username' placeholder="Username" class='form-control username'>
						</div>
					</div> 
					<div class="form-group">
						<div class="pw controls">
							<input type="password" name="password" placeholder="Password" class='form-control password'>
						</div>
					</div>
					<span id="status" style="color: red; text-align: center;"></span>

					<div class="submit" style="width: 100%;">
						<button type="button" class='btn btn-primary btn-rad' id="btnLogin" style="width: 100%;">Sign me in</button>
					</div>
				</form>
				<br>
				<div class="text-center">
					<div class="remember">
						<a href="#" class="forgot-pass" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
						<br><small>Do not have an account? </small>
						<a href="http://localhost/csd/Main_m/register" class="signup">Signup</a>
					</div>
				</div>
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

				var url = "<?=base_url();?>admin/login";
				var param = {
					'username'  : username,
					'password'  : password
				};

				$.post(url, param, function(data){
					if(data){
						$('#status').html(data);
					}else{
						window.location="<?=base_url();?>";
					}
				});

			});
			$('#btnregister').click(function(){
				window.location="<?=base_url();?>registration";    
			});

		});

	// $(function() {
	//     $("#btnForget").click(function() {
	//         var username  = $('#username').val();
	//         var dataString = 'username='+ username;
	//         if(username=='') {
	//             // alert("Please provide Username to check your account");
	//         } else {
	//             $.ajax({
	//                 type: "POST",
	//                 url: "<?php echo base_url();?>admin/forget/",
	//                 data: dataString,
	//                 cache: false,  
	//                 success: function(data){
	//                     $("#display_comment").html(data);
	//                     // $("#display_comment").fadeIn(slow);
	//                 }
	//             });
	//         } return false;
	//     });
	// });
	</script>	


