
<?php
include("../includes/auth.php");
include("../includes/db.php");
include("../includes/header.php");
include("../includes/sidebar.php");
include("../includes/topbar.php");
?>

<div class="add-employee-page" id="bodyslide">
    <div class="bodyslide_form">
        <div class="main">

            <h3 class="fillup_from">Add New Employee</h3>

            <form action="action_add_user.php" method="POST" enctype="multipart/form-data">

                <div class="fillup_input">
                    <span class="fillup_input_name">Name :</span>
                    <input type="text" name="name"
                           placeholder="Enter Employee Name" required>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Email Address :</span>
                    <input type="email" name="email"
                           placeholder="Enter Email Address" required>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Phone :</span>
                    <input type="tel" name="phone"
                           placeholder="Enter Phone Number" required>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Password :</span>
                    <input type="password" name="password"
                           placeholder="Enter Password" required>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Department :</span>
                    <select name="department" required>
                        <option value="">Select Department</option>
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Sales">Sales</option>
                    </select>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Designation :</span>
                    <input type="text" name="designation"
                           placeholder="Enter Designation" required>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Joining Date :</span>
                    <input type="date" name="joining_date" required>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Gender :</span>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Address :</span>
                    <textarea name="address"
                              placeholder="Enter Address" required></textarea>
                </div>

                <div class="fillup_input">
                    <span class="fillup_input_name">Profile Image :</span>
                    <input type="file" name="img" accept="image/*">
                </div>

                <button type="submit" class="button_submit">
                    Add Employee
                </button>

            </form>

        </div>
    </div>
</div>

<?php
include("../includes/footer.php");
?>
