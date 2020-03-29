
<div class="media">
    <?php foreach($comments->result() as $row) { ?>
        <a class="pull-left" href="#">
            <img src="<?=@base_url();?><?php echo $row->profile; ?>">
        </a>
        <div class="media-body">
            <h5 class="media-heading" id="comment_f<?php echo $row->comment_id; ?>"><?php echo $row->FULLNAME; ?> 
            </h5>
                <small id="comment_time<?php echo $row->comment_id; ?>"><?php echo $row->time; ?></small>
            <p class="comment_content" id="comment_c<?php echo $row->comment_id; ?>"> <?php echo $row->comment; ?></p>
            <p id="comment_id<?php echo $row->comment_id; ?>" class="hidden"> <?php echo $row->comment_id; ?></p>
        </div>
    <?php } ?>
</div>  

