<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>
    <div class="bodyslide" id="bodyslide">
        <div class="formMiddle">
        <form action="action_leave_from.php" method="POST">
        <div class="main">
            <h3 class="fillup_from">Fill-Up Your From</h3>
            <div class="fillup_input">
                <span class="fillup_input_name">Name :</span>
                <input type="text" placeholder="Enter Your Name" name="name">
            </div>
            <div class="fillup_input">
                <span class="fillup_input_name">Start Date :</span>
                <input type="date" placeholder="Start date" name="s_date">
            </div>
             <div class="fillup_input">
                <span class="fillup_input_name">End Date :</span>
                <input type="date" placeholder="End date" name="e_date">
            </div>

             <div class="fillup_input">
                <span class="fillup_input_name">subject :</span>
                <input type="text" placeholder="total day" name="sub">
            </div>
             <div class="fillup_input">
                <span class="fillup_input_name"  >reason :</span>
                <textarea type="text" placeholder="reason" name="reason"></textarea>
                <!-- <textarea="text" placeholder="reason" name="reason"> -->
            </div>

            <button type="submit" class="button_submit">Submit</button>
</form>
        </div>
    </div>
    </div>
<script src="../../assets/js/admin/style.js"></script>
<?php
include("../includes/footer.php");
?>