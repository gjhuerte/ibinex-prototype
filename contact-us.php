<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
<style>
  .contact-us-background{
    background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);
    background-size: cover;
    background-position: 50% 50%
  }
  .text-holder{
    max-width: 54%;
    margin-top:14%;
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
    max-width:565px;
    float:right;
    padding-top:77px;
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
    border: 1px solid black;
  }
  

  
  @media only screen and (max-width: 638px){
    .text-holder{
      max-width: 100%;
    }
    
    #contact-us-form .white-form{
    width:60%;
    background-color: whitesmoke;
    margin-left:15%;
    margin-top:-10%;
    margin-bottom: 15%;
    padding:5%;
    }
  }
  
</style>
<?php } ?>

<?php function display_title(){ ?>
  Contact Us
<?php } ?>

<?php function display_content(){ ?>

<div class="uk-section-default">
    <div class="uk-section uk-background-cover contact-us-background">
        <div class="uk-container">
              
            <div class="uk-grid-match uk-child-width-1@m" uk-grid>
                <div id="get-started" class="text-holder uk-animation-slide-left">
                  <h1 class="uk-text-bold">Get Started</h1>
                <p class="uk-text-bold uk-text-justify">
                    We invite you to experience the Ibinex demo here, which will help you conceptualise
                    the possibilities of personalisation for your own exchange.
                    <br><br>
                    The next step is to contact us on-boarding. It is a simple process which you can
                    learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                  </p>

                  <ul class="uk-list uk-text-bold uk-text-justify">
                    <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 252 252"
                            style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#4caf50"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span>&nbsp &nbsp Local Escrow deposit (reserve only, no payment)</li>
                    <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 252 252"
                            style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#4caf50"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span>&nbsp &nbsp Letter of Intent</li>
                    <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 252 252"
                            style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#4caf50"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span>&nbsp &nbsp Proof of Escrow deposit</li>
                  </ul>

                  <p class="uk-list uk-text-bold uk-text-justify">
                    Please note that due to high demand, the current on-boarding timeframe is 4 months.
                  </p>
                </div>
                </div>
            </div>

        </div>
    </div>


<div class="uk-grid-collapse uk-child-width-expand@s " uk-grid uk-grid>
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
                      <button class="uk-button uk-button-primary uk-button-medium form-button">SEND</button>
                    </div>
                  
              </form>
             
        </div>
        
      
            
    </div>
</div>







<?php } ?>

<?php function scripts_include(){ ?>
<script>
$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#get-started').offset().top
    }, 500);
  
  
    var y = $(this).scrollTop();
    
  console.log(y);
    
  
});
</script>
<?php } ?>