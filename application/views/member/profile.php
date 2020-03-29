<?php $this->load->view('includes/header_1'); ?>
<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left">
                    <h3>
                        <i class="fa fa-user"></i> My Account</h>
                </div>
            </div>
            <div class="row" style="margin-top: -30px">
                <div class="box">
                    <div class="box-title">
                        
                    </div>
                    <div class="box-content nopadding">
                        <ul class="tabs tabs-inline tabs-top">
                            <li class="tab-user tab-record active">
                                <a href="#record" data-toggle="tab"><i class="fa fa-book"></i>Profile</a>
                            </li>
                            <li class="tab-user tab-donation">
                                <a href="#donation" data-toggle="tab"><i class="fa fa-money"></i>My Sermons</a>
                            </li>
                        </ul>
                        <div class="tab-content padding tab-content-inline tab-content-bottom">
                            <div class="tab-pane tab-record active" id="record">
                                <?php echo form_open_multipart('dashboard/add');?>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">
                                                    <img src="img/demo/user-1.jpg" style="width: 100%; height: 100%;" alt="">
                                                </div>
                                                <div>
                                                    <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="...">
                                                    </span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <?php echo form_label('First Name :'); ?>
                                                    <span class="errorMsg"><?php echo form_error('titleName'); ?></span><br />
                                                    <?php echo form_input(array('id' => 'titleName', 'name' => 'titleName', 'class' => 'form-control', 'placeholder' => 'Enter the title..', 'value' => set_value('titleName'))); ?>
                                                </div>
                                            </div>
                                             <div class="col-sm-2">
                                                <div class="form-group">
                                                    <?php echo form_label('MI :'); ?>
                                                    <span class="errorMsg"><?php echo form_error('titleName'); ?></span><br />
                                                    <?php echo form_input(array('id' => 'titleName', 'name' => 'titleName', 'class' => 'form-control', 'placeholder' => 'Enter the title..', 'value' => set_value('titleName'))); ?>
                                                </div>
                                            </div>
                                             <div class="col-sm-5">
                                                <div class="form-group">
                                                    <?php echo form_label('Last Name :'); ?>
                                                    <span class="errorMsg"><?php echo form_error('titleName'); ?></span><br />
                                                    <?php echo form_input(array('id' => 'titleName', 'name' => 'titleName', 'class' => 'form-control', 'placeholder' => 'Enter the title..', 'value' => set_value('titleName'))); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php echo form_label('Address :'); ?>
                                                    <span class="errorMsg"><?php echo form_error('articleBody'); ?></span><br />
                                                    <?php echo form_textarea(array('id' => 'articleBody', 'name' => 'articleBody', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter the Post Content..', 'style' => 'resize: none', 'value' => set_value('articleBody'))); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <?php echo form_label('Email Address :'); ?>
                                                    <span class="errorMsg"><?php echo form_error('titleName'); ?></span><br />
                                                    <?php echo form_input(array('id' => 'titleName', 'name' => 'titleName', 'class' => 'form-control', 'placeholder' => 'Enter the title..', 'value' => set_value('titleName'))); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
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
                                                                <i class="fa fa-image"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <hr> -->
                                                <div class="pull-left">
                                                    <div id="panel-bottom">
                                                        <span><img src="#"  id="preview" class="img-responsive img-circle" />
                                                        <input type="button" id="clearPicture" class="btn btn-danger" value="X"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </form>  
                            </div>
                            <div class="tab-pane tab-donation" id="donation">
                                <div class="row">
                                    <div class="box">
                                        <h4 class="text-center">It's been a great day!!</h4>
                                        <h3 class="text-center">
                                            <a href="#viewConversionRequirements" class="btn btn-inverse btn-rad" data-toggle="modal">
                                                <i class="glyphicon-share"></i>
                                                Add daily sermon&nbsp;&nbsp;
                                            </a>
                                        </h3>
                                        <br><br>
                                        <?php $this->load->view('priest/sermon'); ?> 
                                        <div class="box-content">
                                            <div class="container-fluid">
                                                <div class="row">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
