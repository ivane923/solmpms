<form class="form-horizontal">
    <div class="row">
        <div class="box box-color box-bordered green">
            <div class="box-title">
                <h3>
                    <i class="fa fa-bars"></i>
                    Timeline
                </h3>
            </div>
            <div class="box-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="blog-list-post">
                                    <?php echo $this->session->flashdata('success_msg'); ?>
                                    <?php echo $this->session->flashdata('error_msg'); ?>
                                    <!-- <form role="form" method="post" enctype="multipart/form-data"> -->
                                    <?php echo form_open_multipart('dashboard/add');?>
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label>Picture</label>
                                                    <input class="form-control" type="file" name="picture" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input class="form-control" type="text" name="name" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-warning" name="userSubmit" value="Add">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php foreach(@$posts as $post) { ?>   
                                        <div class="preview-img">
                                            <a href="">
                                                <img src="img/demo/shrine.jpg" class="img-responsive" alt=""  style="border-radius: 5px; height: 450px; width: 100%;">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title">
                                                <a href="#"><?=@$post['status_title'];?></a>
                                            </h4>
                                            <div class="post-meta">
                                                <span class="date">
                                                    <i class="fa fa-calendar"></i><?=@$post['status_time'];?>
                                                </span>
                                                <span class="comments">
                                                    <i class="fa fa-comments"></i>
                                                    <a href="#">5 comments</a>
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
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="img/demo/user-1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Doe
                                                    <small>15 days ago</small>
                                                </h4>
                                                <p>Lorem ipsum Consectetur voluptate dolore sint dolor esse anim. Lorem ipsum Eiusmod non dolor in adipisicing quis ullamco cillum anim mollit proident.</p>
                                                <div class="media-actions">
                                                    <a href="#" class='btn btn-small'>
                                                        <i class="fa fa-mail-reply"></i>Reply</a>
                                                </div>
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img src="img/demo/user-2.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Max Mustermann
                                                            <small>16 days ago</small>
                                                        </h4>
                                                        <p>Lorem ipsum Et consequat cupidatat nulla aliqua exercitation consequat aute ea veniam ut.</p>
                                                        <div class="media-actions">
                                                            <a href="#" class='btn btn-small'>
                                                                <i class="fa fa-mail-reply"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img src="img/demo/user-3.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Max Mustermann
                                                            <small>16 days ago</small>
                                                        </h4>
                                                        <p>Lorem ipsum Et consequat cupidatat nulla aliqua exercitation consequat aute ea veniam ut.</p>
                                                        <div class="media-actions">
                                                            <a href="#" class='btn btn-small'>
                                                                <i class="fa fa-mail-reply"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="img/demo/user-4.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Doe
                                                    <small>14 days ago</small>
                                                </h4>
                                                <p>Lorem ipsum Consectetur voluptate dolore sint dolor esse anim. Lorem ipsum Eiusmod non dolor in adipisicing quis ullamco cillum anim mollit proident.</p>
                                                <div class="media-actions">
                                                    <a href="#" class='btn btn-small'>
                                                        <i class="fa fa-mail-reply"></i>Reply</a>
                                                </div>
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img src="img/demo/user-5.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Username #1
                                                            <small>15 days ago</small>
                                                        </h4>
                                                        <p>Lorem ipsum Pariatur ut consectetur commodo fugiat quis cupidatat ut consectetur sed ullamco ea incididunt. Lorem ipsum Eiusmod sit magna officia magna in aliquip pariatur. Lorem ipsum Nostrud in veniam anim quis quis nulla incididunt amet
                                                            elit ad esse do. Lorem ipsum Magna fugiat enim ex tempor cupidatat est consequat qui Excepteur.</p>
                                                        <div class="media-actions">
                                                            <a href="#" class='btn btn-small'>
                                                                <i class="fa fa-mail-reply"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="img/demo/user-6.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Username #2
                                                    <small>13 days ago</small>
                                                </h4>
                                                <p>Lorem ipsum Dolore id anim Duis exercitation exercitation in aliqua incididunt commodo. Lorem ipsum Adipisicing sunt ex ad esse fugiat laborum voluptate aute proident.</p>
                                                <div class="media-actions">
                                                    <a href="#" class='btn btn-small'>
                                                        <i class="fa fa-mail-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="img/demo/user-1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Username #3
                                                    <small>5 days ago</small>
                                                </h4>
                                                <p>Lorem ipsum Cillum Ut voluptate tempor Ut consectetur qui.</p>
                                                <div class="media-actions">
                                                    <a href="#" class='btn btn-small'>
                                                        <i class="fa fa-mail-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div style="border:0px; border-top: 7px solid dodgerblue;margin-top: 10px;  ; border-bottom: 3px solid dodgerblue;border-radius: 5px;">
                                <h4 class='blog-widget-title'> Other posts</h4>
                                <ul class="blog-widget-recent-posts">
                                    <?php foreach(@$other_posts as $post) { ?>  
                                        <li>
                                            <a href="">
                                                <?=@$post['status_title'];?>
                                                <span class="details">
                                                    <span class="date">
                                                        <i class="fa fa-calendar"></i><?=@$post['status_time'];?></span>
                                                </span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


