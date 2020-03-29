<?php $this->load->view('includes/header_0'); ?>

<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <!-- <div class="pull-left">
                    <h3 style="color:dodgerblue"><i class="fa fa-users"></i> Users Account</h3>
                </div> -->
            </div>
            <div class="row" style="margin-top: -35px;">
                <div class="box">
                    <div class="box-title">
                        <h3 style="color: dodgerblue"><i class="fa fa-users"></i> Users Account</h3>
                    </div> 
                    <div class="box-content nopadding">
                        <ul class="tabs tabs-inline tabs-top">
                            <li class="tab-user tab-employee active">
                                <a href="#employee" data-toggle="tab"><i class="glyphicon-parents"></i> Employee</a>
                            </li>
                            <li class="tab-user tab-priest">
                                <a href="#priest" data-toggle="tab"><i class="fa fa-user"></i>Priest</a>
                            </li>
                            <li class="tab-user tab-member">
                                <a href="#member" data-toggle="tab"><i class="fa fa-group"></i>Member</a>
                            </li>
                        </ul>
                        <div class="tab-content padding tab-content-inline tab-content-bottom">
                            <div class="tab-pane tab-employee active" id="employee">
                                <?php $this->load->view('users/employee'); ?>
                            </div>
                            <div class="tab-pane tab-priest" id="priest">
                                <?php $this->load->view('users/priest'); ?>
                            </div>
                            <div class="tab-pane tab-member" id="member">
                                <?php $this->load->view('users/member'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".chosen-select").chosen({
        disable_search_threshold: 10,
        search_contains: true,
        width: '100%'
    });

    $(document).ready(function() {
        <?php foreach ($posts as $post) { ?>
            var article_id = "<?=@$post['post_id'];?>";
            $.post('<?php echo base_url();?>index.php/main_c/displaynotification/', {
                article_id:article_id
            },
            function(data) {
                $("#display_notification").html(data);
                $(".count").html(data.unseen_notification);
            });
        <?php }?> 

    });
</script>
