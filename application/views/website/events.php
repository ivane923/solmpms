<?php $this->load->view('includes/header_1'); ?>
<div id="viewBaptismalRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/baptismal_req'); ?>
</div>
<div id="viewConfirmationRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/confirmation_req'); ?>
</div>
<div id="viewConversionRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/conversion_req'); ?>
</div>
<div id="viewCommunionRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/communion_req'); ?>
</div>
<div id="viewDeathRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/death_req'); ?>
</div>
<div id="viewMatrimonyRequirements" class="modal fade" role="dialog">
    <!-- matrimony -->
</div>

<div id="content" class="container-fluid">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left"><h3 style="color:dodgerblue;"><i class="glyphicon glyphicon-more_items"></i> Events Services</h3></div>
                <div class="pull-right">
                    <!-- <button type="submit" class="btn btn-primary"" id="btnDirectTransaction"><i class="glyphicon glyphicon-sort"></i> View Records</button> -->
                </div>      
            </div>
            <hr>
            <div class="row">
                <div class="container-fluid">
                    <br>
                    <div class="col-sm-4">
                        <br>
                        <div class="box-content nopadding">
                            <h4><i class="fa fa-book"></i> Baptismal </h4>
                            <hr>
                            <img src="<?=base_url();?>img/events/baptism.jpg" class="img-responsive center-block">
                            <div class="events-panel-body">
                                <p class="text-justify">Confirmation in the Christian Church is the sacrament which reaffirms a person's status as a Catholic or a Protestant. The Catholic sees the confirmation as a rite in which grace falls over the person as they announce their commitment to God and the Church.</p>
                            </div>
                        </div>
                       <?php if ($this->session->userdata('user_id')<>'') { ?>
                        <button type="submit" class="btn btn-primary btn-rad" id="btnreserveBaptismal"><i class="glyphicon glyphicon-log_book"></i> Reserve now</button>
                        <?php } else { ?>
                        <a href="#viewBaptismalRequirements" data-toggle="modal">
                            <button type="button" class="btn btn-danger btn-rad"><i class="glyphicon-circle_info"></i> View Requirements</button>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <div class="box-content nopadding" style="height: 430px;">
                            <h4><i class="fa fa-book"></i> Confirmation </h4>
                            <hr>
                            <img src="<?=base_url();?>img/events/confirmation.jpg" class="img-responsive center-block">
                            <div class="events-panel-body" style="margin: 5px 5px 5px 5px;">
                                <p class="text-justify">Confirmation in the Christian Church is the sacrament which reaffirms a person's status as a Catholic or a Protestant. The Catholic sees the confirmation as a rite in which grace falls over the person as they announce their commitment to God and the Church.</p>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('user_id')<>'') { ?>
                        <button type="submit" class="btn btn-primary btn-rad" id="btnreserveConfirmation"><i class="glyphicon glyphicon-log_book"></i> Reserve now</button>
                        <?php } else { ?>
                        <a href="#viewConfirmationRequirements" data-toggle="modal">
                            <button type="button" class="btn btn-danger btn-rad"><i class="glyphicon-circle_info"></i> View Requirements</button>
                        </a>
                        <?php } ?>  
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <div class="box-content nopadding" style="height: 430px;">
                            <h4><i class="fa fa-book"></i> Conversion </h4>
                            <hr>
                            <img src="<?=base_url();?>img/events/convertion.jpg" class="img-responsive center-block">
                            <div class="events-panel-body" style="margin: 5px 5px 5px 5px;">
                                <p class="text-justify">Conversion to Christianity is a process of religious conversion in which a previously non-Christian person converts to Christianity.</p>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('user_id')<>'') { ?>
                        <button type="submit" class="btn btn-primary btn-rad" id="btnreserveConversion"><i class="glyphicon glyphicon-log_book"></i> Reserve now</button>
                        <?php } else { ?>
                        <a href="#viewConversionRequirements" data-toggle="modal">
                            <button type="button" class="btn btn-danger btnSaveInfo btn-rad"><i class="glyphicon-circle_info"></i> View Requirements</button>
                        </a>
                        <?php } ?>
                    </div>
                    <br>
                </div>
            </div><!-- !container -->
            <div class="row">
                <div class="container-fluid">
                    <br>
                   <div class="col-sm-4">
                        <br>
                        <div class="box-content nopadding"  style="height: 420px;">
                            <h4><i class="fa fa-book"></i> Communion </h4>
                            <hr>
                            <img src="<?=base_url();?>img/events/communion.jpg" class="img-responsive center-block">
                            <div class="events-panel-body" style="margin: 5px 5px 5px 5px;">
                                <p class="text-justify">The celebration of the First Communion has always been a childhood hallmark as one of the happiest and most unforgettable days in a child’s life</p>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('user_id')<>'') { ?>
                        <button type="submit" class="btn btn-primary btn-rad" id="btnreserveCommunion"><i class="glyphicon glyphicon-log_book"></i> Reserve now</button>
                        <?php } else { ?>
                        <a href="#viewCommunionRequirements" data-toggle="modal">
                            <button type="button" class="btn btn-danger btnSaveInfo btn-rad"><i class="glyphicon-circle_info"></i> View Requirements</button>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <div class="box-content nopadding" style="height: 420px;">
                            <h4><i class="fa fa-book"></i> Death </h4>
                            <hr>
                            <img src="<?=base_url();?>img/events/death.jpg" class="img-responsive center-block">
                            <div class="events-panel-body" style="margin: 5px 5px 5px 5px;">
                                <p class="text-justify">Prayer for the souls in purgatory. Eternal rest grant unto them, O Lord, and let perpetual light shine upon them. May the souls of the faithful departed, through the mercy of God, rest in peace. Amen. </p>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('user_id')<>'') { ?>
                        <button type="submit" class="btn btn-primary btn-rad" id="btnreserveDeath"><i class="glyphicon glyphicon-log_book"></i> Reserve now</button>
                        <?php } else { ?>
                        <a href="#viewDeathRequirements" data-toggle="modal">
                            <button type="button" class="btn btn-danger btnSaveInfo btn-rad"><i class="glyphicon-circle_info"></i> View Requirements</button>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <div class="box-content nopadding" style="height: 420px;">
                            <h4><i class="fa fa-book"></i> Matrimony </h4>
                            <hr>
                            <img src="<?=base_url();?>img/events/matrimony.jpg" class="img-responsive center-block">
                            <div class="events-panel-body" style="margin: 5px 5px 5px 5px;">
                                <p class="text-justify">Marriage is the beginning—the beginning of the family—and is a life-long commitment. It also provides an opportunity to grow in selflessness as you serve your wife and children. Marriage is more than a physical union; it is also a spiritual and emotional union. </p>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('user_id')<>'') { ?>
                        <button type="submit" class="btn btn-primary btn-rad" id="btnLogin"><i class="glyphicon glyphicon-log_book"></i> Reserve now</button>
                        <?php } else { ?>
                        <a href="#viewMatrimonyRequirements" data-toggle="modal">
                            <button type="button" class="btn btn-danger btnSaveInfo btn-rad"><i class="glyphicon-circle_info"></i> View Requirements</button>
                        </a>
                        <?php } ?>
                    </div>
                </div>

            </div><!-- !container -->
        </div>
    </div>
</div>
<?php $this->load->view('includes/footer_1'); ?> 

<script type="text/javascript">
$(document).ready(function() {

    $('#btnreserveBaptismal').click(function(){
        window.location="<?=base_url();?>baptismal_reg";    
    });
    $('#btnrequirementBaptismal').click(function(){
        window.location="<?=base_url();?>baptismal_reg";    
    });

    $('#btnreserveConfirmation').click(function(){
        window.location="<?=base_url();?>confirmation_reg";    
    });
     $('#btnrequirementConfirmation').click(function(){
        window.location="<?=base_url();?>confirmation_reg";    
    });

    $('#btnreserveDeath').click(function(){
        window.location="<?=base_url();?>death_reg";    
    });
    $('#btnrequirementDeath').click(function(){
        window.location="<?=base_url();?>death_reg";    
    });
});
</script>

 