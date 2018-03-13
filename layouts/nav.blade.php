<!-- navigation bar -->

<style>
  .uk-button-telegram-blue:hover {
    color: white;
    background-color: #7FCBE5;
    border: none;
  }
  .uk-button-telegram-blue {
    border-color: #7FCBE5;
    color: #7FCBE5;
  }
  
  .uk-button-live-demo-blue {
    background-color: #102B58;
    color: white;
  }
  
  .uk-label-increasing {
    color: #10C243;
  }
  
  .uk-label-decreasing {
    color: #C41227;
  }
  
  .uk-label-white {
    color: white;
  }
  
  .uk-navbar-text-blue {
    color: #284069;
  }
  
  .uk-live-chat-green {
    color: #168D41;
  }
  
  html,body
  {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
  }
</style>

<!-- topmost navigation -->
<div class="uk-visible@m">
  <nav class="uk-navbar-container" uk-navbar="mode: click" style="height: 60px;">
      <div class="uk-navbar-right">

          <ul class="uk-navbar-nav">
              <li>
                <a href="">
                  <div class="uk-navbar-text-blue">
                     <i class="fas fa-phone" style="margin-right: 10px;"></i> 1-800972-3981
                  </div>
                </a>
            </li>
            <li>
              <a href="">
                <div class="uk-live-chat-green">
                  <i class="fas fa-comments" style="margin-right: 10px;"></i> Live Chat
                </div>
              </a>
            </li>
            
          </ul>

          <div class="uk-navbar-item">
              <form action="javascript:void(0)">
                  <button class="uk-button uk-button-default uk-button-telegram-blue" style="border-radius: 10px; padding: 0px 2px;">
                    <i class="fab fa-telegram"></i> join our telegram community
                </button>
              </form>
          </div>

      </div>
  </nav>
</div>
<!-- topmost navigation -->

<!-- nav for different pages -->
<nav class="uk-navbar-container" uk-navbar="mode: click" style="background-color: white; height: 100px;">
  
    <!--  navigation bar icon on smaller devices  -->
    <div class="uk-navbar-left uk-hidden@s">    
        <!--   navigation bar icon at smaller devices   -->  
        <a class="uk-padding" href="">
          <img src="https://www.grouptravelvideos.com/images/client/00954/resources/you%20logo%20here.png" alt="" width=95px height=95px>
        </a>
        <!--   navigation bar icon at smaller devices   -->  
    </div>
    <!--  navigation bar icon on smaller devices  -->
  
    <!--   navigation bar hamburger menu   -->
    <div class="uk-navbar-right uk-hidden@s">
      <a href="#"></a>

      <div class="uk-offcanvas-content">

          <a class="uk-navbar-toggle" uk-navbar-toggle-icon type="button" uk-toggle="target: #offcanvas-overlay"></a>

          <div id="offcanvas-overlay" uk-offcanvas="overlay: true">
              <div class="uk-offcanvas-bar">

                  <button class="uk-offcanvas-close" type="button" uk-close></button>


                  <h3>Title</h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

              </div>
          </div>

      </div>
    </div>
    <!--   navigation bar hamburger menu   -->
  
    <!--  navigation bar on medium to large devices  -->
    <div class="uk-navbar-center uk-visible@s">
        <img src="https://www.grouptravelvideos.com/images/client/00954/resources/you%20logo%20here.png" alt="" width="15%" height="15%"> 
        
        <ul class="uk-navbar-nav">
      
            <li class="uk-navbar-text-blue">
              <a href="index.php">
                <div class="uk-navbar-text-blue">
                  Home
                </div>
              </a>
            </li>
            <li class="uk-navbar-text-blue">
              <a href="pricing.php">
                <div class="uk-navbar-text-blue">
                  Pricing
                </div>
              </a>
            </li>
            <li class="uk-navbar-text-blue">
              <a href="services.php">
                <div class="uk-navbar-text-blue">
                  Services
                </div>
              </a>
            </li>
            <li class="uk-navbar-text-blue">
              <a href="about.php">
                <div class="uk-navbar-text-blue">
                  About Us
                </div>
              </a>
            </li>
            <li class="uk-navbar-text-blue">
              <a href="security.php">
                <div class="uk-navbar-text-blue">
                  Security
                </div>
              </a>
            </li>
            <li class="uk-navbar-text-blue">
              <a href="">
                <div class="uk-navbar-text-blue">
                  Legal
                </div>
              </a>
            </li>
            <li class="uk-navbar-text-blue">
              <a href=contact-us.php"">
                <div class="uk-navbar-text-blue">
                  Contact Us
                </div>
              </a>
            </li>
      
            <li class="uk-navbar-item">
                <form action="javascript:void(0)">
                    <button class="uk-button uk-button-primary uk-button-live-demo-blue" style="border-radius: 5px;">Live Demo</button>
                </form>
            </li>
        </ul>
      
    </div>
    <!--  navigation bar on medium to large devices  -->
</nav>
<!-- nav for different pages -->

<!-- nav for different currencies -->
<nav class="uk-navbar-container" uk-navbar="mode: click" style="background: linear-gradient(to right, #102B58 , #C61924); height: 60px;">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav">
          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">BTC/USD <div class="uk-label-increasing uk-navbar-subtitle"> 12,455.00</div></div> </a>
          </li>
          
          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-hidden@s">BTC/USD <div class="uk-label-increasing uk-navbar-subtitle"> 12,455.00</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-hidden@s">ETH/USD <div class="uk-label-decreasing uk-navbar-subtitle"> 697.00</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">DASH/USD <div class="uk-label-increasing uk-navbar-subtitle"> 957.34</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">XPR/USD <div class="uk-label-decreasing uk-navbar-subtitle"> 1.89</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">LTC/USD <div class="uk-label-increasing uk-navbar-subtitle"> 209.20</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">BTC/USD <div class="uk-label-increasing uk-navbar-subtitle"> 2,455.00</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">BH/USD <div class="uk-label-increasing uk-navbar-subtitle"> 12,455.00</div></div> </a>
          </li>

          <li>
              <a href=""> <div class="uk-label-white uk-padding-small uk-visible@s">BH/USD <div class="uk-label-increasing uk-navbar-subtitle"> 12,455.00</div></div> </a>
          </li>
        </ul>

    </div>
</nav>
<!-- nav for different currencies -->

<!-- navigation bar -->