<?php foreach($comments->result() as $row) { ?>
    <a href="#">
        <img src="<?=@base_url();?><?php echo $row->profile; ?>" style="float:left" alt="">
        <div class="details" style="float:left;position: fixed; margin-left: 50px;">
            <div class="name" style="font-size: 12px">
            	<p class="p-limit-notif"><b><?php echo $row->FULLNAME; ?></b> commented <?php echo $row->comment; ?></p>
            </div>
            <div class="message">
                <p class="p-limit-notif">on a  post <?php echo $row->status_title; ?></p>
            </div>
        </div>
    </a>
	<script type="text/javascript">
		$(document).ready(function() {
			function truncateText(selector, maxLength) {
	            var element = document.querySelector(selector),
	                truncated = element.innerText;
	            if (truncated.length > maxLength) {
	                truncated = truncated.substr(0,maxLength) + '...';
	            }
	            return truncated;
	        }
	        document.querySelector('.p-limit-notif').innerText = truncateText('.p-limit-notif', 32);
		});
	</script>
<?php } ?>