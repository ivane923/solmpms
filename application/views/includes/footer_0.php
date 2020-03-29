<div class="brand-section">
	<div class="container">
                <div class="row">

                    <div class="centered-title">
                        <h3 style="color: #368ee0;">Shrine of Our Lady of Mercy</h3>
                    </div><!-- blogs-title -->

                    <div class="col-md-12">
                        <div class="col-partner">
                            <div>
                                <img src="<?=base_url();?>images/logos/1.jpg" alt="">
                            </div>
                        </div><!-- end column -->

                        <div class="col-partner">
                            <div>
                                <img src="<?=base_url();?>images/logos/2.jpg" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="<?=base_url();?>images/logos/3.jpg" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="<?=base_url();?>images/logos/4.jpg" alt="">
                            </div>
                        </div><!-- end column -->
                        <div class="col-partner">
                            <div>
                                <img src="<?=base_url();?>images/logos/5.jpg" alt="">
                            </div>
                        </div><!-- end column -->
                    </div><!-- end inner -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end brand-section -->

        <footer id="footer-section" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
                                <div class="widget-title-outer">
    							 <!-- <h3 class="widget-title">About Us</h3> -->
                                </div>
								<!-- <p>Pitstop Motors Inc., presently operating in Quezon Avenue focusing its core of business in Automotive Sales, Spare Parts,
								Car Accessories and Services. We are the authorized Service Center of Car Options Inc, Standout Motors and Auto-Express. Our goal
								is to provide a high quality and affordable service in achieving the Customer Satisfaction.</p> -->
                                <img src="<?=base_url();?>img/apple-touch-icon-precomposed.png" alt="" class='retina-ready' width="50%" height="50%">
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>

					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
                                <div class="widget-title-outer">
								    <h3 class="widget-title">Office Address</h3>
                                </div>
								<p>Our Office Address :</p>
								<table>
									<tr>
										<td><strong>Location</strong></td>
										<td> : 1197 Quezon Avenue<br/> Quezon City Philippines</td>
									</tr>
									<tr>
										<td><strong>Telephone</strong></td>
										<td> : (+632) 376-2133</td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td> : <a href="mailto:sales@pitstopmotors.com.ph">sales@pitstopmotors.com.ph</a></td>
									</tr>
									<tr>
										<td><strong>Store Hours</strong></td>
										<td> : Monday &dash; Saturday <br/> &nbsp;&nbsp;08:00 AM &dash; 6:00 PM</td>
									</tr>
								</table>
							</div><!-- end inner -->
						</div><!-- end widget -->
					</div>

					<div class="col-md-4">
						<div class="widget">
							<div class="widget-inner">
                                <div class="widget-title-outer">
    								<h3 class="widget-title">Subscribe</h3>
                                </div>
								<p>Keep updated with our news. Your email is safe with us!</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Email" class="form-control txtEmail">
                                    </div><!-- /col-md-3 -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="button" value="Subscribe" class="btn btn-lg btn-outline btnSubscribe" style="border-color: #FFFFFF; color: #FFD40B;">
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

        <div class="footer-credit">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copy">POWERED BY <a href="http://www.coders.com.ph" target="_blank">CODERS TECHNOLOGY SOLUTIONS</a>
                            <br>
                            <i class="fa fa-fw fa-facebook"></i>
                            <a href="https://www.facebook.com/pitstopmotors.com.ph" target="_blank">/PITSTOPMOTORS.COM.PH</a>
                        </p>
                    </div><!-- end column -->
                    <!--
                    <div class="col-md-6">
                        <p class="copy pull-right">
                            <a href="https://www.facebook.com/pitstopmotors.com.ph" target="_blank">
                                WWW.FACEBOOOK.COM/PITSTOPMOTORS.COM.PH
                            </a>
                        </p>
                        <ul class="list-socmed">
                            <li>
                                <a href="https://www.facebook.com/pitstopmotors.com.ph">
                                    <i class="fa fa-fw fa-facebook"></i>/PITSTOPMOTORS.COM.PH
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    -->
                    <!-- end column -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-credit -->

<script type="text/javascript">	
$('.btnSubscribe').click(function() {
	var email = $('.txtEmail').val();
	
	if (email && isValidEmailAddress(email)) {
		var url = "<?=base_url();?>email/subscribe";
		var param = {
			'email'		: email
		};
		
		$.post(url, param, function(data) {
			if(data) {
				console.log(data);
			}else {
				$('.txtEmail').val("");
				new PNotify({
					title: 'Subscribe',
					text: 'Thank you for Subscribing to our newsletter!',
					type: 'success',
					icon: false
				});
			}
		});
		
	}else {
		new PNotify({
			title: 'Error',
			text: 'Invalid Email Address!',
            type: 'error',
            icon: false
        });
	}
});

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
</script>