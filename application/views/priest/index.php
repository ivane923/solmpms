<?php $this->load->view('includes/header_0'); ?>

<div id="addSermonModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Sermon</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('priest/add_sermon');?>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-group">
                                <span class="errorMsg"><?php echo form_error('articleBody_0'); ?></span><br />
                                <?php echo form_textarea(array('id' => 'articleBody', 'name' => 'articleBody', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter your sermon here..', 'style' => 'resize: none', 'value' => set_value('articleBody'))); ?>
                            </div>
                            <div class="form-group">
                                <span class="errorMsg"><?php echo form_error('title_0'); ?></span><br />
                                <?php echo form_input(array('id' => 'title_0', 'name' => 'title_0', 'class' => 'form-control', 'placeholder' => 'Enter your sermon title ..', 'value' => set_value('title_0'))); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <?php echo form_submit(array('id' => 'submit', 'name' => 'userSubmit', 'value' => 'Upload Post', 'class' => 'btn btn-blue pull-right')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Close Window</button>
            </div>
        </div>
    </div>  
</div>

<div id="viewSermonModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Sermon</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('priest/add_sermon');?>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="form-group">
                                <span class="errorMsg"><?php echo form_error('articleBody_1'); ?></span><br />
                                <?php echo form_textarea(array('id' => 'articleBody_1', 'name' => 'articleBody_1', 'class' => 'form-control', 'wrap' => 'hard', 'placeholder' => 'Enter your sermon here..', 'style' => 'resize: none', 'value' => set_value('articleBody'))); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <?php echo form_submit(array('id' => 'submit', 'name' => 'userSubmit', 'value' => 'Upload Post', 'class' => 'btn btn-blue pull-right')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Close Window</button>
            </div>
        </div>
    </div>  
</div>

<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <?php  if($msg=$this->session->flashdata('msg')): 
                $msg_class=$this->session->flashdata('msg_class')
                ?>
                <div id="gritter-notice-wrapper">
                    <div id="gritter-item-1" class="gritter-item-wrapper">
                        <div class="gritter-top"></div>
                        <div class="gritter-item">
                            <div class="gritter-close"></div>
                                <div class="gritter-without-image">
                                    <p><?= $msg; ?></p>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        <div class="gritter-bottom"></div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="page-header">
                <div class="pull-left">
                    <h3>
                        <i class="fa fa-book"></i> My Sermons
                    </h3>
                </div>
                <?php $this->load->view('includes/stats'); ?> 
            </div>
            <div class="row" style="margin-top: -20px">
                <div class="box box-color">
                    <div class="box-title">
                        <h3>
                            <i class="fa fa-table"></i>
                            List of Sermon
                        </h3>
                        <div class="pull-right">
                            <a href="#addSermonModal" data-target="#addSermonModal" data-toggle="modal" class="btn btn-primary" style="margin-right: 5px;">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin table-bordered sermonTable" id="sermonTable" style="overflow-x:auto;">
                            <thead>   
                                <tr>
                                    <th>Sermons</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(@$sermons as $sermon) { ?>
                                <tr rel="<?=@$sermon['sermon_id'];?>">
                                    <td class="titleTB"><?=@$sermon['title'];?></td>
                                    <td class="date_addedTB"><?=@$sermon['date_added'];?></td>
                                    <td style="width: 95px;">
                                        <span class="hidden sermonTB"><?=@$sermon['content'];?></span>
                                        <span class="hidden user_id"><?=@$sermon['user_id'];?></span>
                                        <a class="btn btn-orange btn-small btnView"><i class="glyphicon-list"></i> View Details</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
    $('.sermonTable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        "sPaginationType": "full_numbers",
        "fnDrawCallback": function(oSettings) {
            $('.btnView').click(function(){
                var el = $(this).closest('tr');
                var sermon_id = el.attr('rel');
                var titleTB = el.find('.titleTB').html();
                var sermonTB = el.find('.sermonTB').html();
                var date_addedTB = el.find('.date_addedTB').html();
           
                // $('.operation').html("add");
                // $('.baptism_id').html(baptism_id);
                // $('.baptism_id').val(baptism_id);
                // $('.fname').val(fnameTB);
                // $('.mname').val(mnameTB);
                // $('.lname').val(lnameTB);
                // $('.chosen-select').trigger("chosen:updated");

                $('#viewSermonModal').modal('show');

            });
            
        }
    });
});
</script>