<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
 
  
  .text-holder{
    max-width: 58%;
    margin-top:10%;
    padding-left:10%;
  }
  
  .right{
    height:100vh;
    background-color: #b71c1c;
    position:relative;
  }
  
  #contact-us-form .white-form{
    width:40%;
    background-color: whitesmoke;
    margin-left:15%;
    margin-top:-10%;
    margin-bottom: 15%;
    padding:5%;
  }

  
  .bottom-text-left{
    padding-bottom:50px;
    max-width:480px;
    float:right;
    border: 1px solid black;
    padding-top:50px;
    font-size: 0.9em;
    font-weight:500;
  }
  
  .uk-text-justify{
    color:#263238;
  }
  

  .label{
    font-size:0.7em;
  }
  
  
  .form-button{
    background-color: #12398e;
    color:whitesmoke;
  }
  
  .form-textarea{
    height:150px;
    max-height: 200px;
  }
  
  .ext{
    background-color: #b71c1c;
    height:10vh;
    margin-top: -10%;
  }
  
  /*
  
  @media only screen and (max-width: 1024px) and (max-height: 1366px){
    .right{
      height:40vh;
      background-color: #b71c1c;
      position:relative;
    }
  }
  
  @media only screen and (max-width: 768px) and (max-height: 1024px){
    .right{
      height:60vh;
      background-color: #b71c1c;
      position:relative;
    }
    
    .white-form{
      position:absolute;
      width:50%;
      background-color: whitesmoke;
      margin-left:20%;
      margin-top:-20%;
      padding:5%;
    }
    
    .text-holder{
    max-width: 100%;
    margin-top:10%;
    padding-left:10%;
    padding-bottom:10%;
    }
  }
  
   @media only screen and (max-width: 375px) and (max-height: 812px){
    .white-form{
      position:absolute;
      width:50%;
      background-color: whitesmoke;
      margin-left:20%;
      margin-top:-10%;
      padding:5%;
    }
     
     .text-holder{
        max-width: 100%;
        margin-top:10%;
        padding-left:10%;
      }
     
     
     .bottom-text-left{
        padding-bottom:150px;
        max-width:480px;
        float:right;
        border: 1px solid black;
        padding-top:50px;
        font-size: 0.9em;
        font-weight:500;
      }
     
     .right{
      height:70vh;
      background-color: #b71c1c;
      position:relative;
    }
     
     
  }
  
  @media only screen and (max-width: 414px) and (max-height: 736px){
    .white-form{
      position:absolute;
      width:50%;
      background-color: whitesmoke;
      margin-left:20%;
      margin-top:-30%;
      padding:5%;
    }
     
     .text-holder{
        max-width: 100%;
        margin-top:10%;
        padding-left:10%;
      }
    
    .bottom-text-left{
        padding-bottom:150px;
        max-width:480px;
        float:right;
        border: 1px solid black;
        padding-top:50px;
        font-size: 0.9em;
        font-weight:500;
      }
  }
  
  
  @media only screen and (max-width: 375px) and (max-height: 667px){
    .right{
      height:70vh;
      background-color: #b71c1c;
      position:relative;
    }
  }
  
   @media only screen and (max-width: 412px) and (max-height: 732px){
    .right{
      height:70vh;
      background-color: #b71c1c;
      position:relative;
    }
  }
  */
  
  
</style>
<?php } ?>

<?php function display_title(){ ?>
  Contact Us
<?php } ?>

<?php function display_content(){ ?>

<div class="uk-section-default">
    <div class="uk-section uk-background-cover" style="background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb)">
        <div class="uk-container">
              
            <div class="uk-grid-match uk-child-width-1@m" uk-grid>
                <div class="text-holder">
                  <h1 class="uk-text-bold">Get Started</h1>
                <p class="uk-text-bold uk-text-justify">
                    We invite you to experience the Ibinex demo here, which will help you conceptualise
                    the possibilities of personalisation for your own exchange.
                    <br><br>
                    The next step is to contact us on-boarding. It is a simple process which you can
                    learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                  </p>

                  <ul class="uk-list uk-text-bold uk-text-justify">
                    <li><span><img src="https://png.icons8.com/color/50/000000/ok.png" width="20px" height="20px"></span>&nbsp &nbsp Local Escrow deposit (reserve only, no payment)</li>
                    <li><span><img src="https://png.icons8.com/color/50/000000/ok.png" width="20px" height="20px"></span>&nbsp &nbsp Letter of Intent</li>
                    <li><span><img src="https://png.icons8.com/color/50/000000/ok.png" width="20px" height="20px"></span>&nbsp &nbsp Proof of Escrow deposit</li>
                  </ul>

                  <p class="uk-list uk-text-bold uk-text-justify">
                    Please note that due to high demand, the current on-boarding timeframe is 4 months.
                  </p>
                </div>
                </div>
            </div>

        </div>
    </div>


<div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
    <div>
        <div class="uk-background-default uk-padding">
            <div class="bottom-text-left">
                <h1 class="uk-text-bold uk-text-justify">Support</h1>
        
                <p class="uk-text-bold uk-text-justify">
                Contact and feedback are integral to the Ibinex way,
                enabling us to cater to your needs and requirements
                effectively and efficiently.
                <br><br>
                For support regarding any aspect of the Ibinex
                platform, your use of this website or your own
                exchange integration, please contact us with your
                enquiry for personalised customer service.
                <br><br>
                We will endeavour to respond to you as promptly as
                possible.
                </p>
            </div>
        </div>
    </div>
    <div id="contact-us-form" style="background-color:#b71c1c;">
            <div class="white-form">
                <form>
                    <div class="uk-margin">
                        <label class="uk-text-left uk-text-bold label">Full Name</label>
                        <input class="uk-input uk-form-width-large form-input" spellcheck="false" type="text">
                    </div>
                    <div class="uk-margin">
                        <label class="uk-text-left uk-text-bold label">Email Address</label>
                        <input class="uk-input uk-form-width-large form-input" spellcheck="false" type="email">
                    </div>
                  
                    <div class="uk-margin">
                        <label class="uk-text-left uk-text-bold label">Subject</label>
                        <input class="uk-input uk-form-width-large  form-input" type="text">
                    </div>
                    
                    <div class="uk-margin">
                      <label class="uk-text-left uk-text-bold label">Message</label>
                      <textarea class="uk-input uk-form-width-large form-textarea" rows="6" cols="50"></textarea>
                    </div>
                    <div class="uk-margin">
                      <button class="uk-button uk-button-default uk-button-medium form-button">SEND</button>
                    </div>
                  
              </form>
        </div>
      
            
    </div>
</div>



<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>