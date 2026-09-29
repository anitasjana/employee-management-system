<?php
require_once __DIR__ . '/config.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>

 
 <div class="leftslide" id="leftslide">
    <div class="leftslidetop">
      <div class="leftslidimg">
        <img src="<?=BASE_URL?>/assets/images/admin/thr-removebg-preview(1).png" alt="admin" onerror="this.style.display='none'">
      </div>
      <h2 class="leftslideadmin"><?= ($_SESSION['type'] ?? '') == '1' ? 'Admin' : 'Employee' ?></h2>
    </div>

    <div class="leftslidebutton">
      <!-- Dashboard -->
      <ul class="nav-list">
      <li>
        <a href="<?= BASE_URL ?>/<?= (($_SESSION['type'] ?? '') == '1') ? 'admin/dashboard.php' : 'employee/dashboard.php' ?>"
           class="<?= $current_page == 'dashboard.php' ? 'active' : '' ?>">
            <i class="fas fa-table-columns"></i>
            <span>Dashboard</span>
        </a>

      </li>
      </ul>
    
      <?php if (($_SESSION['type'] ?? '') == '1'): ?>
      <!-- Employee -->
      <div class="nav-category"><span class="line"></span><span>Employee</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="<?= BASE_URL ?>/admin/users.php" class="<?= $current_page == 'users.php' ? 'active' : '' ?>"><i class="fas fa-users"></i><span>All Employees</span></a></li>
        <li><a href="<?= BASE_URL ?>/admin/addusers.php" class="<?= $current_page == 'addusers.php' ? 'active' : '' ?>"><i class="fas fa-user-plus"></i><span>Add Employee</span></a></li>
      </ul>
     
      <!-- Leave -->
      <div class="nav-category"><span class="line"></span><span>Leave</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="<?= BASE_URL ?>/admin/pending.php" class="<?= $current_page == 'pending.php' ? 'active' : '' ?>"><i class="fas fa-clock"></i><span>Pending</span></a></li>
        <li><a href="<?= BASE_URL ?>/admin/approve.php" class="<?= $current_page == 'approve.php' ? 'active' : '' ?>"><i class="fas fa-check-circle"></i><span>Approved</span></a></li>
        <li><a href="<?= BASE_URL ?>/admin/reject.php" class="<?= $current_page == 'reject.php' ? 'active' : '' ?>"><i class="fas fa-times-circle"></i><span>Rejected</span></a></li>
      </ul>

      <!-- Communication -->
      <div class="nav-category"><span class="line"></span><span>Communication</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="<?= BASE_URL ?>/admin/chat/chat.php" class="<?= $current_page == 'chat.php' ? 'active' : '' ?>"><i class="fas fa-comment-dots"></i><span>Chat</span></a></li>
      </ul>

      <?php else: ?>

 <!-- ================= EMPLOYEE MENU =================  -->

    <!-- My Work -->
    <div class="nav-category">
        <span class="line"></span>
        <span>MY WORK</span>
        <span class="line"></span>
    </div>

    <ul class="nav-list">

        <li>
            <a href="<?= BASE_URL ?>/employee/leave_from.php"
              class="<?= $current_page == 'leave_from.php' ? 'active' : '' ?>">
                <i class="fas fa-calendar-plus"></i>
                <span>Apply Leave</span>
            </a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>/employee/leave_table.php"
              class="<?= $current_page == 'leave_table.php' ? 'active' : '' ?>">
                <i class="fas fa-calendar-check"></i>
                <span>My Leave</span>
            </a>
        </li>

    </ul>


    <!-- Communication -->
    <div class="nav-category">
        <span class="line"></span>
        <span>COMMUNICATION</span>
        <span class="line"></span>
    </div>

    <ul class="nav-list">

        <li>
           <a href="<?= BASE_URL ?>/employee/chat/chat.php"
           class="<?= in_array($current_page, ['chat.php', 'chat_veiw.php']) ? 'active' : '' ?>">                <i class="fas fa-comment-dots"></i>
                <span>Chat</span>
            </a>
        </li>

    </ul>

<?php endif; ?>

      <!-- Account -->
      <div class="nav-category"><span class="line"></span><span>Account</span><span class="line"></span></div>
      <ul class="nav-list">
        <li><a href="#"><i class="fas fa-user-circle"></i><span>Profile</span></a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a></li>
      </ul>

      <!-- Logout -->
      <div class="logout-wrap">
        <ul class="nav-list">
          <li><a href="<?= BASE_URL ?>/logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
      </div>
      <div style="height:6px;"></div>
    </div>
  </div>

  <!-- ========== MAIN WRAPPER ========== -->
  <div style="display:flex; flex-direction:column; width:100%;">

      <script>
        const links = document.querySelectorAll('.nav-list li a');
        function removeActive(){
            const activeLine = document.querySelector('.nav-list li a.active');
            if(activeLine)
                activeLine.classList.remove('active');
        };
        (function(){
            links.forEach(function(link){
                link.addEventListener('click',function(el){
                    // el.preventDefault();
                    removeActive();
                    link.classList.add('active');
                });
            });
        })();
    </script>