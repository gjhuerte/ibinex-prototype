<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  .context{
    background-image: url("https://images.pexels.com/photos/733852/pexels-photo-733852.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
    background-size: cover;
  }
  .context-inner-top{
    margin-left: 10%;
    max-width: 35%;
    padding: 20% 10px 30px 0px;
  }
  
  h1{
    font-weight: bold;
  }
  
  .middle{
    width:100%;
  }
  
  .context-middle{
    padding: 10% 5% 2% 10%;
    width: 35%;
    display: inline-block;
  }
  
  .form-container{
    position:absolute;
    width:50%;
    background-color:#b71c1c;
    height: 100vh;
    display:inline-block;
    margin-top:-10px;
    
  }
  
  .white-form{
    border: 1px solid white;
    width: 50%;
    position:absolute;
    background-color:whitesmoke;
    margin: -10% 10% 0 10%;
    padding: 5%;
  }
  

 
</style>
<?php } ?>

<?php function display_title(){ ?>
  Contact Us
<?php } ?>

<?php function display_content(){ ?>
  <div class="uk-container-expand context"> <!-- Begin introduction -->
    
    <div class="context-inner-top">

        <h1 class="uk-heading">Get Started</h1>
        
        <p class="intro-text">
          We invite you to experience the Ibinex demo here, which will help you conceptualise
          the possibilities of personalisation for your own exchange.
          <br><br>
          The next step is to contact us on-boarding. It is a simple process which you can
          learn about in more detail on the Pricing page, but essentially consists of 3 steps:
        </p>
        
        <ul class="uk-list uk-list-bullet intro-text">
          <li>Local Escrow deposit (reserve only, no payment)</li>
          <li>Letter of Intent</li>
          <li>Proof of Escrow deposit</li>
        </ul>
        
        <p class="intro-text">
          Please note that due to high demand, the current on-boarding timeframe is 4 months.
        </p>
        
      
    </div>
    
  </div> <!-- End of introduction -->



<div class="middle">
  <div class="context-middle">
        <h1 class="uk-heading">Support</h1>
        
          <p class="intro-text">
          Contact and feedback are integral to the Ibinex way,
          enabling us to cater to your needs and requirements
          effectively and efficiently.
          <br><br>
          For support regarding any aspect of the Ibinex
          platform, your use of this website or your own
          exchange integration, please contact us with your
          enquiry for personalised customer service.
          </p>
          <p class="intro-text">
          We will endeavour to respond to you as promptly as
          possible.
          </p>
  </div>
  
  <div class="form-container">
      <div class="white-form">
          <form>
            
              <div class="uk-margin">
                  <label>Full Name</label>
                  <input class="uk-input uk-form-width-large" type="text">
              </div>
              <div class="uk-margin">
                  <label>Email Address</label>
                  <input class="uk-input uk-form-width-large" type="text">
              </div>
              <div class="uk-margin">
                  <label>Subject</label>
                  <input class="uk-input uk-form-width-large" type="text">
              </div>
            
              <div class="uk-margin">
                  <label>Message</label>
                  <textarea class="uk-input uk-form-width-large"></textarea>
              </div>
              
              <button class="uk-button uk-button-primary">SEND</button>
          </form>
      </div>
  </div>
</div>









<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>