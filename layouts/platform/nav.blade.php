<style>
  #estimated-account-balance-in {
    color: #76777C;
    font-size: 10px;
  }
  
  #usd-amount-balance {
    color: #978D67;
    font-size: 12px;
  }
  
  .nav-item > a > span {
    display: block;
  }
  
  .navbar-nav > .nav-item {
    margin-left: 5px;
    margin-right: 5px;
  }

  .btn-outline-violet-1 {
    border: #1B1A33 solid 1px;
    color: #122A5D;
  }
  
  .btn-outline-teal-1 {
    border: none;
    background-color: #00D5BD;
    color: #107F75;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #01010A;">
  <a class="navbar-brand" href="#"><img src="<?php __DIR__ ?>/assets/images/ibinex-logo-white.png" alt="Website Logo" height="55%" width="55%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="" href="#"> <span id="estimated-account-balance-in">Estimated Account Balance in USD</span> <span id="usd-amount-balance">$ 20, 456.95</span> </a>
      </li>
      <li class="nav-item">
          <a href="withdraw.php" class="btn btn-outline-violet-1">Withdraw</a>
      </li>
      <li class="nav-item">
          <a href="deposit.php" class="btn btn-outline-teal-1">Deposit</a>
      </li>
      <li class="navbar-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>