<?php $this->load->view('includes/header_1'); ?>

<div id="viewMatrimonyRequirements" class="modal fade" role="dialog">
    <?php $this->load->view('events/matrimony_req'); ?>
</div>

<div id="viewBaptismalRecords" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Marriage Records</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-nomargin table-bordered baptismalTable" id="baptismalTable">
                    <thead>   
                        <tr>
                            <th>Couples</th>
                            <th>Display</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(@$matrimonys as $matrimony) { ?>
                        <tr rel="<?=@$matrimony['matrimony_id'];?>">
                            <td><?=@$matrimony['FULLNAME'];?></td>
                            <td style="width: 95px;">
                                <span class="hidden fname_gTB"><?=@$matrimony['g_fname'];?></span>
                                <span class="hidden mname_gTB"><?=@$matrimony['g_mname'];?></span></span>
                                <span class="hidden lname_gTB"><?=@$matrimony['g_lname'];?></span>
                                <span class="hidden birthdate_gTB"><?=@$matrimony['g_datebirth'];?></span>
                                <span class="hidden age_gTB"><?=@$matrimony['g_age'];?></span>
                                <span class="hidden address_gTB"><?=@$matrimony['g_placebirth'];?></span>
                                <span class="hidden lenght_years_gTB"><?=@$matrimony['g_LengthYears'];?></span>
                                <span class="hidden occupation_gTB"><?=@$matrimony['g_occupation'];?></span>
                                <span class="hidden nationality_gTB"><?=@$matrimony['g_nationality'];?></span>
                                <span class="hidden religion_gTB"><?=@$matrimony['g_religion'];?></span>
                                <span class="hidden parish_address_gTB"><?=@$matrimony['g_pParishAdd'];?></span>
                                <span class="hidden father_name_gTB"><?=@$matrimony['g_fatherFname'];?></span>
                                <span class="hidden father_religion_gTB"><?=@$matrimony['g_fatherReligion'];?></span>
                                <span class="hidden father_placebirth_gTB"><?=@$matrimony['g_fatherBPlace'];?></span>
                                <span class="hidden mother_name_gTB"><?=@$matrimony['g_motherFname'];?></span>
                                <span class="hidden mother_religion_gTB"><?=@$matrimony['g_motherReligion'];?></span>
                                <span class="hidden mother_placebirth_gTB"><?=@$matrimony['g_motherBPlace'];?></span>
                                
                                <span class="hidden baptismal_status_gTB"><?=@$matrimony['g_baptismStatus'];?></span>
                                <span class="hidden proof_gaptismal_gTB"><?=@$matrimony['g_baptismProof'];?></span>
                                <span class="hidden baptismal_date_gTB"><?=@$matrimony['g_baptismDate'];?></span>
                                <span class="hidden parish_gaptismal_gTB"><?=@$matrimony['g_baptismParish'];?></span>
                                <span class="hidden parish_gaptismal_address_gTB"><?=@$matrimony['g_baptismParishAddress'];?></span>
                                <span class="hidden confirmation_status_gTB"><?=@$matrimony['g_confirmationStatus'];?></span>
                                <span class="hidden proof_confirmation_gTB"><?=@$matrimony['g_confirmationProof'];?></span>
                                <span class="hidden confirmation_date_g"><?=@$matrimony['g_confirmationDate'];?></span>
                                <span class="hidden parish_confirmation_gTB"><?=@$matrimony['g_confirmationParish'];?></span>

                                
                                                        
                                <span class="hidden fname_bTB"><?=@$matrimony['b_fname'];?></span>
                                <span class="hidden mname_bTB"><?=@$matrimony['b_mname'];?></span></span>
                                <span class="hidden lname_bTB"><?=@$matrimony['b_lname'];?></span>
                                <span class="hidden birthdate_bTB"><?=@$matrimony['b_datebirth'];?></span>
                                <span class="hidden age_bTB"><?=@$matrimony['b_age'];?></span>
                                <span class="hidden address_bTB"><?=@$matrimony['b_placebirth'];?></span>
                                <span class="hidden lenght_years_bTB"><?=@$matrimony['b_LengthYears'];?></span>
                                <span class="hidden occupation_bTB"><?=@$matrimony['b_occupation'];?></span>
                                <span class="hidden nationality_bTB"><?=@$matrimony['b_nationality'];?></span>
                                <span class="hidden religion_bTB"><?=@$matrimony['b_religion'];?></span>
                                <span class="hidden parish_address_bTB"><?=@$matrimony['b_pParishAdd'];?></span>
                                <span class="hidden father_name_bTB"><?=@$matrimony['b_fatherFname'];?></span>
                                <span class="hidden father_religion_bTB"><?=@$matrimony['b_fatherReligion'];?></span>
                                <span class="hidden father_placebirth_bTB"><?=@$matrimony['b_fatherBPlace'];?></span>
                                <span class="hidden mother_name_bTB"><?=@$matrimony['b_motherFname'];?></span>
                                <span class="hidden mother_religion_bTB"><?=@$matrimony['b_motherReligion'];?></span>
                                <span class="hidden mother_placebirth_bTB"><?=@$matrimony['b_motherBPlace'];?></span>

                                <span class="hidden baptismal_status_bTB"><?=@$matrimony['b_baptismStatus'];?></span>
                                <span class="hidden proof_baptismal_bTB"><?=@$matrimony['b_baptismProof'];?></span>
                                <span class="hidden baptismal_date_bTB"><?=@$matrimony['b_baptismDate'];?></span>
                                <span class="hidden parish_baptismal_bTB"><?=@$matrimony['b_baptismParish'];?></span>
                                <span class="hidden parish_baptismal_address_bTB"><?=@$matrimony['b_baptismParishAddress'];?></span>
                                <span class="hidden confirmation_status_bTB"><?=@$matrimony['b_confirmationStatus'];?></span>
                                <span class="hidden proof_confirmation_bTB"><?=@$matrimony['b_confirmationProof'];?></span>
                                <span class="hidden confirmation_date_b"><?=@$matrimony['b_confirmationDate'];?></span>
                                <span class="hidden parish_confirmation_bTB"><?=@$matrimony['b_confirmationParish'];?></span>

                                <a class="btn btn-orange btn-small btnView"><i class="glyphicon-list"></i> Details..</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close Window</button>
            </div>
        </div>
    </div>
</div>

<div id="content" class="container-fluid" style="margin-top: -20px;">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left"><h3 style="color:dodgerblue;"><i class="glyphicon glyphicon-more_items"></i> Events Services</h3></div>  
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-title" style="margin-top: -4px;">
                            <h3> Matrimony </h3>
                            <div class="pull-right">
                                <h3>
                                    <a href="#ClearEvent" id="btnClearEvent">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </h3>
                                <h3 style="margin-top: 0px;">
                                    <a href="#viewMatrimonyRequirements" data-toggle="modal"><i class="glyphicon-circle_question_mark"></i></a>
                                </h3>
                                <h3>
                                    <a href="#viewBaptismalRecords" data-toggle="modal" id="btnNotifyEvent">
                                        <i class="fa fa-database"></i>
                                    </a>
                                </h3>
                                <span class="label label-lightred count" id="getNotif" style="border-radius: 10px;"></span>   
                            </div>
                        </div>
                        <div class="box-content nopadding"> 
                            <form method="POST" class='form-horizontal form-wizard wizard-vertical' id="ssss">
                                <div class="step" id="firstStep">
                                    <ul class="wizard-steps steps-2">
                                        <li class='active'>
                                            <div class="single-step">
                                                <span class="title">1</span>
                                                <span class="circle">
                                                    <span class="active"></span>
                                                </span>
                                                <span class="description">
                                                    Personal Information
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-step">
                                                <span class="title">2</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Event Information
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-content">
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <h4 class="" style="border-bottom: 2px solid lightblue; color: dodgerblue;padding: 10px; width: 97%;"><i class="fa fa-bars"></i> Groom</h4>
                                                <div class="col-sm-2 hidden">
                                                    <div class="form-group">
                                                        <input type="text" name="marriage_id" class="form-control marriage_id_g RequiredField txtProfile" disabled="true" value="">
                                                    </div>
                                                </div>
                                                <span class="operation hidden"></span>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="FirstName" class="control-label lbl-groom">First Name:</label>
                                                        <input type="text" name="fname" id="" placeholder="First Name" class="form-control fname_g RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="MI" class="control-label lbl-groom">Middle Name</label>
                                                        <input type="text" name="mname" id="" placeholder="Enter middle name" class="form-control mname_g RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group Name">
                                                        <label for="LastName" class="control-label lbl-groom">Last Name:</label>
                                                        <input type="text" name="lname" id="" placeholder="Last Name" class="form-control lname_g RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <!-- <div class="row"> -->
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Birth Date:</label>
                                                        <input type="date" name="birthdate" id="birthdate" placeholder="Birth Date" class="form-control birthdate_g" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 hidden">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Age year:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter age year" class="form-control age_g" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" max="200" min="0" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Present Address:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control address_g" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Length of Years:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control lenght_years_g" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" max="200" min="0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Occupation:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter Occupation" class="form-control occupation_g" required="required" />
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Nationality:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter Nationality" class="form-control nationality_g" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Religion:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter Religion" class="form-control religion_g" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Present parish and address:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control parish_address_g" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h4><i class="glyphicon-circle_question_mark"></i> Parents Information</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Father Name:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control father_name_g" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Father Religion:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control father_religion_g" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Father Place of Birth:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control father_placebirth_g" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Mother Maiden Name:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control mother_name_g" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Mother Religion:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control mother_religion_g" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Mother Place of Birth:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control mother_placebirth_g" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h4 id="baptism_g"><i class="glyphicon-circle_question_mark"></i> Baptismal</h4>
                                                    <p id="baptismal_operation_g"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="top: 0;">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Have you ever been baptise?:
                                                        </label>   
                                                        <select class="form-control cus_form baptismal_status_g chosen-select">
                                                            <option selected="selected">Select
                                                            </option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hideBaptismal_Info_g">
                                                <div class="row">
                                                    <div class="col-sm-7 ">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Proof of Baptism:
                                                            </label>   
                                                            <select class="form-control cus_form proof_gaptismal_g chosen-select">
                                                                <option selected="selected">Select
                                                                </option>
                                                                <option value="Certificate">Certificate</option>
                                                                <option value="Affividavit">Affividavit</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Date of Baptism:</label>
                                                            <input type="date" class="form-control baptismal_date_g" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Parish of Baptism:</label>
                                                            <input type="text" name="textfield" id="textfield" placeholder="Enter Parish" class="form-control parish_gaptismal_g" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Parish Address:</label>
                                                            <textarea name="textfield" id="textfield" placeholder="Address" class="form-control parish_gaptismal_address_g" required="required" style="resize: none;">
                                                            </textarea>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h4 id="confirm_g"><i class="glyphicon-circle_question_mark"></i> Confirmation</h4>
                                                        <p id="confirmation_operation_g"></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="top: 0;">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-groom">Have you ever been confirmed?:
                                                        </label>   
                                                        <select class="form-control cus_form confirmation_status_g chosen-select">
                                                            <option selected="selected">Select
                                                            </option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hideConfirmation_Info_g">
                                                <div class="row">
                                                    <div class="col-sm-7 ">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Proof of Confirmation:
                                                            </label>   
                                                            <select class="form-control cus_form proof_confirmation_g chosen-select">
                                                                <option selected="selected">Select
                                                                </option>
                                                                <option value="Certificate">Certificate</option>
                                                                <option value="Affividavit">Affividavit</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Date of Confirmation:</label>
                                                            <input type="date" name="birthdate" class="form-control confirmation_date_g" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-groom">Parish of Confirmation:</label>
                                                            <input type="text" name="textfield" id="textfield" placeholder="Enter Parish" class="form-control parish_confirmation_g" />
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <h4 class="" style="border-bottom: 2px solid pink; color: magenta;padding: 10px; width: 97%;"><i class="fa fa-bars"></i> Bride</h4>
                                                <div class="col-sm-2 hidden">
                                                    <div class="form-group">
                                                        <input type="text" name="marriage_id_b" class="form-control marriage_id_b" disabled="true" value="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="FirstName" class="control-label lbl-bride">First Name:</label>
                                                        <input type="text" name="fname" id="" placeholder="First Name" class="form-control fname_b RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="MI" class="control-label lbl-bride">Middle Name</label>
                                                        <input type="text" name="mname" id="" placeholder="Enter middle name" class="form-control mname_b RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group Name">
                                                        <label for="LastName" class="control-label lbl-bride">Last Name:</label>
                                                        <input type="text" name="lname" id="" placeholder="Last Name" class="form-control lname_b RequiredField txtProfile" required="required">
                                                    </div>
                                                </div>
                                                <!-- <div class="row"> -->
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Birth Date:</label>
                                                        <input type="date" name="birthdate" id="birthdate" placeholder="Birth Date" class="form-control birthdate_b" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 hidden">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Age year:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter age year" class="form-control age_b" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" max="200" min="0" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Present Address:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control address_b" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Length of Years:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control lenght_years_b" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" max="200" min="0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Occupation:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter Occupation" class="form-control occupation_b" required="required" />
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Nationality:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter Nationality" class="form-control nationality_b" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Religion:</label>
                                                        <input type="text" name="textfield" id="textfield" placeholder="Enter Religion" class="form-control religion_b" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Present parish and address:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control parish_address_b" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h4><i class="glyphicon-circle_question_mark"></i> Parents Information</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Father Name:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control father_name_b" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Father Religion:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control father_religion_b" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Father Place of Birth:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control father_placebirth_b" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Mother Maiden Name:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control mother_name_b" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Mother Religion:</label>
                                                        <input type="text" name="textfield" id="textfield" class="form-control mother_religion_b" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Mother Place of Birth:</label>
                                                        <textarea name="textfield" id="textfield" placeholder="Address" class="form-control mother_placebirth_b" required="required" style="resize: none;">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h4 id="baptism_b"><i classs="glyphicon-circle_question_mark"></i> Baptismal</h4>
                                                        <p id="baptismal_operation_b"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="top: 0;">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Have you ever been baptise?:
                                                        </label>   
                                                        <select class="form-control cus_form baptismal_status_b chosen-select">
                                                            <option selected="selected">Select
                                                            </option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hideBaptismal_Info_b">
                                                <div class="row">
                                                    <div class="col-sm-7 ">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Proof of Baptism:
                                                            </label>   
                                                            <select class="form-control cus_form proof_baptismal_b chosen-select">
                                                                <option selected="selected">Select
                                                                </option>
                                                                <option value="Certificate">Certificate</option>
                                                                <option value="Affividavit">Affividavit</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Date of Baptism:</label>
                                                            <input type="date" class="form-control baptismal_date_b" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Parish of Baptism:</label>
                                                            <input type="text" name="textfield" id="textfield" placeholder="Enter Parish" class="form-control parish_baptismal_b" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Parish Address:</label>
                                                            <textarea name="textfield" id="textfield" placeholder="Address" class="form-control parish_baptismal_address_b" required="required" style="resize: none;">
                                                            </textarea>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <h4 id="confirm_b"><i class="glyphicon-circle_question_mark"></i> Confirmation</h4>
                                                        <p id="confirmation_operation_b"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="top: 0;">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="textfield" class="control-label lbl-bride">Have you ever been confirmed?:
                                                        </label>   
                                                        <select class="form-control cus_form confirmation_status_b chosen-select">
                                                            <option selected="selected">Select
                                                            </option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hideConfirmation_Info_b">
                                                <div class="row">
                                                    <div class="col-sm-7 ">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Proof of Confirmation:
                                                            </label>   
                                                            <select class="form-control cus_form proof_confirmation_b chosen-select">
                                                                <option selected="selected">Select
                                                                </option>
                                                                <option value="Certificate">Certificate</option>
                                                                <option value="Affividavit">Affividavit</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Date of Confirmation:</label>
                                                            <input type="date" name="birthdate" class="form-control confirmation_date_b" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="textfield" class="control-label lbl-bride">Parish of Confirmation:</label>
                                                            <input type="text" name="textfield" id="textfield" placeholder="Enter Parish" class="form-control parish_confirmation_b" />
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                            <!-- <hr> -->
                                        </div>
                                    </div><!-- form-content -->
                                </div>
                                <div class="step" id="secondStep">
                                    <ul class="wizard-steps steps-2">
                                        <li>
                                            <div class="single-step">
                                                <span class="title">1</span>
                                                <span class="circle">
                                                </span>
                                                <span class="description">
                                                    Personal Information
                                                </span>
                                            </div>
                                        </li>
                                        <li class='active'>
                                            <div class="single-step">
                                                <span class="title">
                                                    2</span>
                                                <span class="circle">
                                                    <span class="active"></span>
                                                </span>
                                                <span class="description">
                                                    Event Information
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-content">
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-actions">
                                        <button type="reset" class="btn btn-default" id="back">Back</button>
                                        <button type="submit" class="btn btn-primary" id="Next">Next</button>
                                    </div>
                                </div>
                                <div class="form-action pull-right"> 
                                    <h5 class="text-center" id="add_error" style="color: #ff0000;"></h5>
                                    <button type="button" class="btn btn-darkblue btnAddSave" id="btnAddSave"><i class="fa fa-hdd-o"></i> Save</button>
                                    <button type="button" class="btn btn-darkblue" id="btnUpdateSave"><i class="fa fa-hdd-o"></i> Update Changes</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>  
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>
<?php $this->load->view('includes/footer_1'); ?>

<script type="text/javascript">
$(".chosen-select").chosen({
    disable_search_threshold: 10,
    search_contains: true,
    width: '100%'
});


$(document).ready(function() {
    getNotifyBaptismal();
    $('#btnUpdateSave').addClass('hidden');
    $('#btnClearEvent').addClass('hidden');

    $('.baptismalTable').dataTable({
        "aaSorting": [[ 1, "asc" ]],
        "sPaginationType": "full_numbers",
        "fnDrawCallback": function(oSettings) {
            $('.btnView').click(function(){
                $('#btnUpdateSave').removeClass('hidden');
                $('#btnClearEvent').removeClass('hidden');
                $('#btnAddSave').addClass('hidden'); 

                var el = $(this).closest('tr');
                var marriage_idTB = el.attr('rel');
                var fname_gTB = el.find('.fname_gTB').html();
                var mname_gTB = el.find('.mname_gTB').html();
                var lname_gTB = el.find('.lname_gTB').html();
                var birthdate_gTB = el.find('.birthdate_gTB').html();
                var age_gTB = el.find('.age_gTB').html();
                var address_gTB = el.find('.address_gTB').html();
                var lenght_years_gTB = el.find('.lenght_years_gTB').html();
                var occupation_gTB = el.find('.occupation_gTB').html();
                var nationality_gTB = el.find('.nationality_gTB').html();
                var religion_gTB = el.find('.religion_gTB').html();
                var parish_address_gTB = el.find('.parish_address_gTB').html();
                var father_name_gTB = el.find('.father_name_gTB').html();
                var father_religion_gTB = el.find('.father_religion_gTB').html();
                var father_placebirth_gTB = el.find('.father_placebirth_gTB').html();
                var mother_name_gTB = el.find('.mother_name_gTB').html();
                var mother_religion_gTB = el.find('.mother_religion_gTB').html();
                var mother_placebirth_gTB = el.find('.mother_placebirth_gTB').html();
                var baptismal_status_gTB = el.find('.baptismal_status_gTB').html();
                var proof_gaptismal_gTB = el.find('.proof_gaptismal_gTB').html();
                var baptismal_date_gTB = el.find('.baptismal_date_gTB').html();
                var parish_gaptismal_gTB = el.find('.parish_gaptismal_gTB').html();
                var parish_gaptismal_address_gTB = el.find('.parish_gaptismal_address_gTB').html();
                var confirmation_status_gTB = el.find('.confirmation_status_gTB').html();
                var proof_confirmation_gTB = el.find('.proof_confirmation_gTB').html();
                var confirmation_date_g = el.find('.confirmation_date_g').html();
                var parish_confirmation_gTB = el.find('.parish_confirmation_gTB').html();

                var fname_bTB = el.find('.fname_bTB').html();
                var mname_bTB = el.find('.mname_bTB').html();
                var lname_bTB = el.find('.lname_bTB').html();
                var birthdate_bTB = el.find('.birthdate_bTB').html();
                var age_bTB = el.find('.age_bTB').html();
                var address_bTB = el.find('.address_bTB').html();
                var lenght_years_bTB = el.find('.lenght_years_bTB').html();
                var occupation_bTB = el.find('.occupation_bTB').html();
                var nationality_bTB = el.find('.nationality_bTB').html();
                var religion_bTB = el.find('.religion_bTB').html();
                var parish_address_bTB = el.find('.parish_address_bTB').html();
                var father_name_bTB = el.find('.father_name_bTB').html();
                var father_religion_bTB = el.find('.father_religion_bTB').html();
                var father_placebirth_bTB = el.find('.father_placebirth_bTB').html();
                var mother_name_bTB = el.find('.mother_name_bTB').html();
                var mother_religion_bTB = el.find('.mother_religion_bTB').html();
                var mother_placebirth_bTB = el.find('.mother_placebirth_bTB').html();
                var baptismal_status_bTB = el.find('.baptismal_status_bTB').html();
                var proof_baptismal_bTB = el.find('.proof_baptismal_bTB').html();
                var baptismal_date_bTB = el.find('.baptismal_date_bTB').html();
                var parish_baptismal_bTB = el.find('.parish_baptismal_bTB').html();
                var parish_baptismal_address_bTB = el.find('.parish_baptismal_address_bTB').html();
                var confirmation_status_bTB = el.find('.confirmation_status_bTB').html();
                var proof_confirmation_bTB = el.find('.proof_confirmation_bTB').html();
                var confirmation_date_b = el.find('.confirmation_date_b').html();
                var parish_confirmation_bTB = el.find('.parish_confirmation_bTB').html();
           
                $('.operation').html("add");
                $('.marriage_id').val(marriage_idTB);
                $('.fname_g').val(fname_gTB);
                $('.mname_g').val(mname_gTB);
                $('.lname_g').val(lname_gTB);
                $('.birthdate_g').val(birthdate_gTB);
                $('.age_g').val(age_gTB);
                $('.address_g').val(address_gTB);
                $('.lenght_years_g').val(lenght_years_gTB);
                $('.occupation_g').val(occupation_gTB);
                $('.nationality_g').val(nationality_gTB);
                $('.religion_g').val(religion_gTB);
                $('.parish_address_g').val(parish_address_gTB);
                $('.father_name_g').val(father_name_gTB);
                $('.father_religion_g').val(father_religion_gTB);
                $('.father_placebirth_g').val(father_placebirth_gTB);
                $('.mother_name_g').val(mother_name_gTB);
                $('.mother_religion_g').val(mother_religion_gTB);
                $('.mother_placebirth_g').val(mother_placebirth_gTB);
                $('.baptismal_status_g').val(baptismal_status_gTB);
                $('.proof_gaptismal_g').val(proof_gaptismal_gTB);
                $('.baptismal_date_g').val(baptismal_date_gTB);
                $('.parish_gaptismal_g').val(parish_gaptismal_gTB);
                $('.parish_gaptismal_address_g').val(parish_gaptismal_address_gTB);
                $('.confirmation_status_g').val(confirmation_status_gTB);
                $('.proof_confirmation_g').val(proof_confirmation_gTB);
                $('.confirmation_date_g').val(confirmation_date_g);
                $('.parish_confirmation_g').val(parish_confirmation_gTB);

                $('.fname_b').val(fname_bTB);
                $('.mname_b').val(mname_bTB);
                $('.lname_b').val(lname_bTB);
                $('.birthdate_b').val(birthdate_bTB);
                $('.age_b').val(age_bTB);
                $('.address_b').val(address_bTB);
                $('.lenght_years_b').val(lenght_years_bTB);
                $('.occupation_b').val(occupation_bTB);
                $('.nationality_b').val(nationality_bTB);
                $('.religion_b').val(religion_bTB);
                $('.parish_address_b').val(parish_address_bTB);
                $('.father_name_b').val(father_name_bTB);
                $('.father_religion_b').val(father_religion_bTB);
                $('.father_placebirth_b').val(father_placebirth_bTB);
                $('.mother_name_b').val(mother_name_bTB);
                $('.mother_religion_b').val(mother_religion_bTB);
                $('.mother_placebirth_b').val(mother_placebirth_bTB);
                $('.baptismal_status_b').val(baptismal_status_bTB);
                $('.proof_baptismal_b').val(proof_baptismal_bTB);
                $('.baptismal_date_b').val(baptismal_date_bTB);
                $('.parish_baptismal_b').val(parish_baptismal_bTB);
                $('.parish_baptismal_address_b').val(parish_baptismal_address_bTB);
                $('.confirmation_status_b').val(confirmation_status_bTB);
                $('.proof_confirmation_b').val(proof_confirmation_bTB);
                $('.confirmation_date_b').val(confirmation_date_b);
                $('.parish_confirmation_b').val(parish_confirmation_bTB);
                
                // console.log(death_causedTB);
                
                $('.chosen-select').trigger("chosen:updated");

                if (baptismal_status_gTB == 1) {
                    $(".hideBaptismal_Info_g").removeClass('hidden');
                } else if (confirmation_status_gTB == 1) {
                    $(".hideConfirmation_Info_g").removeClass('hidden');
                } else if (baptismal_status_bTB == 1) {
                    $(".hideBaptismal_Info_b").removeClass('hidden');
                } else if (confirmation_status_bTB == 1) {
                    $(".hideConfirmation_Info_b").removeClass('hidden');
                }

            });
        }
    });
    
    $('#btnNotifyEvent').click(function() { 
        var status = "0";
        var notif = $('#getNotif').html();
        var dataString = 'status='+ status;           
        if(notif =='0') {
            // alert('Please Give Valid Details');
        } else {
            var status = "0";
            var dataString = 'status='+ status;           
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>events_reg/displayNUpdatenotificationMarriage/",
                cache: false,  
                data: dataString,
                success: function(data){
                    getNotifyBaptismal();
                }
            }); 
        } return;
    });

    $('#btnClearEvent').click(function() {
        $('#btnClearEvent').addClass('hidden');
        $('#btnUpdateSave').addClass('hidden');
        $('#btnAddSave').removeClass('hidden');
        $('#back').click();
        $('#ssss').trigger("reset");
        $('.chosen-select').trigger("chosen:updated");
        
    });


    $(".fname_b, .mname_b, .lname_b").bind("keypress", function (event) {
        if (event.charCode!=0) {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
    
    $( ".fname_b" ).focusout(function() {
        var fname = $('.fname_b').val();
        if (fname <= 1 ) {
            alert('Please provide atleast 2 character');
        }        
    });

    // for all copy paste special character
    $(document).on("keyup", ".fname_b, .mname_b, .lname_b", function () {
        $(".fname_b").val($(".fname_b").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
        $(".mname_b").val($(".mname_b").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
        $(".lname_b").val($(".lname_b").val().replace(/[^a-z\A-Z\s\/gi, '').replace(/[_\s]/g, '').toLowerCase());
    }); 

    $(".birthdate_g").change(function() {
        var today = new Date();
        var birthDate = new Date($('.birthdate_g').val());
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
       return $('.age_g').val(age);
    });

    $(".hideBaptismal_Info_g").addClass('hidden');
    $(".hideConfirmation_Info_g").addClass('hidden');

    $(".hideBaptismal_Info_b").addClass('hidden');
    $(".hideConfirmation_Info_b").addClass('hidden');

    $('.baptismal_status_g').on('change', function(){
        $('.baptismal_status_g').addClass('hidden');
        var baptismal_status_g = $('.baptismal_status_g').val();
        if(baptismal_status_g == '1') {
            $(".hideBaptismal_Info_g").removeClass('hidden');
            $( "#baptism_g" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Baptismal <i class="fa fa-check"></i>');
            // $('#baptismal_operation_g').html(1);
        } else {
            $(".hideBaptismal_Info_g").addClass('hidden');
            $( "#baptism_g" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Baptismal <i class="fa fa-remove"></i>');
            // $('#baptismal_operation_g').html(0);
        }    
    }); 

    $('.baptismal_status_b').on('change', function(){
        $('.baptismal_status_b').addClass('hidden');
        var baptismal_status_b = $('.baptismal_status_b').val();
        if(baptismal_status_b == '1') {
            $(".hideBaptismal_Info_b").removeClass('hidden');
            $( "#baptism_b" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Baptismal <i class="fa fa-check"></i>');
            // $('#baptismal_operation_b').html(1);
        } else {
            $(".hideBaptismal_Info_b").addClass('hidden');
            $( "#baptism_b" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Baptismal <i class="fa fa-remove"></i>');
            // $('#baptismal_operation_b').html(0);
        }
    });

    $('.confirmation_status_g').on('change', function(){
        $('.confirmation_status_g').addClass('hidden');
        var confirmation_status_g = $('.confirmation_status_g').val();
        if(confirmation_status_g == '1') {
            $(".hideConfirmation_Info_g").removeClass('hidden');
            $( "#confirm_g" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Confirmation <i class="fa fa-check"></i>');
            // $('#confirmation_operation_g').html(1);
        } else {
            $(".hideConfirmation_Info_g").addClass('hidden');
            $( "#confirm_g" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Confirmation <i class="fa fa-remove"></i>');
            // $('#confirmation_operation_g').html(0);

        }
    });

    $('.confirmation_status_b').on('change', function(){
        $('.confirmation_status_b').addClass('hidden');
        var confirmation_status_b = $('.confirmation_status_b').val();
        if(confirmation_status_b == '1') {
            $(".hideConfirmation_Info_b").removeClass('hidden');
            $( "#confirm_b" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Confirmation <i class="fa fa-check"></i>');
            // $('#confirmation_operation_b').html(1); 
        } else {
            $(".hideConfirmation_Info_b").addClass('hidden');
            $( "#confirm_b" ).slideUp( 300 ).delay( 400 ).fadeIn( 400 ).html('<i class="glyphicon-circle_question_mark"></i> Confirmation <i class="fa fa-remove"></i>');
            // $('#confirmation_operation_b').html(0);
        }
    });


    $('.btnAddSave').click(function(){
        var fname_b                 = $('.fname_b').val();
        var mname_b                 = $('.mname_b').val();
        var lname_b                 = $('.lname_b').val();
        var birthdate_b             = $('.birthdate_b').val();
        var age_b                   = $('.age_b').val();
        var address_b               = $('.address_b').val();
        var lenght_years_b          = $('.lenght_years_b').val();
        var occupation_b            = $('.occupation_b').val();
        var nationality_b           = $('.nationality_b').val();
        var religion_b              = $('.religion_b').val();
        var parish_address_b        = $('.parish_address_b').val();
        var father_name_b           = $('.father_name_b').val();
        var father_religion_b       = $('.father_religion_b').val();
        var father_placebirth_b     = $('.father_placebirth_b').val();
        var mother_name_b           = $('.mother_name_b').val();
        var mother_religion_b       = $('.mother_religion_b').val();
        var mother_placebirth_b     = $('.mother_placebirth_b').val();
        var baptismal_status_b      = $('.baptismal_status_b').val();
        var proof_baptismal_b       = $('.proof_baptismal_b').val();
        var baptismal_date_b        = $('.baptismal_date_b').val();
        var parish_baptismal_b      = $('.parish_baptismal_b').val();
        var parish_baptismal_address_b = $('.parish_baptismal_address_b').val();
        var confirmation_status_b   = $('.confirmation_status_b').val();
        var proof_confirmation_b    = $('.proof_confirmation_b').val();
        var confirmation_date_b     = $('.confirmation_date_b').val();
        var parish_confirmation_b   = $('.parish_confirmation_b').val();

        var fname_g                 = $('.fname_g').val();
        var mname_g                 = $('.mname_g').val();
        var lname_g                 = $('.lname_g').val();
        var birthdate_g             = $('.birthdate_g').val();
        var age_g                   = $('.age_g').val();
        var address_g               = $('.address_g').val();
        var lenght_years_g          = $('.lenght_years_g').val();
        var occupation_g            = $('.occupation_g').val();
        var nationality_g           = $('.nationality_g').val();
        var religion_g              = $('.religion_g').val();
        var parish_address_g        = $('.parish_address_g').val();
        var father_name_g           = $('.father_name_g').val();
        var father_religion_g       = $('.father_religion_g').val();
        var father_placebirth_g     = $('.father_placebirth_g').val();
        var mother_name_g           = $('.mother_name_g').val();
        var mother_religion_g       = $('.mother_religion_g').val();
        var mother_placebirth_g     = $('.mother_placebirth_g').val();
        var baptismal_status_g      = $('.baptismal_status_g').val();
        var proof_gaptismal_g       = $('.proof_gaptismal_g').val();
        var baptismal_date_g       = $('.baptismal_date_g').val();
        var parish_gaptismal_g      = $('.parish_gaptismal_g').val();
        var parish_gaptismal_address_g = $('.parish_gaptismal_address_g').val();
        var confirmation_status_g   = $('.confirmation_status_g').val();
        var proof_confirmation_g    = $('.proof_confirmation_g').val();
        var confirmation_date_g     = $('.confirmation_date_g').val();
        var parish_confirmation_g   = $('.parish_confirmation_g').val();
        var err;

       // if(fname_b   
       //  &&mname_b 
       //  &&lname_b 
       //  &&birthdate_b 
       //  &&age_b 
       //  &&address_b 
       //  &&lenght_years_b 
       //  &&occupation_b 
       //  &&nationality_b 
       //  &&religion_b 
       //  &&parish_address_b 
       //  &&father_name_b 
       //  &&father_religion_b 
       //  &&father_placebirth_b 
       //  &&mother_name_b 
       //  &&mother_religion_b 
       //  &&mother_placebirth_b 
       //  &&baptismal_status_b 
       //  &&proof_baptismal_b 
       //  &&parish_baptismal_address_b 
       //  &&confirmation_status_b 
       //  &&proof_confirmation_b 
       //  &&parish_confirmation_b 

       //  &&fname_g 
       //  &&mname_g 
       //  &&lname_g 
       //  &&birthdate_g 
       //  &&age_g 
       //  &&address_g 
       //  &&lenght_years_g 
       //  &&occupation_g 
       //  &&nationality_g 
       //  &&religion_g 
       //  &&parish_address_g 
       //  &&father_name_g 
       //  &&father_religion_g 
       //  &&father_placebirth_g 
       //  &&mother_name_g 
       //  &&mother_religion_g 
       //  &&mother_placebirth_g 
       //  &&baptismal_status_g
       //  &&proof_gaptismal_g 
       //  &&parish_gaptismal_address_g 
       //  &&confirmation_status_g 
       //  &&proof_confirmation_g 
       //  &&parish_confirmation_g) 
       //  {
        if (fname_g, mname_g, lname_g) {
            var url = "<?=base_url();?>events_reg/addMarriage";
            var param = {
                'fname_g'                : fname_g,
                'mname_g'                : mname_g,
                'lname_g'                : lname_g,
                'birthdate_g'            : birthdate_g,
                'age_g'                  : age_g,
                'address_g'              : address_g,
                'lenght_years_g'         : lenght_years_g,
                'occupation_g'           : occupation_g,
                'nationality_g'          : nationality_g,
                'religion_g'             : religion_g,
                'parish_address_g'       : parish_address_g,
                'father_name_g'          : father_name_g,
                'father_religion_g'      : father_religion_g,
                'father_placebirth_g'    : father_placebirth_g,
                'mother_name_g'          : mother_name_g,
                'mother_religion_g'      : mother_religion_g,
                'mother_placebirth_g'    : mother_placebirth_g,
                'baptismal_status_g'     : baptismal_status_g,
                'proof_gaptismal_g'      : proof_gaptismal_g,
                'baptismal_date_g'      : baptismal_date_g,
                'parish_gaptismal_g'     : parish_gaptismal_g,
                'parish_gaptismal_address_g': parish_gaptismal_address_g,
                'confirmation_status_g'  : confirmation_status_g,
                'proof_confirmation_g'   : proof_confirmation_g,
                'confirmation_date_g'    : confirmation_date_g,
                'parish_confirmation_g'  : parish_confirmation_g,

                'fname_b'                : fname_b,
                'mname_b'                : mname_b,
                'lname_b'                : lname_b,
                'birthdate_b'            : birthdate_b,
                'age_b'                  : age_b,
                'address_b'              : address_b,
                'lenght_years_b'         : lenght_years_b,
                'occupation_b'           : occupation_b,
                'nationality_b'          : nationality_b,
                'religion_b'             : religion_b,
                'parish_address_b'       : parish_address_b,
                'father_name_b'          : father_name_b,
                'father_religion_b'      : father_religion_b,
                'father_placebirth_b'    : father_placebirth_b,
                'mother_name_b'          : mother_name_b,
                'mother_religion_b'      : mother_religion_b,
                'mother_placebirth_b'    : mother_placebirth_b,
                'baptismal_status_b'     : baptismal_status_b,
                'proof_baptismal_b'      : proof_baptismal_b,
                'baptismal_date_b'      : baptismal_date_b,
                'parish_baptismal_b'     : parish_baptismal_b,
                'parish_baptismal_address_b': parish_baptismal_address_b,
                'confirmation_status_b'  : confirmation_status_b,
                'proof_confirmation_b'   : proof_confirmation_b,
                'confirmation_date_b'    : confirmation_date_b,
                'parish_confirmation_b'  : parish_confirmation_b
            }

            $.post(url, param, function(data) {
                if(data) {
                    $('#add_error').html(data);
                }else {
                    window.location="<?=base_url();?>redirect/matrimony_reg"; 
                    // $('#add_error').html('Record has been Save');
                }
            });
        } else {
             $('#add_error').html('Sorry, Please fill in all required information.');
        }
    });
   
});

function getNotifyBaptismal(value) {

    $.ajax({
        url: '<?php echo base_url();?>events_reg/marriage_Notif/',
        type: 'POST',
        error: function() {
            
        },
        success: function(data) {
            $('#getNotif').html(data);
            var notif = data
            // console.log(data);
            if (notif == '0') {
                $('#getNotif').remove(); 
            } else {
                $('#getNotif').show(); 
            }

        }   
    });
}


</script>
    