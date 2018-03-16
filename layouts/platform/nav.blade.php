<style type="text/css">
  .platform-nav-parent {
    display: grid;
    grid-template-columns: 1fr 3fr 4fr;
    grid-template-rows: 60px;
    background-color: #01010A;
  }
  
  .platform-nav-logo {
    grid-column: 1 / span 1;
    align-self: center;
    padding-left: 7%;
  }
  
  .platform-nav-right-items {
    grid-column: 3 / span 3;
    display: grid;
    grid-template-columns: auto;
    grid-template-rows: auto;
  }
  
  .platform-nav-right-items > ul {
    grid-column: auto;
    grid-row: auto;
    display: grid;
    grid-template-columns: auto auto auto auto auto;
    grid-template-rows: auto;
    margin: 0;
    padding: 0;
    border: 0;
  }
  
  .platform-nav-right-items > ul > li {
    grid-column: auto / span auto;
    align-content: center;
    align-items: center;
    align-self: center;
  }
  
  #estimated-account-balance-in {
    font-size: 10px;
    color: #76777C;
  }
  
  #usd-amount-balance {
    font-size: 12px;
    color: #978D67;
  }
  
  .platform-nav-right-items > ul > li > a > span {
    display: block;
    text-align: justify;
    font-weight: 900;
  }
  
  .platform-nav-right-items > ul > li > a, a:hover {
    text-decoration: none;
    text-align: center;
  }
  
  .platform-nav-list-item > form > button {
    border-radius: 5px;
    font-weight: 500;
    padding: 0.3em 1.400em;
  }
  
  #account-profile-information {
    background-color: #21224A;
    border: none;
    padding: 2% 25%;
    color: white;
    font-size: 10px;
  }
  
  .withdraw-submit {
    border: 2px solid #2E2C4C;
    color: #242F58;
    background-color: transparent;
  }
  
  .deposit-submit {
    border: 1px solid #2E2C4C;
    color: #017668;
    background-color: #00D6BC;
  }
</style>

<nav class="platform-nav-parent">
  <div class="platform-nav-logo" href="#">
    <img src="<?php __DIR__ ?>/assets/images/ibinex-logo-white.png" alt="Website Logo" height="55%" width="55%">
  </div>

  <div class="platform-nav-right-items">
    <ul class="list-unstyled">
      <li class="platform-nav-list-item">
        <a class="" href="#"> <span id="estimated-account-balance-in">Estimated Account Balance in USD</span> <span id="usd-amount-balance">$ 20, 456.95</span> </a>
      </li>

      <li class="platform-nav-list-item">
        <form method="get" action="withdraw.php" class="withdraw-form">
          <button class="withdraw-submit" type="submit">Withdraw</button>
        </form>
      </li>
      <li class="platform-nav-list-item">
        <form method="get" action="withdraw.php" class="deposit-form">
          <button class="deposit-submit" type="submit">Deposit</button>
        </form>
      </li>
      <li class="platform-nav-list-item">
        <button id="account-profile-information" href="#"> <span>Estimated Account in</span> <i class="fas fa-caret-down"></i></button>
      </li>
    </ul>
  </div>
</nav>