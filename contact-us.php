<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  
  
  .contact-us-background{
    background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);
    background-size: cover;
    background-position: 50% 50%;
    background-color: #edeef2;
    padding-top:17.8%;
  }
  
  .header-text {
    font-size:1.8em;  
    font-size: var(--heading-40px);
    font-weight: 900;
    letter-spacing: 1.3px;
  }
  
  .support-header{
    padding-bottom:6%;
  }
  
  .support-text{
    padding-right:5%;
  }
  
  .intro-text-top{
    color: #728298;
    font-size: 9.5pt;
    font-weight: 550;
    line-height:1.76;
  }
  .intro-text-top li span svg{
    margin-right: 10px;
  }
  
  .intro-text-top li{
    margin-top: -27px;
    line-height:2.8;
  }
  
  #last{
    margin-top:-7px;
  }
  
  .intro-text-bottom{
    color: #173d54;
    font-size: 0.8em;
    color: #728298;
    font-size: var( --paragraph-17px);
    font-weight: 600;
  }
  
  .text-holder{
    margin-left:12%;
    max-width: 40.8%;
  }
  
  .right{
    height:100vh;
    background-color: #b71c1c;
    position:relative;
  }
  
  .white-form{
    width:42%;
    background-color: whitesmoke;
    margin-left:8%;
    margin-top:-19%;
    margin-bottom: 15%;
    padding:5.5% 5% 6% 5%;
    position:absolute;
    z-index:2;
  }
  
  div#contact-us-form{
    background-color:#b71c1c !important;
    position:relative;
  }
  
  .bottom-text-left{
    padding-bottom:26.75%;
    max-width:387px;
    float:right;
    padding-top:104px;
    font-weight:550;
    font-size: 9.5pt;
    line-height: 1.76;
    padding-right: 3.6%;
  }
  

  .label{
    font-size:0.8em;
  }

  
  #contact-us-form .white-form .form-input, #contact-us-form .white-form .form-textarea{
    border-radius: 5px;
    width:100%;
