<div class="pull-right">
    <!-- <ul class="stats">
        <li class="satblue">
            <i class="fa fa-group"></i>
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
    </ul> -->
    <ul class="tiles tiles-center nomargin">
        <li class="lightgrey">
            <span class="label label-info" style="font-size: 16px;">
                <?php $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM members_info_tb")->result(); 
                foreach ($count4 as $key => $value) { 
                echo $value->count_rows;
                }?>    
            </span>
            <a href="#">
                <span>
                    <i class="fa fa-group"></i>
                </span>
                <span class="name">Registered Parishians</span>
            </a>
        </li>
        <li class="lightred">
            <span class="label label-info" style="font-size: 16px;">
                <?php $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM user_info_tb")->result(); 
                foreach ($count4 as $key => $value) { 
                echo $value->count_rows;
                }?>    
            </span>
            <a href="#">
                <span>
                    <i class="fa fa-user"></i>
                </span>
                <span class="name">Employees</span>
            </a>
        </li>
        <li class="blue">
            <span class="label label-danger" style="font-size: 16px;">
                <?php 
                $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM baptismal_info_tb WHERE doc_status = '0' ")->result(); 
                $count5 = $this->db->query("SELECT COUNT(*) as count_rows FROM confirmation_tb WHERE doc_status = '0' ")->result(); 
                foreach ($count4 as $value_1) { 
                    $value_1->count_rows;
                }  
                foreach ($count5 as $value_2) {
                    $value_2->count_rows; 
                }
                echo $total = $value_1->count_rows + $value_2->count_rows;
                ?>  
            </span>
            <a href="#">
                <span>
                    <i class="fa fa-edit"></i>
                </span>
                <span class="name">Unprocess</span>
            </a>
        </li>
        <li class="satgreen">
            <span class="label label-default" style="font-size: 16px;">
                <?php 
                $today = date("Y/m/d");
                $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM calendar_events WHERE start = '$today' ")->result(); 
                foreach ($count4 as $key => $value) { 
                echo $value->count_rows;
                }?>  
            </span>
            <a href="#">
                <span>
                    <i class="fa fa-calendar"></i>
                </span>
                <span class="name">Today's Events</span>
            </a>
        </li>
    </ul>
</div>