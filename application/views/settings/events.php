<?php $this->load->view('common/header'); ?>

<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete User</h4>
            </div>
            <div class="modal-body">
                <span class="del_username hidden"></span>
                <p> Are you sure you want to remove user? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Close Window</button>
                <button type="button" class="btn btn-primary btnDeleteSave">Yes, Remove User</button>
            </div>
        </div>
    </div>
</div>

<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <!-- <?php $this->load->view('common/stats'); ?> -->
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box box-color box-bordered green">
                        <div class="box-title">
                            <h3>
                                <i class="fa fa-table"></i>
                                User List
                            </h3>

                            <a href="#">
                            <h3 class="pull-right btnNewUser" style="margin-right: 12px;">
                                <i class="glyphicon-user_add"></i>New User
                            </h3>
                            </a>
                        </div>
                        <div class="box-content nopadding">
                            <table class="table table-hover table-nomargin table-bordered userTable">
                                <thead>
                                    <tr>
                                        <th>Lastname</th>
                                        <th>Firstname</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach(@$users as $user) { ?>
                                    <tr rel="<?=@$user['user_id'];?>">
                                        <td class="lastname"><?=@$user['lastname'];?></td>
                                        <td class="firstname"><?=@$user['firstname'];?></td>
                                        <td style="width: 95px;">
                                            <span class="company_id hidden"><?=@$user['company_id']?></span>
                                            <span class="hidden username"><?=@$user['username'];?></span>
                                            <span class="hidden middlename"><?=@$user['middlename'];?></span>
                                            <span class="hidden position_id"><?=@$user['position_id'];?></span>
                                            <span class="hidden rate" rel="<?=@$user['rate'];?>"><?=number_format(@$user['rate'],2,'.',',');?></span>
                                            <span class="hidden computation_type"><?=@$user['computation_type'];?></span>
                                            <span class="hidden allow_bonus_flag"><?=@$user['allow_bonus_flag'];?></span>
                                            <span class="hidden emp_flag"><?=@$user['emp_flag'];?></span>
                                            <span class="hidden status_flag"><?=@$user['status_flag'];?></span>
                                            <span class="hidden user_access"><?=@$user['access_type'];?></span>
                                            <span class="hidden email_address"><?=@$user['email_address'];?></span>

                                            <a class="btn btn-orange btn-small btnView"><i class="glyphicon-list"></i> View Details</a>                                            
                                            <!--a href="#editModal" data-toggle="modal" class="btn btn-primary btn-small btnEdit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-small btnDelete">
                                                <i class="fa fa-trash-o"></i>
                                            </a-->
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Events Information -->
                <div class="col-sm-12">
                    <div class="box box-color box-bordered green">
                        <div class="box-title">
                            <h3>
                                <i class="fa fa-user"></i>
                                Account Management
                            </h3>
                            <a href="#addModal" data-toggle="modal">
                                <h3 class="pull-right" style="margin-right: 12px;">
                                    <!-- <i class="glyphicon-user_remove"></i>Remove User -->
                                </h3>
                            </a>
                        </div>
                        <div class="box-content nopadding">
                            <ul class="tabs tabs-inline tabs-top">
                                <li class="tab-user tab-baptismal active">
                                    <a href="#baptismal" data-toggle="tab"><i class="fa fa-user"></i>Baptismal</a>
                                </li>
                                <li class="tab-user tab-confirmation">
                                    <a href="#confirmation" data-toggle="tab"><i class="fa fa-user">Confirmation</i></a>
                                </li>
                                <!-- <li class="tab-user tab-conversion">
                                    <a href="#conversion" data-toggle="tab"><i class="fa fa-user"></i>Conversion</a>
                                </li>
                                <li class="tab-user tab-communion">
                                    <a href="#" data-toggle="tab"><i class="fa fa-user"></i>Communion</a>
                                </li>
                                <li class="tab-user tab-death">
                                    <a href="#death" data-toggle="tab"><i class="fa fa-user"></i>Death</a>
                                </li>
                                <li class="tab-user tab-matrimony">
                                    <a href="#matrimoy" data-toggle="tab"><i class="fa fa-user"></i>Matrimony</a>
                                </li> -->
                            </ul>
                            <div class="tab-content padding tab-content-inline tab-content-bottom">
                                <div class="tab-pane tab-baptismal active" id="baptismal">
                                    <?php $this->load->view('events/baptismal'); ?>
                                </div>
                                <div class="tab-pane tab-confirmation" id="confirmation">
                                    <?php $this->load->view('events/confirmation'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Employee Details-->
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
    $('.tab-user, .tab-pane').addClass('hidden');
    $('.tab-user, .tab-pane').removeClass('active');
                
    // $('.tab-priest').click(function() {
    //     $('.box-user').removeClass('hidden');
    // });
}
    