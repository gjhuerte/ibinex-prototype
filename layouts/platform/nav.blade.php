<style>
  #estimated-account-balance-in {
    color: #727276;
    font-size: 9px;
    font-weight: 900;
  }
  
  #usd-amount-balance {
    color: #AD9331;
    font-size: 11px;
    font-weight: 900;
  }
  
  .nav-item > a > span {
    display: block;
  }
  
  .navbar-nav > .nav-item {
    margin-left: 10px;
    margin-right: 10px;
  }

  .btn-outline-violet-1 {
    border: #0D49A5 solid 1px;
    color: #0D49A5;
  }
  
  .btn-outline-teal-1 {
    border: none;
    background-color: #00D5BD;
    color: #002F30;
  }
  
  #profile-dropdown {
    background-color: #20224A;
    color: white;
    padding: 6px 80px 6px 5px;
    font-size: 12px;
    font-weight: 200;
    border-radius: 5px;
  }
  
  #nav-withdraw {
    font-weight: 450;
    padding: 6px 35px; 
    font-size: 13px;
  }
  
  #nav-deposit {
    font-weight: 450;
    padding: 6px 35px; 
    font-size: 13px;
  }
  
  #profile-dropdown-text {
    margin-left: 5px;
  }
  
  #innerPlatformContent > .navbar > .nav-item {
    
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #01010A;">
  <a class="navbar-brand" href="#"><img src="<?php __DIR__ ?>/assets/images/ibinex-logo-white.png" alt="Website Logo" height="55%" width="55%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#innerPlatformContent" aria-controls="innerPlatformContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="innerPlatformContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="" href="#"> <span id="estimated-account-balance-in">Estimated Account Balance in USD</span> <span id="usd-amount-balance">$ 20, 456.95</span> </a>
      </li>
      <li class="nav-item">
          <a href="withdraw.php" id="nav-withdraw" class="btn btn-outline-violet-1">Withdraw</a>
      </li>
      <li class="nav-item">
          <a href="deposit.php" id="nav-deposit" class="btn btn-outline-teal-1">Deposit</a>
      </li>
      <li class="navbar-item dropdown">
        <a class="nav-link dropdown-toggle" id="profile-dropdown" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <img src="https://api.adorable.io/avatars/285/abott@adorable.png" class="img rounded-circle" height=20px/>
          <span id="profile-dropdown-text">Dropdown link</span> <span class="badge badge-danger">1</span>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>