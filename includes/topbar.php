 <div class="topslide" id="topslide">
      <div class="topslide_search">
        <div class="topslideicon" id="toggleSidebar">
          <i class="fa-solid fa-bars"></i>
        </div>
        <div class="search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Employee...">
        </div>
      </div>

      <!-- right: bell, avatar, name + dropdown -->
      <div class="topslide_dis">
        <div class="topslide_dis_icon">
          <i class="fa-solid fa-bell"></i>
          <span class="badge">3</span>
        </div>

        <div class="profile-dropdown" id="profileDropdown">
          <div>
            <span class="topslide_dis_text"><?= $_SESSION['name'] ?? 'User' ?></span>
            <span class="online-dot"></span>
          </div>
          <i class="fas fa-chevron-down dropdown-arrow" id="dropdownArrow"></i>

          <!-- dropdown menu -->
          <div class="dropdown-menu" id="dropdownMenu">
            <a href="#"><i class="fas fa-user-circle"></i> Profile</a>
            <a href="#"><i class="fas fa-sliders-h"></i> Settings</a>
            <div class="divider"></div>
            <a href="#" class="logout-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </div>
      </div>
    </div>

<script>
  // ---------- SIDEBAR COLLAPSE ----------
  (function(){
    const sidebar = document.getElementById('leftslide');
    const topbar = document.getElementById('topslide');
    const bodypart=document.getElementById('bodyslide');
    const toggleBtn = document.getElementById('toggleSidebar');
    toggleBtn.addEventListener("click",function(el){
      el.preventDefault();
      sidebar.classList.toggle("collapsed");
      topbar.classList.toggle("expanded");
      bodypart.classList.toggle("bigsize");
    });
  })();

  // ---------- DROPDOWN (profile) ----------
      const profileWrap = document.getElementById('profileDropdown');
      const dropdownMenu = document.getElementById('dropdownMenu');
      const arrow = document.getElementById('dropdownArrow');

      profileWrap.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdownMenu.classList.toggle('show');
        arrow.classList.toggle('fa-chevron-down');
        arrow.classList.toggle('fa-chevron-up');
      });

      // close dropdown when clicking outside
      document.addEventListener('click',function(e){
        e.stopPropagation();
         dropdownMenu.classList.remove('show');
         arrow.classList.add('fa-chevron-down')
         arrow.classList.remove('fa-chevron-up')
      });
      
</script>