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
                                <a  href="#">
                                    <i class="fa fa-comments"></i>
                                    <?php 
                                    $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM post_comments_tb WHERE cmt_article_id = '<?php echo $post->post_id;?>' ")->result(); 
                                    foreach ($count4 as $value) { 
                                        echo $value->count_rows;
                                    } ?>
                                    Comments      
                                </a>
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
                            <div class="row">
                                <ul class="messages">
                                    <li class="insert">
                                        <form id="message-form" method="POST" action="#">
                                            <div class="text">
                                                <input type="text" class="form-control" id="<?=@$post['post_id'];?>" >
                                            </div>
                                            <div class="submit">
                                                <button type="submit" id="btnSendComment_1_<?=@$post['post_id'];?>">
                                                    <i class="fa fa-share"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
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
                                            <!-- <div class="row"> -->
                                                <div class="blog-list-post">
                                                    <div class="blog-style-ko">
                                                        <?php echo form_open_multipart('dashboard/add');?>
                                                            <div class="panel">
                                                                <div class="panel-body">
                                                                    <div class="form-group">
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
                                                                                <input type="file" onchange="readURL(this);" id="picture" name="picture" style="display: none; ">
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
                                                                            <span><img src="#"  id="preview" class="img-responsive img-circle" />
                                                                                <input type="button" id="clearPicture" class="btn btn-danger" value="X"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php foreach(@$posts as $post) { ?>   
                                                            <div class="preview-img">
                                                                <?php if(file_exists($post['status_image'])) { ?>
                                                                    <img src="<?=base_url();?><?=@$post['status_image'];?>" class="img-responsive img-rounded" style="height: 300px; width: 100%;">
                                                                <?php } else { }?>
                                                            </div>
                                                            <p id="post_id" class="hidden"><?=@$post['post_id'];?></p>
                                                            <div class="post-content">
                                                                <h4 class="post-title">
                                                                    <a href="#"><?=@$post['status_title'];?></a>
                                                                </h4>
                                                                <div class="post-meta">
                                                                    <span class="date">
                                                                        <i class="fa fa-calendar"></i><?=@$post['status_time'];?>
                                                                    </span>
                                                                    <span class="comments">
                                                                        <i class="glyphicon-thumbs_up"></i>
                                                                        <a href="#">50 likes</a>
                                                                    </span>
                                                                </div>
                                                                <div class="post-text">
                                                                    <p><?=@$post['status_body'];?></p>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                        <div class="post-comments">
                                                            <h3>Comments</h3>
                                                            <div id="display_comment_0">
                                                                <div class="row">
                                                                    <ul class="messages">
                                                                        <li class="insert">
                                                                            <form id="message-form" method="POST" action="#">
                                                                                <div class="text">
                                                                                    <?php
                                                                                    $name = array(
                                                                                        'id' => 'comment',
                                                                                        'name' => 'comment',
                                                                                        'class' => 'form-control',
                                                                                        'placeholder' => 'Write your comment here...'
                                                                                    );
                                                                                    echo form_input($name);
                                                                                    ?>
                                                                                </div>
                                                                                <div class="submit">
                                                                                    <button type="submit" id="btnSendComment_0">
                                                                                        <i class="fa fa-share"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- <div class="row"> -->
                                                <div class="blog-style">
                                                    <h4 class='blog-widget-title'> Other posts</h4>
                                                    <ul class="blog-widget-recent-posts">
                                                        <?php foreach(@$other_posts as $post) { ?>
                                                            <li>
                                                                <a href="#post<?=@$post['post_id'];?>" id="post<?=@$post['post_id'];?>" data-toggle="modal">
                                                                    <?=@$post['status_title'];?>
                                                                    <span class="details">
                                                                        <span class="date"><i class="fa fa-calendar"></i><?=@$post['status_time'];?></span>
                                                                    </span>
                                                                    
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>
                            <div class="tab-pane" id="t8">
                                <?php $this->load->view("home/calendar"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {   

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
            var article_id = "<?=@$post['post_id'];?>";
            $.post('<?php echo base_url();?>index.php/dashboard/displaynotification/', {
                article_id:article_id
            },
            function(data) {
                $("#display_notification").html(data);
                $(".count").html(data.unseen_notification);
            });

            $.post('<?php echo base_url();?>index.php/dashboard/displaycomments/', {
                article_id:article_id
            },
            function(data) {
                $("#display_comment_0").html(data);
                $("#display_comment_1").html(data);
            });
        <?php }?> 
    });

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
                console.log(article_id);
                var name = "<?php echo $this->session->userdata('back_fullname');?>";
                var comment = $("#comment").val();
                var dataString = 'name='+ name + '&comment=' + comment+ '&article_id=' + article_id;            
            <?php } ?>
            if(comment=='') {
            // alert('Please Give Valid Details');
        } else {
                //$("#display_comment").show();
                $("#display_comment_0").fadeIn(100).html('<img src="<?php echo base_url();?>img/ajax-loader.gif" /> Loading Comment...');
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>dashboard/insert_comments/",
                    data: dataString,
                    cache: false,  
                    success: function(data){
                        $("#display_comment_0").html(data);
                        $("#display_comment_1").html(data);
                        // $("#display_comment").fadeIn(slow);
                    }
                });
            } return false;
        });

        <?php foreach(@$other_posts as $post) { ?> 
            $("#btnSendComment_1_<?=@$post['post_id'];?>").click(function() {
                <?php foreach ($posts as $post) { ?>
                    var article_id = "<?=@$post['post_id'];?>";
                    console.log(article_id);
                    var name = "<?php echo $this->session->userdata('back_fullname');?>";
                    var comment = $("#<?=@$post['post_id'];?>").val();
                    var profile = "<?php echo $this->session->userdata('profile');?>";
                    var dataString = 'name='+ name + '&comment=' + comment+ '&article_id=' + '&profile' + m_profile + article_id;

                <?php } ?>
                if(comment=='') {
                // alert('Please Give Valid Details');
            } else {
                $("#display_comment").show();
                $("#display_comment_1").fadeIn(100).html('<img src="<?php echo base_url();?>img/ajax-loader.gif" /> Loading Comment...');
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>dashboard/insert_comments/",
                    data: dataString,
                    cache: false,  
                    success: function(data){
                        $("#display_comment_0").html(data);
                        $("#display_comment_1").html(data);
                            // $("#display_comment").fadeIn(slow);
                        }
                    });
            } return false;
            $('#comment').val();
        });
        <?php } ?>
    });
</script>
