<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>
    <div class="bodyslide" id="bodyslide">
        <div class="empLeaveTable">
        <div class="bodyslide_student">List of Employee</div>
    <div class="body_search_display">
        <div class="body_search">
            <i class="fa-solid fa-magnifying-glass"></i>Search
        </div>
    </div>
    <table class="maintable">
        <tr class="tabletr1">
            <th class="tableth1">id</th>
            <th class="tableth1">Name</th>
            <th class="tableth1">Start Date</th>
            <th class="tableth1">End Date</th>
            <th class="tableth1">subject</th>
            <th class="tableth1">Reason</th>
            <th class="tableth1">Status</th>
        </tr>
        <?php
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM leave_approve WHERE user_id='$user_id'";
        $c=mysqli_query($con,$sql);
        $v=1;
        while($row=mysqli_fetch_assoc($c)){
            if($v%2==0){
            ?>
            <tr style="background: #e4ebedb8; box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["start_date"];?></td>
                <td><?php echo $row["last_date"];?></td>
                <td><?php echo $row["subject"];?></td>
                <td><?php echo $row["reason"];?></td>
                <td>
                    <?php

                    if ($row["status"] == 0) {
                        echo "Pending";
                    } 
                    elseif ($row["status"] == 1) {
                        echo "Approved";
                    } 
                    elseif ($row["status"] == 2) {
                        echo "Rejected";
                    }

                    ?>
                </td>
            </tr>
            <?php
                $v++;   
            }
            else{
                ?>
                <tr style="background-color:rgba(252, 252, 252, 0.72); box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
                <td><?php echo $v;?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["start_date"];?></td>
                <td><?php echo $row["last_date"];?></td>
                <td><?php echo $row["subject"];?></td>
                <td><?php echo $row["reason"];?></td>
                <td>
                    <?php

                    if ($row["status"] == 0) {
                        echo "Pending";
                    } 
                    elseif ($row["status"] == 1) {
                        echo "Approved";
                    } 
                    elseif ($row["status"] == 2) {
                        echo "Rejected";
                    }
                    ?>
                </td>
             <?php
             $v++;
            }
            }
            ?>
    </table> 
    </div>
    </div>

<script src="../../assets/js/admin/style.js"></script>
<?php
include("../includes/footer.php");
?>