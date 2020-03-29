<?php $this->load->view('common/header'); ?>
 
<script src="<?=base_url();?>js/js/jquery.min.js"></script>
<script src="<?=base_url();?>js/js/instascan.min.js"></script>

<div id="content" class="container-fluid nav-hidden">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
            <div class="page-header">
                <div class="pull-left">
                    <h1>Accounting</h1>
                </div>
                <?php $this->load->view('common/stats'); ?> 
            </div>
            <div class="row">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-settings"></i>Transaction</h3>
                        
                    </div>
                    <div class="box-content nopadding">
                        <ul class="tabs tabs-inline tabs-top">
                            <li class="tab-user tab-record active">
                                <a href="#record" data-toggle="tab"><i class="fa fa-book"></i>Transactions Record</a>
                            </li>
                            <li class="tab-user tab-donation">
                                <a href="#donation" data-toggle="tab"><i class="fa fa-money"></i>Donation</a>
                            </li>
                        </ul>
                        <div class="tab-content padding tab-content-inline tab-content-bottom">
                            <div class="tab-pane tab-record active" id="record">
                               
                                <?php $this->load->view('accounting/transaction1'); ?>
                             </div>
                            <div class="tab-pane tab-donation" id="donation">
                                <?php $this->load->view('accounting/donation'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
