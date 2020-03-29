
<?php foreach($notifications->result() as $row) { ?>
    <a href="#viewNotification" data-toggle="modal" id="btnViewNotify<?php echo $row->n_id; ?>">
        <img src="<?=@base_url();?><?php echo $row->profile; ?>" style="float:left" alt="">
        <div class="details" style="float:left;position: fixed; margin-left: 50px;">
            <div class="name" style="font-size: 12px">
            	<p class="p-limit-notif"><b><?php echo $row->FULLNAME; ?></b> <?php echo $row->n_title; ?>  </p>
            	<p class="hidden" id="txtFULLNAME"><?php echo $row->FULLNAME; ?> </p>
            	<p class="hidden" id="txtTITLE"><?php echo ucwords($row->n_title); ?>  </p>
            </div>
            <div class="message">
                <p class="p-limit-notif"><?php echo $row->n_comment; ?></p>
                <p class="hidden" id="txtCOMMENT"><?php echo $row->n_comment; ?></p>
                <p class="hidden"> id="n_id<?php echo $row->n_id; ?>"><?php echo $row->n_id; ?></p>
            </div> 	
        </div>
    </a>
<?php } ?>
<script type="text/javascript">
	<?php foreach($notifications->result() as $row) { ?>
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
	        // $('.p-limit-notif').text() = truncateText('.p-limit-notif', 40);
	        $('#btnViewNotify<?php echo $row->n_id; ?>').click(function() {
	        	var id = $("#n_id<?php echo $row->n_id; ?>").html();
	        	var txtFULLNAME = $("#txtFULLNAME").html();
	        	var txtTITLE = $("#txtTITLE").html();
	        	var txtCOMMENT = $("#txtCOMMENT").html();
	            $('.n_id').text(id);
	            $('.n_fullname').text(txtFULLNAME);
	            $('.n_title').text(txtTITLE);
	            $('.n_comment').text(txtCOMMENT);

	        });
		});
	<?php } ?>
</script>