-webkit-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
  }
  
  .form-button{
    border-radius: 5px;
    background-color: #142c5a;
    color:whitesmoke;
    font-weight: 900;
    width:47%;
    margin-top:3%;
  }
  
  .form-textarea{
    height:233px;
    max-height: 300px;
    
  }
  

  
  
  #ext{
    background-color: #b71c1c;
    height:15%;
    width:100%;
    top:0;
    margin-top: -38px;
    position:absolute;
    z-index:1;
  }
  
  .hidden{
    visibility:hidden;
  }
  
   @media only screen and (max-width: 1106px){

     .contact-us-background{
       padding-top:30%;
     }
     
     .text-holder{
       margin-left:11%;
     }

 
  }
  
  @media only screen and (max-width: 856px){

     
     
     .text-holder{
       margin-left:0%;
       max-width:55%;
     }
     
    .white-form{
      width: 55%;
    }
 
  }
  
  @media only screen and (max-width: 639px){
    .contact-us-background{
    background-image: url(https://images.pexels.com/photos/373076/pexels-photo-373076.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);
    background-size: 191%;
    background-position: top left;
    }
    
    
    .bottom-text-left{
      padding-top:70px;
      max-width: 100%;
      float: none;
    }
    
    .text-holder{
      margin-left:0;
    }
    
    .support-text{
      padding-right: 0;
    }
    
    .support-header{
      padding-bottom:3%;
    }
    
    div.bottom-section-container{
      padding:0 3% 0 3%;
    }
    
    div#ext{
      display:none;
    }
    
    div#contact-us-form{
      position:relative;
      background-color: white !important;
      height:90vh;
    }
    
    div#contact-us-form .white-form{
      margin-top:0;
      margin-bottom:0;
      margin-left:0;
      width:90%;
      background-color: white !important;
    }
   
    .form-input, .form-textarea{
-webkit-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
      width:100%;
      border-radius: 5px;
    }
    
    .form-textarea{
-webkit-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
-moz-box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
    height:150px;
    max-height: 200px;
    }
    
    .form-button{
    border-radius: 5px;
    background-color: #142c5a;
    color:whitesmoke;
    width:50%;
    font-weight: 600;
      height:55px;
    }
    
    .text-holder{
    max-width: 100%;
    margin-top:40%;
    height:auto;
    padding-bottom:20px;
    }
    
    .intro-text-top li span svg{
    margin-right: 10px;
  }
    .intro-text-top{
    font-size:12.5pt;
    font-weight: 500;
  }
    .intro-text-bottom{
    font-weight: 500;
  }
    
    .label{
      font-weight:500;
    }
    
  }
  
  @media only screen and (max-width: 320px){
    div#contact-us-form{
      height:130vh;
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
                <div id="get-started" class="text-holder">
                  <h1 class="uk-text-bold header-text">Get Started</h1>
                <p id="bottom-text-first" class="uk-text-bold uk-text-justify intro-text-top">
                    We invite you to experience the Ibinex demo here, which will help you to conceptualise
                    the possibilities of personalisation for your own exchange.
                    <br><br>
                    The next step is to contact us to discuss on-boarding. It is a simple process which you can
                    learn about in more detail on the Pricing page, but essentially consists of 3 steps:
                  </p>

                  <ul class="uk-list uk-text-bold uk-text-justify intro-text-top ">
                    <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 252 252"
                            style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#12d4b7"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span> Local Escrow deposit(reserve only, no payment)</li>
                    <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 252 252"
                            style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#12d4b7"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span> Letter of Intent</li>
                    <li><span>
                      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="20" height="20"
                            viewBox="0 0 252 252"
                            style="fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g id="Layer_1"><g id="surface1_4_"><path d="M231,126c0,57.98625 -47.01375,105 -105,105c-57.98625,0 -105,-47.01375 -105,-105c0,-57.98625 47.01375,-105 105,-105c57.98625,0 105,47.01375 105,105z" fill="#12d4b7"></path><path d="M181.6605,76.6605l-71.4105,71.38425l-29.4105,-29.3895l-14.68425,14.68425l44.09475,44.11575l86.0895,-86.1105z" fill="#000000"></path></g></g></g></svg>
                      </span> Proof of Escrow deposit</li>
                  </ul>

                  <p id="last" class="uk-list uk-text-bold uk-text-justify intro-text-top">
                    Please note that due to high demand, the current on-boarding timeframe is 4 months.
                  </p>
                </div>
                </div>
            </div>

        </div>
    </div>


<div class="uk-grid-collapse uk-child-width-expand@s bottom-section" uk-grid uk-grid>
    <div>
        <div class="uk-background-default uk-padding bottom-section-container">
            <div class="bottom-text-left">
                <h1 class="uk-text-bold uk-text-justify header-text support-header">Support</h1>
                <p class="uk-text-bold uk-text-justify intro-text-bottom support-text">
                Contact and feedback are integral to the Ibinex way,
                enabling us to cater to your needs and requirements
                effectively and efficiently.
                </p>
                <p class="uk-text-bold uk-text-justify intro-text-bottom support-text">
                For support regarding any aspect of the Ibinex
                platform, your use of this website or your own
                exchange integration, please contact us with your
                enquiry for personalised customer service.
                </p>
                <p class="uk-text-bold uk-text-justify intro-text-bottom support-text">
                We will endeavour to respond to you as promptly as
                possible.
                </p>
            </div>
        </div>
    </div>
    <div id="contact-us-form">
            
            <div class="white-form">
              
                <form>
                    <div class="uk-margin">
                        <label for="name" class="uk-text-left uk-text-bold label">Full Name</label>
                        <input id="name" class="uk-input uk-form-width-large form-input form" spellcheck="false" type="text">
                    </div>
                    <div class="uk-margin">
                        <label for="email" class="uk-text-left uk-text-bold label">Email Address</label>
                        <input id="email" class="uk-input uk-form-width-large form-input form" spellcheck="false" type="email">
                    </div>
                  
                    <div class="uk-margin">
                        <label for="subject" class="uk-text-left uk-text-bold label">Subject</label>
                        <input id="subject" class="uk-input uk-form-width-large  form-input form" type="text">
                    </div>
                    
                    <div class="uk-margin">
                      <label for="message" class="uk-text-left uk-text-bold label">Message</label>
                      <textarea id="message" class="uk-input uk-form-width-large form-textarea form" rows="6" cols="50"></textarea>
                    </div>
                    <div class="uk-margin">
                      <button class="uk-button uk-button-primary uk-button-medium form-button form">SEND</button>
                    </div>
                  
              </form>
             
        </div>
        <div id="ext">
          
        </div>
      
    </div>
</div>









<?php } ?>

<?php function scripts_include(){ ?>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
$(window).on("load", function(){
  window.sr = ScrollReveal({ mobile: false });

    sr.reveal('.header-text', { /* Animates the top introduction header */

    origin: 'left',
    distance: '200px',
    opacity: 0
    });

    sr.reveal('.intro-text-top', { /* Animates the introduction paragraph at the top */

    origin: 'left',
    opacity: 0,
    duration: 500,
    distance: '200px',
    delay: 250
    },100);

    sr.reveal('.intro-text-bottom', { /* Animates the introduction paragraph at the bottom */
    origin: 'bottom',
    opacity: 0,
    duration: 500,
    distance: '200px',
    delay: 250
    },100);
  
  sr.reveal('.mheader-text', { /* Animates the top introduction header */

    origin: 'left',
    distance: '200px',
    opacity: 0
    });
  
  sr.reveal('.mintro-text-bottom', { /* Animates the introduction paragraph at the bottom */
    origin: 'bottom',
    opacity: 0,
    duration: 500,
    distance: '200px',
    delay: 250
    },100);

    sr.reveal('.white-form', { /* Animates the form */
    origin: 'right',
    opacity: 0,
    duration: 500,
    distance: '500px',
    delay: 400
    });

    sr.reveal('.form', { /* Animates the form */
    origin: 'bottom',
    opacity: 0,
    duration: 500,
    distance: '100px',
    delay: 450
    },50);
});  
  
  


</script>
<?php } ?>