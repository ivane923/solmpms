<?php if ($this->session->userdata('user_type')=='Administrator') {  ?>
<div class="pull-right">
    <ul class="stats">
        <li class="satblue">
            <i class="fa fa-group""></i>
            <div class="details">
                <span class="big text-center">
                <?php $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM members_info_tb")->result(); 
                    foreach ($count4 as $key => $value) { 
                echo $value->count_rows;
                }?>

                </span>
                <span>Parish Members</span>
            </div>
        </li>
        <li class="lightred">
            <i class="fa fa-calendar"></i>
            <div class="details">
                <span class="big"><?php echo date('D g:i a');?></span>
                <span> <script type="text/javascript"></script><?php echo date('F j, Y');?></span>
            </div>
        </li>
    </ul>
</div>
<?php } ?>