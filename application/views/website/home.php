<?php $this->load->view('includes/header_1'); ?>
<?php foreach(@$other_posts as $post) { ?> 
    <div id="post<?=@$post['post_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
                    <h4 class="modal-title modal-title-cus" id="myModalLabel"><i class="fa fa-bullhorn"></i> Announcement</h4>
                </div>
                <div class="modal-body">
                    <div class="preview-img">
                        <div class="preview-img">
                            <?php if(file_exists($post['status_image'])) { ?>
                                <img src="<?=base_url();?><?=@$post['status_image'];?>" class="img-responsive img-rounded" style="height: 300px; width: 100%;">
                            <?php } else { }?>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="post-title">
                            <a href="#"><?=@$post['status_title'];?></a>
                        </h4>
                        <div class="post-meta">
                            <span class="date">
                                <i class="fa fa-calendar"></i> <?=@$post['status_time'];?>
                            </span>
                            <span class="comments">
                                <span id="noComment_1"></span>
                            </span>
                        </div>
                        <div class="post-text">
                            <p><?=@$post['status_body'];?></p>
                        </div>
                    </div>
                    <div class="blog-list-post">
                        <div class="post-comments">
                            <h3>Comments</h3>
                            <div id="display_comment_1"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" placeholder="Write your comment here..." id="<?=@$post['post_id'];?>" class="form-control inputComment">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="submit" id="btnSendComment_1"><i class="fa fa-share"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->load->view('priest/sermon'); ?> 
<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="row">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bullhorn"></i> Announcements</h3>
                    </div>
                    <div class="box-content">
                        <!-- <div class="container-fluid"> -->
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="blog-list-post">
                                            <div class="blog-style-ko_1">
                                                <?php foreach(@$posts as $post) { ?>   
                                                    <div class="preview-img">
                                                        <?php if(file_exists($post['status_image'])) { ?>
                                                            <img src="<?=base_url();?><?=@$post['status_image'];?>" class="img-responsive img-rounded" style="height: 400px; width: 100%;">
                                                        <?php } else { }?>
                                                    </div>
                                                    <p id="post_id" class="hidden"><?=@$post['post_id'];?></p>
                                                    <div class="post-content">
                                                        <h4 class="post-title">
                                                            <a href="#" class="status_title"><?=@$post['status_title'];?></a> 
                                                        </h4>
                                                        <div class="post-meta">
                                                            <span class="date">
                                                                <i class="fa fa-calendar"></i> <?=@$post['status_time'];?>
                                                            </span>
                                                            <span class="comments">
                                                                <span id="noComment_0"></span>
                                                            </span>
                                                        </div>
                                                        <div class="post-text">
                                                            <p class="status_body"><?=@$post['status_body'];?></p>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="post-comments">
                                                    <h3>Comments</h3>
                                                    <?php if ($this->session->userdata('user_id') !='') { ?>
                                                    <form>
                                                        <div class="input-group">
                                                            <input type="text" placeholder="Write your comment here..." id="comment_0" class="form-control">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-primary" type="submit" id="btnSendComment_0"><i class="fa fa-share"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <?php } ?>
                                                    <div id="display_comment"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="row">
                                        <div class="blog-style">
                                            <h4 class='blog-widget-title'> Other posts</h4>
                                            <ul class="blog-widget-recent-posts">
                                                <?php foreach(@$other_posts as $post) { ?>  
                                                    <li>
                                                        <a href="#post<?=@$post['post_id'];?>" class="post_<?=@$post['post_id'];?>" data-toggle="modal">
                                                            <p class="p-limit"><?=@$post['status_title'];?></p>
                                                            <span class="details">
                                                                <span class="date">
                                                                    <i class="fa fa-calendar"></i><?=@$post['status_time'];?>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer_1'); ?>


<script type="text/javascript">
$(document).ready(function() { 

    getVal(); 
    <?php foreach ($posts as $post) { ?>
        var article_id = "<?=@$post['post_id'];?>";
        $.post('<?php echo base_url();?>index.php/blog/displaycomments/', {
            article_id:article_id
        },

        function(data) {
            $("#display_comment").html(data);   
        });     
    <?php }?>
});
$("#btnSendComment_0").click(function() {
    <?php foreach ($posts as $post) { ?>
        var article_id = "<?=@$post['post_id'];?>";
        var comment = $('#comment_0').val();
        var dataString = 'comment=' + comment + '&article_id=' + article_id;            
    <?php } ?>
    if(comment=='') {
        // alert('Please Give Valid Details');
    } else {
        //$("#display_comment").show();
        $("#display_comment").fadeIn(100).html('<img src="<?php echo base_url();?>img/ajax-loader.gif" /> Loading Comment...');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>blog/insert_comments/",
            data: dataString,
            cache: false,  
            success: function(data){
                $('#comment_0').val('');
                $("#display_comment").html(data);
                getVal();
            }
        });
    } return false;
});
function getVal(value) {
    var id = <?=@$post['post_id'];?>;
    $.ajax({
        url: '<?php echo base_url();?>index.php/main_c/comment_total/',
        type: 'POST',
        data: {id: id},
        error: function() {
            $('#noComment_0').html('0 Comments');
            $('#noComment_1').html('0 Comments');
        },
        success: function(data) {
            $('#noComment_0').html(data + ' Comments');
            $('#noComment_1').html(data + ' Comments');
        }
    });
}

</script>


