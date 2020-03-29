
<div id="addEmployeeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add <?=@$title;?></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <center><span id="add_error" style="color: #ff0000;"></span></center>
                    <div class="form-group">
                        <label class="control-label col-sm-3"><?=@$title;?> Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control add_name">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btnAddSave">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<form class="form-horizontal">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="box box-color box-bordered green" style="overflow-x:auto;">
                    <div class="box-title">
                        <h3>
                            <i class="fa fa-table"></i>
                            Employee Account
                        </h3>

                        <a href="#addEmployeeModal" data-toggle="modal">
                        <h3 class="pull-right" style="margin-right: 12px;">
                            <i class="glyphicon-circle_plus"></i>New
                        </h3>
                        </a>
                    </div>
                    <table class="table table-hover table-nomargin table-bordered usersTable">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach(@$employees as $employee) { ?>
                            <tr rel="<?=@$user['user_id'];?>">
                                <td class=""><?=@$employee['fname'];?></td>
                                <td class=""><?=@$employee['lname'];?></td>
                                <td class="date_created"><?=date('m/d/Y', strtotime(@$employee['date_added']));?></td>
                                <td style="width: 95px;">
                                    <a href="#editModal" data-toggle="modal" class="btn btn-primary btn-small btnEdit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#deleteModal" data-toggle="modal" class="btn btn-danger btn-small btnDelete">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
    $('.usersTable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        "sPaginationType": "full_numbers",
        "fnDrawCallback": function(oSettings) {

            $('.btnEdit').click(function() {
                var el = $(this).closest('tr');
                var id=el.attr('rel');
                var deduction_name = el.find('.deduction_name').html();

                $('#editModal .edit_id').val(id);
                $('#editModal .edit_name').val(deduction_name);
            });

            $('.btnDelete').click(function() {
                var el = $(this).closest('tr');
                var id=el.attr('rel');

                $('#deleteModal .del_id').html(id);
            });

        }
    });


    $('.btnAddSave').click(function(){        
        var deduction_name = $('.add_name').val();
        var err;

        if(deduction_name) {
            var url = "<?=base_url();?>deductions/add";
            var param = {
                'deduction_name'   : deduction_name
            }

            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>deductions";
                }
            });
        }else {
            $('#add_error').html('Sorry, please fill in all required information.');
        }
    });

    $('.btnEditSave').click(function(){        
        var deduction_id = $('.edit_id').val();
        var deduction_name = $('.edit_name').val();
        var err;
        // console.log(deduction_id + deduction_name);

        if(deduction_id && deduction_name) {
            var url = "<?=base_url();?>deductions/edit";
            var param = {
                'deduction_id'     : deduction_id,
                'deduction_name'   : deduction_name
            };

            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>deductions";
                }
            });
        }else {
            $('#add_error').html('Sorry, please fill in all required information.');
        }
    });
    
    $('.btnDeleteSave').click(function(){
        var deduction_id = $('.del_id').html();

        var url = "<?=base_url();?>deductions/delete";
        var param = {
            'deduction_id'   : deduction_id
        };

        $.post(url, param, function(data) {
            if(data) {
                $('#del_error').html(data);
            }else {
                window.location="<?=base_url();?>deductions";
            }
        });
    });
});
</script>
