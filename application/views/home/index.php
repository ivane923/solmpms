<?php $this->load->view('includes/header_0'); ?>
<?php foreach(@$other_posts as $post) { ?> 
    <div id="post<?=@$post['post_id'];?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
                    <h4 class="modal-title modal-title-cus" id="myModalLabel"><i class="fa fa-bullhorn"></i> Posted Announcement</h4>
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
                    <a href="<?php echo base_url('main_c/delete_p').'/'.$post["post_id"];?>" id="deletePost" class="btn btn-danger" >Delete Post</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div id="editPostModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
                <h4 class="modal-title modal-title-cus" id="myModalLabel"><i class="fa fa-bullhorn"></i> Update Modal</h4>
            </div>
            <?php echo form_open_multipart('main_c/edit_p');?>
                <div class="modal-body">
                   <div class="form-group">
                        <input type="hidden" name="post_id_1" id="post_id_1">
                   </div>
                    <div class="form-group">
                        <!-- <?php echo form_label('Title :'); ?> -->
                        <span class="errorMsg"><?php echo form_error('titleName'); ?></span><br />
                        <?php echo form_input(array('id' => 'titleName_1', 'name' => 'titleName_1', 'class' => 'form-control', 'placeholder' => 'Enter the title..', 'value' => set_value('titleName_1'))); ?>
                    </div>
                    <div class="form-group">
                        <span class="errorMsg"><?php echo form_error('articleBody'); ?></span><br />
                        <?php echo form_textarea(array('id' => 'articleBody_1', 'name' => 'articleBody_1', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter the Post Content..', 'style' => 'resize: none', 'value' => set_value('articleBody_1'))); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <?php echo form_submit(array('id' => 'submit', 'name' => 'btnEdit', 'value' => 'Update Post', 'class' => 'btn btn-blue pull-right')); ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="deleteCommentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
                <h4 class="modal-title modal-title-cus" id="myModalLabel"><i class="fa fa-bullhorn"></i> Delete Comment</h4>
            </div>
            <?php echo form_open_multipart('main_c/edit');?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="comment_id_1" class="comment_id_1">
                    </div>
                    <h4>Do you really want to delete the comment</h4>
                    <p><b>Details: </b></p>
                       <p class="comment_1"></p>
                       <p class="name_1"></p>
                       <p class="comment_time"></p>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger btndeleteComment" data-dismiss="modal">Delete</button>

                        <!-- <a href="#" id="deletePost" class="btn btn-danger" >Delete Post</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left">
                    <h3 style="color:dodgerblue"><i class="fa fa-home"></i> Dashboard</h3>
                </div>
                <?php $this->load->view('includes/stats'); ?> 
            </div>
            <div class="row">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bullhorn"></i> Post an Announcement</h3>
                        <ul class="tabs">
                            <li class="active">
                                <a href="#t7" data-toggle="tab">Timeline</a>
                            </li>
                            <li>
                                <a href="#t8" data-toggle="tab">Calendar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box-content">
                        <div class="tab-content">
                            <div class="tab-pane active" id="t7">
                                <!-- <div class="container-fluid"> -->
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="blog-list-post">
                                                    <div class="blog-style-ko_1">
                                                        <?php echo form_open_multipart('main_c/add');?>
                                                            <div class="panel">
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <!-- <?php echo form_label('Title :'); ?> -->
                                                                        <span class="errorMsg"><?php echo form_error('titleName'); ?></span><br />
                                                                        <?php echo form_input(array('id' => 'titleName', 'name' => 'titleName', 'class' => 'form-control', 'placeholder' => 'Enter the title..', 'value' => set_value('titleName'))); ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <span class="errorMsg"><?php echo form_error('articleBody'); ?></span><br />
                                                                        <?php echo form_textarea(array('id' => 'articleBody', 'name' => 'articleBody', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter the Post Content..', 'style' => 'resize: none', 'value' => set_value('articleBody'))); ?>
                                                                    </div>
                                                                    <div class="pull-left">
                                                                        <div class="btn-toolbar">
                                                                            <div class="btn-group">
                                                                                <input type="file" onchange="readURL(this);" id="picture" name="picture" style="display: none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-group">
                                                                            <?php echo form_submit(array('id' => 'submit', 'name' => 'userSubmit', 'value' => 'Upload Post', 'class' => 'btn btn-blue pull-right')); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="btn-toolbar">
                                                                            <div class="btn-group">
                                                                                <a href="#" class="btn btn-danger" rel="tooltip" title="Upload image" id="uploadTrigger">
                                                                                    <i class="fa fa-image"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pull-left">
                                                                        <div id="panel-bottom">
                                                                            <img src="#"  id="preview" class="img-responsive img-circle" />
                                                                            <input type="button" id="clearPicture" class="btn btn-danger" value="X">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php foreach(@$posts as $post) { ?>   
                                                            <div class="preview-img">
                                                                <?php if(file_exists($post['status_image'])) { ?>
                                                                    <img src="<?=base_url();?><?=@$post['status_image'];?>" class="img-responsive" style="height: 400px; width: 100%;">
                                                                <?php } else { }?>
                                                            </div>
                                                            <p id="post_id" class="hidden"><?=@$post['post_id'];?></p>
                                                            <div class="post-content">
                                                                <h4 class="post-title">
                                                                    <div class="pull-left">
                                                                        <a href="#" class="status_title"><?=@$post['status_title'];?></a> 
                                                                    </div>
                                                                    <span>
                                                                        <div class="btn-group">
                                                                            <a href="#editPostModal" class="btn btn-default" rel="tooltip" title="Edit Post" data-toggle="modal" id="editPost">
                                                                                &nbsp;<i class="fa fa-edit"></i>
                                                                            </a>
                                                                        </div>
                                                                    </span>
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
                                                            <form>
                                                                <div class="input-group">
                                                                    <input type="text" placeholder="Write your comment here..." id="comment_0" class="form-control">
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-primary" type="submit" id="btnSendComment_0"><i class="fa fa-share"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div id="display_comment_0"></div>
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
                            <div class="tab-pane" id="t8">
                                <?php $this->load->view('home/calendar');?>
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
        getVal();
        // getNotify();
        // getComment();

        function truncateText(selector, maxLength) {
            var element = document.querySelector(selector),
                truncated = element.innerText;

            if (truncated.length > maxLength) {
                truncated = truncated.substr(0,maxLength) + '...';
            }
            return truncated;
        }
        document.querySelector('.p-limit').innerText = truncateText('.p-limit', 107);
        // document.querySelector('.p-limit-notif').innerText = truncateText('.p-limit-notif', 107);

        $('#userSubmit').click(function() {      
            var titleName = $('#titleName').val();
            var articleBody = $('#articleBody').val();
            if (titleName && articleBody) {
                // $('#picture').val('');
                // alert('jhavsdhj');
            }
        });

        $('#uploadTrigger').click(function() {      
           $('#picture').click();
        });

        $('#clearPicture').click(function() {      
           $('#picture').val(null);
           $("#preview").remove();
           $("#clearPicture").remove();
        });
        
    

        <?php foreach ($posts as $post) { ?>
            $('#editPost').click(function() {    
                var titleName_1 = $(".status_title").text();  
                var articleBody_1 = $(".status_body").text();  
                var post_id_1 = <?=@$post['post_id'];?>;  
                $('#titleName_1').val(titleName_1);
                $('#articleBody_1').val(articleBody_1);
                $('#post_id_1').val(post_id_1);
                console.log(titleName_1,articleBody_1,post_id_1);
            });
            var article_id = "<?=@$post['post_id'];?>";
            $.post('<?php echo base_url();?>index.php/main_c/displaynotification/', {
                article_id:article_id
            },
            function(data) {
                $("#display_notification").html(data);
            });

            $.post('<?php echo base_url();?>index.php/main_c/displaycomments/', {
                article_id:article_id
            },
            function(data) {
                $("#display_comment_0").html(data);
                $("#display_comment_1<?=@$post['post_id'];?>").html(data);
            });

            $('.post_<?=@$post['post_id'];?>').click(function() {
                console.log(article_id);
                $.post('<?php echo base_url();?>index.php/main_c/displaycomments/', {
                    article_id:article_id
                },
                function(data) {
                    $("#display_comment_0display_comment_0<?=@$post['post_id'];?>").html(data);
                    $("#display_comment_1<?=@$post['post_id'];?>").html(data);
                });
            });
        <?php }?> 
        $('.btndeleteComment').click(function() {
            var commentID = $('.comment_id_1').val();
            console.log(commentID);
            $.ajax({
                url: '<?php echo base_url();?>index.php/main_c/delete_c/',
                type: 'POST',
                data: {commentID: commentID}, 
                error: function() {
                    $('#noComment_0').html('0 Comments');
                    $('#noComment_1').html('0 Comments');
                },
                success: function(data) {
                    window.location="<?=base_url();?>main_c"; 
                    $('#noComment_0').html(data + ' Comments');
                    getVal();
                    // getComment();
                }
            });
        });
    });
    function getVal(value) {
        <?php foreach ($posts as $post) { ?>
            var id = "<?=@$post['post_id'];?>";
        <?php } ?>
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
    function getComment(value) {
        var id = $('.comment_id_1').html();
        $.ajax({
            url: '<?php echo base_url();?>index.php/main_c/displaycomments/',
            type: 'POST',
            data: {id: id},
            success: function(data) {
                $("#display_comment_0").html(data);
                $("#display_comment_1").html(data);
            }
        });
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#panel-bottom').show();
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function() {
        $("#btnSendComment_0").click(function() {
            <?php foreach ($posts as $post) { ?>
                var article_id = "<?=@$post['post_id'];?>";
                var comment = $('#comment_0').val();
                var name = "<?php echo $this->session->userdata('back_fullname');?>";
                var dataString = 'name='+ name + '&comment=' + comment + '&article_id=' + article_id;            
            <?php } ?>
            if(comment=='') {
                // alert('Please Give Valid Details');
            } else {
                //$("#display_comment").show();
                $("#display_comment_0").fadeIn(100).html('<img src="<?php echo base_url();?>img/ajax-loader.gif" /> Loading Comment...');
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>main_c/insert_comments/",
                    data: dataString,
                    cache: false,  
                    success: function(data){
                        $('#comment_0').val('');
                        $("#display_comment_0").html(data);
                        $("#display_comment_1").html(data);
                        getVal();
                        getNotify();
                    }
                });
            } return false;
        });

        $("#btnSendComment_1").click(function() {
            <?php foreach ($posts as $post) { ?>
                var article_id = "<?=@$post['post_id'];?>";
                var comment = $("#<?=@$post['post_id'];?>").val();
                var dataString = 'comment=' + comment+ '&article_id=' + article_id;
            <?php } ?>
            if(comment=='') {
                // alert('Please Give Valid Details');
            } else {
                // $("#display_comment").show();
                $("#display_comment_1").fadeIn(100).html('<img src="<?php echo base_url();?>img/ajax-loader.gif" /> Loading Comment...');
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>main_c/insert_comments/",
                    data: dataString,
                    cache: false,  
                    success: function(data){
                        $('.inputComment').val('');
                        $("#display_comment_0").html(data);
                        $("#display_comment_1").html(data);
                        $("#display_notification").html(data);
                        getVal();
                        getNotify();
                    }
                });
            } return false;
        });
        
    });
</script>
