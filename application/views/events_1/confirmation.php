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
ajhvshajdb
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
                                List of Records
                            </h3>

                            <a href="#">
                            <h3 class="pull-right btnNewUser" style="margin-right: 12px;">
                                <i class="glyphicon-user_add"></i>Add New
                            </h3>
                            </a>
                        </div>
                        <div class="box-content nopadding">
                            <table class="table table-hover table-nomargin table-bordered userTable">
                                <thead>
                                    <tr>
                                        <th>FirstName</th>
                                        <th>Lastname</th>
                                        <th>Date Added</th>
                                        <th>Display</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach(@$baptismals as $baptismal) { ?>
                                    <tr rel="<?=@$baptismal['baptism_id'];?>">
                                        <td class="fname"><?=@$baptismal['fname'];?></td>
                                        <td class="lname"><?=@$baptismal['lname'];?></td>
                                        <td class="date_added"><?=@$baptismal['date_added'];?></td>
                                        <td style="width: 95px;">
                                            <!-- <span class="company_id hidden"><?=@$user['company_id']?></span>
                                            <span class="hidden username"><?=@$user['username'];?></span>
                                            <span class="hidden middlename"><?=@$user['middlename'];?></span>
                                            <span class="hidden position_id"><?=@$user['position_id'];?></span>
                                            <span class="hidden rate" rel="<?=@$user['rate'];?>"><?=number_format(@$user['rate'],2,'.',',');?></span>
                                            <span class="hidden computation_type"><?=@$user['computation_type'];?></span>
                                            <span class="hidden allow_bonus_flag"><?=@$user['allow_bonus_flag'];?></span>
                                            <span class="hidden emp_flag"><?=@$user['emp_flag'];?></span>
                                            <span class="hidden status_flag"><?=@$user['status_flag'];?></span>
                                            <span class="hidden user_access"><?=@$user['access_type'];?></span>
                                            <span class="hidden email_address"><?=@$user['email_address'];?></span> -->

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
                <div class="col-sm-8">
                    <div class="box box-color box-bordered green">
                        <div class="box-content nopadding">
                         <div class="box box-bordered box-color">
                            <div class="box-title">
                                <h3>
                                    <i class="fa fa-th-list"></i>Baptismal Information</h3>
                            </div>
                            <div class="box-content padding">
                                <form action="#" method="get" class="form-vertical">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">First Name:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="First Name" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">M.I:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="M.I" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Last Name:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Last Name" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Date of Baptism:</label>
                                            <input type="date" name="textfield" id="textfield" placeholder="Date of Baptism" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Birth Date:</label>
                                            <input type="date" name="textfield" id="textfield" placeholder="Birth Date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Age:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Age" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Birth Place:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Birth Place" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Father's Name:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Father's Name" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Father's Birth Place:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Father's Birth Place" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Mother's Name:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Mother's Name" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Mother's Birth Place:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Mother's Birth Place" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Address:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Cellphone no.</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Cellphone no." class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">E-mail:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="E-mail" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Marriage:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Marriage" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Name Of Informant:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Name Of Informant" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <h4>Baptist Person Status</h4>
                                <div class="">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Doc. Status:
                                            </label>
                                                <select class="form-control cus_form" name="table">
                                                    <option selected="selected" value="11:00am">Select Status
                                                    </option>
                                                    <option value="Table 1">Processed</option>
                                                    <option value="Table 1">Unprocessed</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Attendance:</label>
                                            <select class="form-control cus_form" name="table">
                                                    <option selected="selected" value="11:00am">Select Status
                                                    </option>
                                                    <option value="Table 1">Present</option>
                                                    <option value="Table 1">Absent</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <h4>God Father and God Mother</h4>
                                <div class="">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">God Father:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="God Father" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Address:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">God Mother:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="God Mother" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label">Address:</label>
                                            <input type="text" name="textfield" id="textfield" placeholder="Address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div><!-- End col-md-6 -->
                        </div>
                    </div>
                </div>
                <!-- End Employee Details-->
            </div>
        </div>
    </div>
</div>

    