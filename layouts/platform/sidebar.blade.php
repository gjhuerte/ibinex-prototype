<style>
  .sidebar {
    background-color: #0A0827;
  }
  
  .sidebar-nav {
    list-style-type: none;
    padding-top: 10%;
    padding-left: 6%;
    padding-bottom: 40%;
  }
  
  .sidebar-nav > li {
    margin: 5% 0;  
  }
  
  .sidebar-nav > li > a {
    text-decoration: none;
    color: #303F7D;
    font-weight: 800;
    font-size: 12px;
  }
  
  .sidebar-nav > li > a > span {
    padding-left: 5%;
  }
  
  .sidebar-nav > li > .active {
    color: #2C3D87;
  }
  .sidebar { list-style: none;}
  .sidebar li { padding-left: 1em; text-indent: -.7em;}
  .sidebar li:before {
      color: #303F7D; /* or whatever color you prefer */
   }

  .sidebar a:link,
  .sidebar a:visited { color: #303F7D; text-decoration: none; }
  .sidebar a:hover   { color: #fff; text-decoration: none; }

  .sidebar li.active a{ color: #fff; text-decoration: none; }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
     $('.sidebar li').on('click', function(){
       $('.sidebar li').removeClass('active');
       $(this).addClass('active');
     })
  });
</script>

<div class="sidebar">
  <div class="sidebar-body">
    <ul class="sidebar-nav">
      <li class="sidebar-nav-item <?php if($current == 'myAccount') {echo 'active';} ?>">
        <a href="<?php __DIR__ ?> /platform/accounts/index.blade.php"> <i class="fas fa-briefcase"></i> <span class="sidebar-text"> My Account</span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'openOrders') {echo 'active';} ?>">
        <a href="#"> <i class="fas fa-chart-line"></i> <span class="sidebar-text"> Open Orders </span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'transactions') {echo 'active';} ?>">
        <a href="#"> <i class="fas fa-bitcoin"></i> <span class="sidebar-text"> Transactions </span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'security') {echo 'active';} ?>">
        <a href="<?php __DIR__ ?> /platform/security/index.blade.php"> <i class="fas fa-lock"></i> <span class="sidebar-text"> Security </span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'settings') {echo 'active';} ?>">
        <a href="#"> <i class="fas fa-cogs"></i> <span class="sidebar-text"> Settings </span></a>
      </li>
      <li class="sidebar-nav-item" <?php if($current == 'bankAccounts') {echo 'active';} ?>>
        <a href="#"> <i class="fas fa-cogs"></i> <span class="sidebar-text"> Bank Accounts </span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'cryptoaddresses') {echo 'active';} ?>">
        <a href="#"> <i class="fab fa-stack-exchange"></i> <span class="sidebar-text"> Cryptoaddresses </span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'history') {echo 'active';} ?>">
        <a href="#"> <i class="fas fa-history"></i> <span class="sidebar-text"> History </span></a>
      </li>
      <li class="sidebar-nav-item <?php if($current == 'logout') {echo 'active';} ?>">
        <a href="#"> <i class="fas fa-sign-out-alt"></i> <span class="sidebar-text"> Logout </span></a>
      </li>
    </ul>
  </div>
</div>