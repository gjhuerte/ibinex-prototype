<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif !important;
}
  
  #nusku-header {
    box-sizing: border-box;
    min-height: 100vh;
    display: flex;
  }
  
  #header-img {
    order: 0;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    background-image: url(https://images.pexels.com/photos/417236/pexels-photo-417236.jpeg?w=1920&h=1080&auto=compress&cs=tinysrgb);
    filter: grayscale(100%);
  }
  
  #header-content {
    order: 1;
    background-color: #f1f1f1;
    text-align: justify;
    padding: 5% 12% 8% 6%;
  }
  
  #nusku-intro {
    box-sizing: border-box;
    min-height: 50vh;
    display: flex;
    background-color: #f8f8f8;
  }
  
  #intro-title {
    font-weight: bold;
  }
  
  #intro-img {
    order: 0;
    overflow: hidden;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    background-image: url(https://www.xoticpc.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/predator_g9-593_front.png);
  }
  
  #intro-content {
    order: 1;
    padding: 8% 18% 8% 6%;
  }
  
  #feature-header {
    font-weight: bold;
  }
  
  #nusku-media {
    
  }
  
  #nusku-media-title {
    color: #1A1A1A;
    font-weight: bold;
    text-align: center;
    padding-top: 8%;
  }
  
  #nusku-media-cov {
    padding: 7% 8%;
    text-align: center;
  }
  
  .nusku-media-logo {
    display: inline-block;
    margin: 0px 9px;
    height: 125px;
    width: 150px;
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
    font-weight: bold;
}
  
  .uk-grid {
    margin-left: 0;
  }
  
@media only screen and (max-width: 768px) {
        /* For mobile phones: */
        [class*="uk-width-"] {
            width: 100%;
        }
        .padding {
            padding-left: 0%;
            padding-right: 0%;
        }
        #intro-content{
            order: 0;
            padding:2% 16%;
        }
        #intro-img{
            order: 1;
            min-height: 20em;
        }
        .intro-padding{
            padding-bottom: 3%;
        }
        
    }
</style>
<?php } ?>

<?php function display_title(){ ?>
  Ibinex
<?php } ?>

<?php function display_content(){ ?>
         <div id="nusku-header" class="uk-grid">
             <div id="header-img" class="uk-width-expand">
                <h2>Introducing CryptoBridge</h2>
             </div>
        </div>

                  
      <div id="nusku-intro" class="uk-grid">
            <div id="intro-content" class="uk-width-1-2 intro-padding">
                <h2 id="intro-title">Ibinex - The Gateway to your Own Customized Cryptocurrency Ecosystem</h2>
                <p>With an in-depth understanding of evolving blockchain technology and cryptocurrency development. Ibinex invite you to engage with a fully-customizeable, private, institutional white label platform. Trail-blazing turnkey solutions to merge with your own web-based platform. Ibinex will show you definitively how to build a cryptocurrency exchange, your way.</p>
            </div>
            <div id="intro-img" class="uk-width-1-2 intro-padding">
                
                
            </div>
      </div>
      
    <div>
        <h3 id="feature-header" class="uk-text-center padding1">Exchange your Way with Ibinex.</h3>
        <h3 id="feature-header" class="uk-text-center uk-text-center1">Your Turn-Key Solution Includes:</h3>
      
        <div class="uk-section padding padding1 uk-grid-collapse uk-child-width-1-2@s uk-grid-match" uk-grid>
            <div>
                
                <div class="uk-padding border1 border2 uk-text-left" >
                   <img src="assets/images/picture1.png" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Tailored Front End content website
                   </h3>
                  <p>
                    Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand. The Ibinex solution showcases enhanced practically and performance driven features.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                   <img src="assets/images/picture2.png" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Full CRM &amp; Back Office Solution
                   </h3>
                  <p>
                    The Ibinex ecosystem assimilates a complete Customer Relationship 
                  </p>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
            <div>
                <div class="uk-padding border1 border2">
                   <img src="assets/images/picture4.png" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Aggregated Liquidity Exchange
                   </h3>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                    <img src="assets/images/picture3.png" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Complete Processing solution
                   </h3>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
            <div>
                <div class="uk-padding border1 border2">
                    <img src="assets/images/picture5.png" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Compliant Banking Custodian service
                   </h3>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                    <img src="assets/images/picture6.png" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Hosted in a secure private cloud environment
                   </h3>
                </div>
            </div>
        </div>
    </div>

    <div id="nusku-media">
        <h2 id="nusku-media-title">Ibinex media coverage</h2>      
        <div id="nusku-media-cov">
            <img src="https://i1.wp.com/globalriskinsights.com/wp-content/uploads/2016/03/Yahoo-Finance-Logo-300x300-1000x1000.png?ssl=1" class="nusku-media-logo">
            <img src="http://fontslogo.com/wp-content/uploads/2013/03/The-Guardian-Logo-Font.jpg" class="nusku-media-logo">
            <img src="http://deceth.com/wp-content/uploads/2013/08/techcrunchlogo-500x237.jpg" class="nusku-media-logo">
            <img src="https://fontmeme.com/images/Mashable-Logo.jpg" class="nusku-media-logo">
            <img src="data:image/png;base64,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" class="nusku-media-logo">
            <img src="https://www.seeklogo.net/wp-content/uploads/2017/04/huffpost-logo.png" class="nusku-media-logo">
        </div>
    </div>


<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>