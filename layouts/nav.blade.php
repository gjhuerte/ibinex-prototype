<!-- navigation bar -->

<style>
  
  .contact-info-navbar {
    background: #E3E3E3;
    display: grid;
    grid-template-columns: 5fr auto 1fr;
    grid-template-rows: 50px;
    
  }
  
  .contact-info-navbar-child {
    grid-column: 2 / span 1;
    grid-row: 1 / span 1;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 1fr;
    align-items: center;
    grid-gap: 40px;
  }
  
  .contact-info-navbar-nav {
    list-style-type: none;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 1fr;
    align-items: center;
    margin: 0;
    grid-gap: 30px;
  }
  
  .contact-info-navbar-nav > li {
    font-size: 12px;
    font-weight: 900;
    float: left;
  }
  
  .contact-info-navbar-nav > li > a {
    text-decoration: none;
  }
  
  .button-telegram-blue:hover {
    color: white;
    background-color: #4EA6D6;
  }

  .button-telegram-blue {
    border-radius: 7px;
    border: 1px solid #4EA6D6; 
    padding: 5px;
    color: #4EA6D6;
    font-size: 10px;
    font-weight: 900;
    transition: all 0.5s ease;
  }
  
  .navigation-navbar {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    grid-template-rows: 85px;
  }
  
  .navigation-navbar-child {
    grid-column: 2 / span 1;
    grid-row: 1 / span 1;
    display: grid;
    grid-template-columns: auto auto auto;
    grid-template-rows: auto;
    align-items: center;
    grid-gap: 35px;
  }
  
  .navigation-navbar-child-nav {
    list-style-type: none;
    display: grid;
    grid-template-columns: auto auto auto auto auto auto auto auto;
    grid-template-rows: auto;
    grid-gap: 20px;
  }
  
  .navigation-navbar-child-nav > li {
    float: left;
    font-size: 12px;
  }
  
  .navigation-navbar-child-nav > li > a {
    text-decoration: none;
    font-weight: 900;
    color: #293E64;
  }
  
  .navigation-navbar-child-nav > li > a {
    transition: 0.6s linear;
  }
  
  .navigation-navbar-child-nav > li > a > div:hover {
    border-bottom:  1.5px #293E64 solid;
    border-radius: 1px;
  }

  .button-live-demo-blue {
    margin-left: 20px;
    border: 1px solid;
    border-radius: 10px;
    padding: 13px 40px;
    background-color: #102B58;
    color: white;  
    transition: all 0.5s ease;
  }

  .button-live-demo-blue:hover {
    background-color: white;
    font-size: 15px;
    color: #102B58;  
  }

  .label-increasing {
    color: #10C243;
  }

  .label-decreasing {
    color: #C41227;
  }

  .label-white {
    color: white;
  }

  .live-chat-green {
    color: #168D41;
  }
  
  .navbar-currency {
    background: linear-gradient(to right, #102B58 , #C61924); 
    display: grid;
    grid-template-columns: auto;
    grid-template-rows: 45px;
  }
  
  .navbar-currency-child {
    align-items: center;
  }
  
  .navbar-currency-child-nav {
    list-style-type: none;
  }
  
  .navbar-currency-child-nav > li {
    float: left;
    font-weight: 600;
    margin-left: 7%;
    font-size: 8.5px;
    padding: 8px;
  }
  
  .btn-invisible {
    border: none;
    padding: 0;
    background-color: inherit;
  }
  
  .navbar-currency-child-nav > li > a {
    text-decoration: none;
  }
  
  .media-larger-devices {
     transition: left 0.5s;
  }
  
  .media-smaller-devices {
     transition: left 0.5s;
  }
  
  .navigation-navbar-sm {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  .navigation-navbar-sm > li {
    float: left;
    grid-column: 1 / span 1;
    grid-row: 1 / span 1;
    padding: 15% 10%;
  }
  .navigation-navbar-sm > li:nth-child(2) {
    grid-column: 2 / span 1;
  }
  
  .navigation-navbar-sm > li > a{
    text-decoration: none;
  }
  
  #hamburger-navbar-sm {
    font-size: 1.5em;
    color: #102B58;
    float:right;
    border: none;
  }
  
  @media (min-width : 900px) {
    .media-smaller-devices {
      display: none;
    }
  }
  
  @media (max-width: 900px) {
    .media-larger-devices {
      display: none;
    }
    
    .navbar-currency-child-nav {
      padding: 0;
      display: grid;
      grid-template-columns: auto auto;
      grid-template-rows: auto;
    }
    
    .navbar-currency-child-nav > li {
      align-items: center;
      float: right;
      text-align: center;
    }
    
    .navbar-currency-child-nav > li > a {
      font-weight: 900;
      font-size: 10px;
    }
    
    .navbar-currency-child-nav > li:not(.show-on-smaller-devices) {
      display: none;
    }
  }
</style>

<!-- topmost navigation -->
<div class="media-larger-devices">
  <nav class="contact-info-navbar">
    <div class="contact-info-navbar-child">

      <ul class="contact-info-navbar-nav">
        <li>
          <a href="#">
            <div style="color: #112C58;">
              <i class="fas fa-phone" data-fa-transform="flip-h" style="margin-right: 5px;"></i> 1-800-972-3981
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="live-chat-green">
              <i class="fas fa-comments" style="margin-right: 5px;"></i> Live Chat
            </div>
          </a>
        </li>
      </ul>

      <div>
        <form>
          <button class="button-telegram-blue">
            <i class="far fa-paper-plane"></i>  <span style="padding-left: 9px;padding-right: 9px;">join our telegram community</span>
          </button>
        </form>
      </div>

    </div>
  </nav>
</div>
<!-- topmost navigation -->

  <!--  navigation bar icon on smaller devices  -->
  <div class="media-smaller-devices">
    <!--   navigation bar icon at smaller devices   -->
    <ul class="navigation-navbar-sm">
      <li>
        <a class="" href="">
          <img src="assets/images/ibinex-logo.png">
        </a>
      </li>

      <li>
        <button class="btn-invisible" id="hamburger-navbar-sm">
          <i class="fas fa-bars"></i>
        </button>
      </li>
      
    </ul>
    <!--   navigation bar icon at smaller devices   -->
  </div>
  <!--  navigation bar icon on smaller devices  -->

<!-- nav for different pages -->
<nav class="media-larger-devices navigation-navbar">

  <!--  navigation bar on medium to large devices  -->
  <div class="navigation-navbar-child">
    <div class="navbar-logo-main">
      <img src="assets/images/ibinex-logo.png" alt="Ibinex Logo" width="90%" height="90%">
    </div>

    <ul class="navigation-navbar-child-nav">

      <li>
        <a href="index.php">
          <div>
            Home
          </div>
        </a>
      </li>
      <li class="uk-navbar-text-blue">
        <a href="why-ibinex.blade.php">
          <div class="uk-navbar-text-blue">
            Why Ibinex
          </div>
        </a>
      </li>
      <li>
        <a href="pricing.php">
          <div>
            Pricing
          </div>
        </a>
      </li>
      <li>
        <a href="services.php">
          <div class="uk-navbar-text-blue">
            Services
          </div>
        </a>
      </li>
      <li>
        <a href="about.php">
          <div>
            About Us
          </div>
        </a>
      </li>
      <li>
        <a href="security.php">
          <div>
            Security
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            Legal
          </div>
        </a>
      </li>
      <li>
        <a href="contact-us.php">
          <div>
            Contact Us
          </div>
        </a>
      </li>
    </ul>
    
    <div class="navbar-nav-button-live-demo">
      <form>
        <button class="button-live-demo-blue">Live Demo</button>
      </form>
    </div>

  </div>
  <!--  navigation bar on medium to large devices  -->
</nav>
<!-- nav for different pages -->

<!-- nav for different currencies -->
<nav class="navbar-currency">
  <div class="navbar-currency-child">

    <ul class="navbar-currency-child-nav">
      <li>
        <a href="">
          <div class="label-white">BTC/USD
            <div class="label-increasing"> 12,455.00</div>
          </div>
        </a>
      </li>

      <li class="show-on-smaller-devices">
        <a href="">
          <div class="label-white">BTC/USD
            <div class="label-increasing"> 12,455.00</div>
          </div>
        </a>
      </li>

      <li class="show-on-smaller-devices">
        <a href="">
          <div class="label-white">ETH/USD
            <div class="label-decreasing"> 697.00</div>
          </div>
        </a>
      </li>

      <li>
        <a href="">
          <div class="label-white">DASH/USD
            <div class="label-increasing"> 957.34</div>
          </div>
        </a>
      </li>

      <li>
        <a href="">
          <div class="label-white">XPR/USD
            <div class="label-decreasing"> 1.89</div>
          </div>
        </a>
      </li>

      <li>
        <a href="">
          <div class="label-white">LTC/USD
            <div class="label-increasing"> 209.20</div>
          </div>
        </a>
      </li>

      <li>
        <a href="">
          <div class="label-white">BTC/USD
            <div class="label-increasing"> 2,455.00</div>
          </div>
        </a>
      </li>

      <li>
        <a href="">
          <div class="label-white">BH/USD
            <div class="label-increasing"> 12,455.00</div>
          </div>
        </a>
      </li>
    </ul>

  </div>
</nav>
<!-- nav for different currencies -->

<!-- navigation bar -->