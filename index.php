<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif !important;
}
  
.imgHeight {
  height: 100vh;
}
  
.about {
  background-color: #F0F8FF;  
}
  
.img1 {
    filter: grayscale(100%);
}
  
.padding {
  padding-left: 20%;
  padding-right: 15%;
}
  
.padding1 {
  padding-top: 40px;  
}
  
.border1 {
  border-right: 1px solid #aaa;  
}
  
.border2 {
  border-bottom: 1px solid #aaa;  
}
  
.uk-text-center1 {
    margin-top: 0px;
}
  
  .coolors {
    color: #203771;
  }
</style>
<?php } ?>

<?php function display_title(){ ?>
  Ibinex
<?php } ?>

<?php function display_content(){ ?>
     <div>
         <div class="uk-section-default">
            <img class="imgHeight img1" src="https://images.pexels.com/photos/417236/pexels-photo-417236.jpeg?w=1920&h=1080&auto=compress&cs=tinysrgb">
            <div class="uk-overlay uk-light uk-position-bottom">
                <form>
                  <div class="uk-margin">
                      <input class="uk-input uk-form-width-medium uk-form-default" type="email" >
                      <button class="uk-button uk-button-danger" type="button" tabindex="-1">REQUEST A DEMO</button>
                  </div>
                </form>
            </div>
         </div>
    </div>
        
    <div>
      <div class="uk-section uk-section-muted">
         <div class="uk-container">
            <div class="uk-column-1-2@m">
                <img src="https://www.xoticpc.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/predator_g9-593_front.png" alt="">
                <h2>Ibinex - The Gateway to your Own Customized Cryptocurrency Ecosystem</h2>
                <p>With an in-depth understanding of evolving blockchain technology and cryptocurrency development. Ibinex invite you to engage with a fully-customizeable, private, institutional white label platform. Trail-blazing turnkey solutions to merge with your own web-based platform. Ibinex will show you definitively how to build a cryptocurrency exchange, your way.</p>
            </div>
        </div>
      </div>
    </div>
      
    <div>
        <h3 class="uk-text-center padding1">Exchange your Way with Ibinex.</h3>
        <h3 class="uk-text-center uk-text-center1">Your Turn-Key Solution Includes:</h3>
      
        <div class="uk-section padding padding1 uk-grid-collapse uk-child-width-1-2@s uk-grid-match" uk-grid>
            <div>
                
                <div class="uk-padding border1 border2 uk-text-left" >
                  <i class="fas fa-space-shuttle fa-3x"></i>
                   <h3 class="coolors">
                      Tailored Front End content website
                   </h3>
                  <p>
                    Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand. The Ibinex solution showcases enhanced practically and performance driven features.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                  <i class="fas fa-desktop fa-3x"></i>
                   <h3 class="coolors">
                      Full CRM &amp; Back Office Solution
                   </h3>
                  <p>
                    The Ibinex ecosystem assimilates a complete Customer Relationship 
                  </p>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s" uk-grid>
            <div>
                <div class="uk-padding border1 border2">
                  <i class="fas fa-money-bill-alt fa-3x"></i>
                   <h3 class="coolors">
                      Aggregated Liquidity Exchange
                   </h3>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                  <i class="far fa-credit-card fa-3x"></i>
                    <h3 class="coolors">
                      Complete Processing solution
                   </h3>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s" uk-grid>
            <div>
                <div class="uk-padding border1 border2">
                  <i class="fas fa-book fa-3x"></i>
                    <h3 class="coolors">
                      Compliant Banking Custodian service
                   </h3>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                  <i class="fas fa-globe fa-3x"></i>
                    <h3 class="coolors">
                      Hosted in a secure private cloud environment
                   </h3>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>