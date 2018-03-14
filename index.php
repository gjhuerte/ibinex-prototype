<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
div * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif !important;
}
  
 #nusku-header {
    display: grid;
    grid-template-columns: 1fr 1.5fr 1.5fr 2fr;
    grid-template-rows: 5rem auto 5rem;
    
  }

  .header-image {
    background-size: cover;
    background-position: center center;
/*     background-image: url(assets/images/suspension-bridge.png); */
    background-image: url(assets/images/bridge.png);
    filter: grayscale(100%) brightness(70%);
    grid-column: 1 / -1;
    grid-row: 1 / -1;
  }
  
  .header-container.red-border {
    grid-column: 2 / span 1;
    grid-row: 2 / span 1;
    border: 15px solid maroon;
    z-index: 1;
    filter: opacity(60%);
    border-radius: 0 30px 0 0;
    margin-left: 1.5rem;
  }
  
  .header-container.header-text {
    grid-column: 2 / span 2;
    grid-row: 2 / span 1;
    z-index: 2;
    padding: 10% 0 10% 15%;
  }
  .header-container.header-text p, 
  .header-container.header-text h1, 
  .header-container.header-text h2 {
    color: whitesmoke;
    font-size: 0.8rem;
    font-weight: 600;
  }

  .header-container.header-text h2 {
    font-family: 'Times New Roman', serif;
    font-weight: 700;
    font-size: 2.5rem;
    font-style: italic;
    margin-bottom: 0;
  }

  .header-container.header-text h1 {
    margin-top: 0;
    font-family: 'Verdana', sans-serif;
    font-weight: 900;
    font-size: 4rem;
    font-style: italic;

  }

  .header-container.header-text > h1 > span {
    font-size: 1.5rem;
    vertical-align: super;
    font-weight: 600;
  }
  
  .header-input {
    grid-column: 3 / span 1; 
    grid-row: 2 / span 1;
    z-index: 3;
    display: grid;
    grid-template-columns 2fr 1fr;
    grid-template-rows: 1fr auto;
    padding: 0 0 2rem 2rem;
  }
  
  .header-input > button, 
  .header-input > input {
    background-color: #c81824;
    border:none;
    outline: none;
    color: white;
    padding: 12px 8px 12px 8px;
    font-size: 0.5rem;
    font-weight: 600;
    margin: 0;
    grid-column: 2 / span 1;
    grid-row: 2 / span 1;
  }
  .header-input > input {
    background-color: white;
    color: black;
    grid-column: 1 / span 1;
    
  }
  
  .header-input > input::placeholder {
    
   
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
  
  #legal-p {
    font-size: 13px;
    font-weight: bold;
    text-align: center;
    padding-top: 10%;
  }
  
  #legal-h2 {
    font-weight: bold;
    text-align: center;
    padding-bottom: 6%;
    
  }
  
  #nusku-media {
  }
  
  #nusku-media-title {
    color: #1A1A1A;
    font-weight: bold;
    text-align: center;
    padding-top: 7%;
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
    padding-left: 15%;
    padding-right: 15%;
}
  
.padding1 {
  padding-top: 40px;  
}
  
  .media-padding {
    padding-left: 15%;
    padding-right: 15%;
    padding-bottom: 6%;
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
  
  .uk-grid1 {
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
  
        .border1 {
          border-right: 0;  
        }

        .border2 {
          border-bottom: 0;  
        }
        
    }
</style>
<?php } ?>

<?php function display_title(){ ?>
  Ibinex
<?php } ?>

<?php function display_content(){ ?>
         <div id="nusku-header">
    <div class="header-image"></div>
    
    <div class="header-container red-border">
    </div>
    
    <div class="header-container header-text">
      <h2>Introducing</h2>
      <h1>CryptoBridge<span>TM</span></h1>
      <p>Our patent-pending proprietary software. CryptoBridge, is the nexus that aggregates premier cryptocurrency exchanges and indexes for your customers, in real-time</p>
      <p>The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select cryptocurrency exchanges and most attractive live prices-only available via the ibinex trading platform.</p>
    </div>
    
    <div class="header-input">
      <input type="text" placeholder="Type your email">
      <button>REQUEST A DEMO</button>
    </div>
    


  </div>

                  
      <div id="nusku-intro" class="uk-grid uk-grid1">
            <div id="intro-content" class="uk-width-1-2 intro-padding">
                <h2 id="intro-title">Ibinex - The Gateway to your Own Customized Cryptocurrency Ecosystem</h2>
                <p>With an in-depth understanding of evolving blockchain technology and cryptocurrency development. Ibinex invite you to engage with a fully-customizeable, private, institutional white label platform. Trail-blazing turnkey solutions to merge with your own web-based platform. Ibinex will show you definitively how to build a cryptocurrency exchange, your way.</p>
            </div>
            <div id="intro-img" class="uk-width-1-2 intro-padding">
                
                
            </div>
      </div>
      
    <div>
        <h2 id="feature-header" class="uk-text-center padding1">Exchange your Way with Ibinex.</h2>
        <h2 id="feature-header" class="uk-text-center uk-text-center1">Your Turn-Key Solution Includes:</h2>
      
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
                    The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account &amp; money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.
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
                  <p>
                    Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                    <img src="assets/images/picture3.png" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Complete Processing solution
                   </h3>
                  <p>
                    With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilities for your exchange to thrive in maximum liquidity.
                  </p>
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
                  <p>
                    Ibinex is the first ever cryptocurrency exchange platform the world that has a finance transaction license. We can offer fully-compliant and licensed custodian processing and accounts, or you can choose to operate with your own custodian. Ibinex is licensed to facilitate payments via swipe-and-transmit from FIAT to a base currency. This preferred solution is unavailable to the bigger cryptocurrency exchanges, and is only offered by Ibinex.
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-padding border2">
                    <img src="assets/images/picture6.png" class="">
                    <h3 class="coolors uk-margin-remove-top">
                      Hosted in a secure private cloud environment
                   </h3>
                  <p>
                    Security is a 360 degree operation, with the Ibinex platform guarded 24/7 in a private cloud and crypto-based funds held in shielded cold wallets. Cyber security experts maintain and defend the platform, while cold wallets containing funds are impregnable, offline, and safely out of unathorised reach.
                  </p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <p id="legal-p">Learn more about Ibinex</p>
        <h2 id="legal-h2">Technical Papers &amp; Legal Circular</h2>
        <div class="uk-text-center media-padding" uk-grid>
            <div class="uk-width-1-3">
                <div class="uk-padding-remove">
                    <img src="assets/images/brochure1.png" class="">
                </div>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure2.png" class="">
                </div>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure3.png" class="">
                </div>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure4.png" class="">
                </div>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure5.png" class="">
                </div>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure6.png" class="">
                </div>
            </div>
        </div>
    </div>

    <div id="nusku-media" class="uk-background-muted">
        <h2 id="nusku-media-title">Ibinex media coverage</h2>      
        <div id="nusku-media-cov">
            <img src="assets/images/media1.png" class="nusku-media-logo">
            <img src="assets/images/media2.png" class="nusku-media-logo">
            <img src="assets/images/media3.png" class="nusku-media-logo">
            <img src="assets/images/media4.png" class="nusku-media-logo">
            <img src="assets/images/media5.png" class="nusku-media-logo">
            <img src="assets/images/media6.png" class="nusku-media-logo">
        </div>
    </div>


<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>