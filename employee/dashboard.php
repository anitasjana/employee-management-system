<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../includes/auth.php");
include("../includes/db.php");

$total = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(id) AS total FROM leave_approve"));
$pending = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(id) AS total FROM leave_approve WHERE status='0'"));
$approved = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(id) AS total FROM leave_approve WHERE status='1'"));
$rejected = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(id) AS total FROM leave_approve WHERE status='2'"));

include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php")
?>
     <div class="bodyslide" id="bodyslide">
        <div class="box" id="">
            <div class="boxup">
               <div class="boxup_text">Total Leaves</div>
               <div class="boxup_bold">
                <?php echo $total['total']; ?>
               </div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
        </div>
        <div class="box box_green" id=""><div class="boxup">
               <div class="boxup_text">Pending Leaves</div>
               <div class="boxup_bold"><?php echo $pending['total']; ?></div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
        <div class="box box_red" id=""><div class="boxup">
               <div class="boxup_text">Approved Leaves</div>
               <div class="boxup_bold"><?php echo $approved['total']; ?></div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>
        <div class="box box_orange" id=""><div class="boxup">
               <div class="boxup_text">Rejected Leaves</div>
               <div class="boxup_bold"><?php echo $rejected['total']; ?></div>
               <div class="boxup_stext">compared to last week</div></div>
               <div class="div_display">
                <div class="div_display_icon"><i class="fa-solid fa-arrow-down"></i>
               </div>+427</div>
            </div>

     </div>
<script src="../assets/js/admin/dashboard.js"></script>
<?php
include("../includes/footer.php");
?>