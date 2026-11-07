<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>
    <div class="bodyslide" id="bodyslide">
        <div class="bodyslide_table">
        <div class="bodyslide_student">Student Management</div>
        <ul class="bodyul">
            <li class="bodyli">Activity
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Gender
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Age
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Region
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Session
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Category
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Class
            <i class="fa-solid fa-caret-down"></i></li>
             <li class="bodyli">Section
            <i class="fa-solid fa-caret-down"></i></li>
            <li class="bodyli_search">Search</li>
            <li class="bodyli_clear">CLEAR ALL</li>
        </ul>
    <div class="body_search_display">
        <div class="body_search">
            <i class="fa-solid fa-magnifying-glass"></i>Search
        </div>
        <div class="body_search_add">
            <div class="body_search_student">Promote Student</div>
            <div class="body_search_student">Download Report</div>
            <a href="addusers.php"><div class="body_search_student_color"><i class="fa-solid fa-plus"></i>
                Add Student</div></a>
        </div>
    </div>
    <div class="table-wrapper">
    <table class="maintable">
        <tr class="tabletr1">
            <th class="tableth1">ID</th>
            <th class="tableth1">Image</th>
            <th class="tableth1">Name</th>
            <th class="tableth1">Email</th>
            <th class="tableth1">Phone</th>
            <th class="tableth1">Gender</th>
            <th class="tableth1">Department</th>
            <th class="tableth1">Designation</th>
            <th class="tableth1">Joining Date</th>
            <th class="tableth1">Status</th>
            <th class="tableth1">Action</th>
        </tr>
        <?php
        $connection=mysqli_connect("localhost","root","","employee_managment");
        $b = "SELECT * FROM users WHERE type = 2 ORDER BY id DESC";
        $data=mysqli_query($connection,$b);
        $v=1;
        while($row=mysqli_fetch_assoc($data)){
            if($v%2==0){
            ?>
            <tr style="background: #e4ebedb8; box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
<td><?php echo $row["id"]; ?></td>

<td>
    <img height="50" width="50"
         src="/employee_managment/uploads/<?php echo $row["image"]; ?>">
</td>

<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["joining_date"]; ?></td>

<td>
    <?php
    if($row["status"] == 1){
        echo "Active";
    } else {
        echo "Inactive";
    }
    ?>
</td>

<td>
    <a href="edit_users.php?id=<?php echo $row["id"]; ?>">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <a href="delete_users.php?id=<?php echo $row["id"]; ?>">
        <i class="fa-solid fa-trash"></i>
    </a>
</td>
            </tr>
            <?php
                   $v++;   
            }
            else{
                ?>
                <tr style="background-color:rgba(252, 252, 252, 0.72); box-shadow: 0px 0px 5px 0px rgb(197, 197, 197);">
<td><?php echo $row["id"]; ?></td>

<td>
    <img height="50" width="50"
         src="/employee_managment/uploads/<?php echo $row["image"]; ?>">
</td>

<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["joining_date"]; ?></td>

<td>
    <?php
    if($row["status"] == 1){
        echo "Active";
    } else {
        echo "Inactive";
    }
    ?>
</td>

<td>
    <a href="edit_users.php?id=<?php echo $row["id"]; ?>">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <a href="delete_users.php?id=<?php echo $row["id"]; ?>">
        <i class="fa-solid fa-trash"></i>
    </a>
</td>
    <a href="edit_users.php?id=<?php echo $row["id"]; ?>">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <a href="delete_users.php?id=<?php echo $row["id"]; ?>">
        <i class="fa-solid fa-trash"></i>
    </a>
</td>
             </tr>
             <?php
             $v++;
            }
            }
            ?>
    </table>
    </div>
    </div>
    </div>

<script src="../../assets/js/admin/style.js"></script>
<?php
include("../includes/footer.php");
?>