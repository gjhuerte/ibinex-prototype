<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  .top-context{
    background-image: url("https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
    background-size: cover;
    background-position: center center;
    height:100vh;
    position:relative;
  }
  
 
  
  .top{
    position:absolute;
    top:30%;
    left:20%;
    width:30%;
    text-align:justify;
  }
  
  .bottom-context{
    position:relative;
    height: 100vh;
  }
  
  .bottom-left{
    position:absolute;
    height:inherit;
    padding-top:10%;
    padding-left: 20%;
    text-align:justify;
    width:25%;
  }
  
  .bottom-right{
    background-color: #b71c1c;
    bottom:0;
    left:50%;
    width:50%;
    height:105%;
    position:absolute;
  }
  
  .white-form{
    width: 40%;
    margin: -70px 0 125px 80px;
    background-color:whitesmoke;
    padding:5% 5% 5% 5%;
  }
  
  .label{
    font-size: 0.8em;
  }
  
  .form-textarea{
    height:80%;
    max-height: 225px;
    -webkit-box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.15);
    -moz-box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.15);
    box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.15);
    border-radius:3px;
  }
  
  .form-input{
-webkit-box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.15);
-moz-box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.15);
box-shadow: -1px 3px 8px -2px rgba(0,0,0,0.15);
     border-radius:3px;
  }
  
  .form-button{
    border-radius:3px;
    background-color:#0D47A1;
  }

  

  
  
  

  

 
</style>
<?php } ?>

<?php function display_title(){ ?>
  Contact Us
<?php } ?>

<?php function display_content(){ ?>
<div class="top-context"> <!-- Begin introduction -->
    
    <div class="top">
      <h2><b>Getting Started</b></h2>
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


<div class="bottom-context"> <!-- Begin introduction -->
        <div class="bottom-left">
          <h2><b>Support</b></h2>
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
  
        <div class="bottom-right">
          <div class="white-form">
             
            <form>
                <div class="uk-margin">
                    <label class="label">Full Name</label>
                    <input class="uk-input uk-form-width-large form-input" spellcheck="false" type="text">
                </div>
              
                <div class="uk-margin">
                    <label class="label">Email Address</label>
                    <input class="uk-input uk-form-width-large form-input" spellcheck="false" type="text">
                </div>
              
                <div class="uk-margin">
                    <label class="label">Subject</label>
                    <input class="uk-input uk-form-width-large form-input" spellcheck="false" type="text">
                </div>
              
                <div class="uk-margin">
                    <label class="label">Message</label>
                    <textarea class="uk-input uk-form-width-large form-textarea" spellcheck="false" rows="5"></textarea>
                </div>
              
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary form-button">SEND</button>
                </div>

            </form>
            
          </div>
        </div>
</div> <!-- End of introduction -->







<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>