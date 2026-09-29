<?php

include("includes/auth.php");
include("includes/db.php");

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);

include("includes/header.php");
include("includes/sidebar.php");
include("includes/topbar.php");

?>

<div class="bodyslide" id="bodyslide">

    <h2>My Profile</h2>

    <div class="profile">

        <img 
            src="<?= BASE_URL ?>/uploads/<?php echo $user['image']; ?>" 
            width="120"
        >

        <h3><?php echo $user['name']; ?></h3>

        <p>
            Email:
            <?php echo $user['email']; ?>
        </p>

        <p>
            Role:
            <?php echo $user['type'] == 1 ? "Admin" : "Employee"; ?>
        </p>

    </div>

</div>

<?php
include("includes/footer.php");
?>