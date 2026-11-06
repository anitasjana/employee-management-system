<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../includes/auth.php");
include("../includes/db.php");

// 1. Total Employees
$employee_sql = "SELECT COUNT(id) AS total
                 FROM users
                 WHERE type = 2";

$employee_result = mysqli_query($con, $employee_sql);
if (!$employee_result) {
    die("SQL Error: " . mysqli_error($con));
}
$employee_row = mysqli_fetch_assoc($employee_result);


$leave_sql = "SELECT COUNT(id) AS total
              FROM leave_approve";

$leave_result = mysqli_query($con, $leave_sql);
if (!$leave_result) {
    die("SQL Error: " . mysqli_error($con));
}
$leave_row = mysqli_fetch_assoc($leave_result);


$pending_sql = "SELECT COUNT(id) AS total
                FROM leave_approve
                WHERE status = 0";
$pending_result = mysqli_query($con, $pending_sql);
if (!$pending_result) {
    die("SQL Error: " . mysqli_error($con));
}
$pending_row = mysqli_fetch_assoc($pending_result);



$approved_sql = "SELECT COUNT(id) AS total
                 FROM leave_approve
                 WHERE status = 1";
$approved_result = mysqli_query($con, $approved_sql);

if (!$approved_result) {
    die("SQL Error: " . mysqli_error($con));
}
$approved_row = mysqli_fetch_assoc($approved_result);



$rejected_sql = "SELECT COUNT(id) AS total
                 FROM leave_approve
                 WHERE status = 2";
$rejected_result = mysqli_query($con, $rejected_sql);

if (!$rejected_result) {
    die("SQL Error: " . mysqli_error($con));
}
$rejected_row = mysqli_fetch_assoc($rejected_result);


include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>
     <div class="bodyslide" id="bodyslide">
      <div class="dashbord_body">
        <div class="box" id="">
            <div class="boxup">
               <div class="boxup_text">Total Employees</div>
               <div class="boxup_bold">
                <?php echo $employee_row['total']; ?>
               </div>
            </div>
        </div>
        <div class="box box_green" id=""><div class="boxup">
               <div class="boxup_text">Total Leave Applications</div>
               <div class="boxup_bold"><?php echo $leave_row['total']; ?></div></div>
            </div>
        <div class="box box_red" id=""><div class="boxup">
               <div class="boxup_text">Pending Leaves</div>
               <div class="boxup_bold"><?php echo $pending_row['total']; ?></div>
               <!-- <div class="boxup_stext">compared to last week</div></div> -->
               <!-- <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div> -->
            </div>
            </div>
        <div class="box box_orange" id=""><div class="boxup">
               <div class="boxup_text">Today's Attendance</div>
               <div class="boxup_bold"><?php echo $rejected_row['total']; ?></div>
            </div>
            </div>
      </div>
     </div>
<script src="../assets/js/admin/dashboard.js"></script>
<?php
include("../includes/footer.php");
?>