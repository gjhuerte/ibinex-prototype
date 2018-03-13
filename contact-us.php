<?php require 'template.php'; ?>

<?php function styles_include(){ ?>

<style>

  .intro-text{
    color: #708090;
    font-weight: bold;
    font-size: 0.9em;
  }
  .container{
    padding: 130px 30px 20px 200px;
    max-width:55%;
    text-align:justify;
  }
  
  h1.header{
    color: #2c3e50;
    font-weight:900;
    padding-bottom:30px;
  }
  
  .bottom{
    width:100vw;
    position:relative;
  }
  
   .left{
     text-align:justify;
     display:inline-block;
     width:30vw;
     padding: 130px 30px 180px 200px; 
  }
  
  .right{
    position:absolute;
    bottom:0;
    background-color: #b71c1c;
    height:110%;
    width:60vw;
    display:inline-block;
  }
  
  
  
  .white-form{
    width: 25vw;
    margin: -90px 0 125px 80px;
    background-color:whitesmoke;
    padding:5% 5% 5% 5%;
    position:absolute;
  }
  
  .label{
    font-size: 0.8em;
    font-weight: bold;
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
    background-color:#04293D;
    width:50%;
  }
  
  
 @media only screen and (max-width: 1024px) {
   .container{
      padding: 200px 30px 20px 200px;
   }
}
  
  @media only screen and (max-width: 768px) {
   .container{
      padding: 200px 30px 20px 100px;
      max-width:100%;
   }
    
    .left{
      text-align:justify;
      display:inline-block;
      width:100%;
      padding:0%;
    }
    
    .right{
      display:inline-block;
      position:relative;
    }
    
    .white-form{
      position:relative;
      float:right;
      clear:right;
      display:inline-block;
    }
    
}
  
  
  

  

  
  
  

  

 
</style>
<?php } ?>

<?php function display_title(){ ?>
  Contact Us
<?php } ?>

<?php function display_content(){ ?>




<div class="uk-section-default">
    <div class="uk-section uk-light uk-background-cover" style="background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb)">
        <div class="uk-container">
              
            <div class="uk-grid-match uk-child-width-1@m" uk-grid>
              <div class="container">
                    <h1 class="uk-heading header">Get Started</h1>
                <p class="intro-text">
                    We invite you to experience the Ibinex demo here, which will help you conceptualise
                    the possibilities of personalisation for your own exchange.
                    <br><br>
                    The next step is to contact us on-boarding. It is a simple process which you can
                    learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                  </p>

                  <ul class="uk-list intro-text">
                    <li><span><img src="https://png.icons8.com/color/50/000000/ok.png" width="20px" height="20px"></span>&nbsp &nbsp Local Escrow deposit (reserve only, no payment)</li>
                    <li><span><img src="https://png.icons8.com/color/50/000000/ok.png" width="20px" height="20px"></span>&nbsp &nbsp Letter of Intent</li>
                    <li><span><img src="https://png.icons8.com/color/50/000000/ok.png" width="20px" height="20px"></span>&nbsp &nbsp Proof of Escrow deposit</li>
                  </ul>

                  <p class="intro-text">
                    Please note that due to high demand, the current on-boarding timeframe is 4 months.
                  </p>
              
              </div>
                   
                
                </div>
            </div>

        </div>
    </div>
</div>



<div class="bottom">
  <div class="left">
      <div class="uk-container">
      <h1 class="uk-heading header">Support</h1>
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
  </div>
  
  <div class="right">
      <div class="white-form">
          <form>

              <div class="uk-margin">
                  <label class="label">Full Name</label>
                  <input class="uk-input uk-form-width-large form-input" type="text" spellcheck="false">
              </div>
              <div class="uk-margin">
                  <label class="label">Email Address</label>
                  <input class="uk-input uk-form-width-large form-input" type="email" spellcheck="false">
              </div>
              <div class="uk-margin">
                  <label class="label">Subject</label>
                  <input class="uk-input uk-form-width-large form-input" type="text" spellcheck="false">
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
</div>

  




<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>