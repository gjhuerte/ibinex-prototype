<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lato', sans-serif;
}

  #nusku-header {
    display: grid;
    grid-template-columns: 1fr 1.5fr 1.5fr 2fr;
    grid-template-rows: 5rem auto 5rem;
    
  }

  .header-image {
    background-size: cover;
    background-position: left center;
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
    padding: 15% 0 10% 15%;
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
    grid-template-columns: 1fr auto;
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
    font-size: 0.55rem;
    font-weight: 500;
    margin: 0;
    grid-column: 2 / span 1;
    grid-row: 2 / span 1;
    line-height: 10px;
    border-radius: 0 5px 5px 0;
   
  }
  .header-input > input {
    background-color: white;
    color: black;
    grid-column: 1 / span 1;
    border-radius: 5px 0 0 5px;
    
  }
  
  #nusku-video {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 2fr;
    padding-top: 10%;
    padding-bottom: 10%;
  }
  
  #nusku-video-title {
    color: #1A1A1A;
    font-weight: bold;
    padding-top: 7%;
    background: white;
    transform: translateX(-55px);
  }
  
  #nusku-video-p {
    line-height: 300px;
    vertical-align: middle;
    text-align: center;
    font-weight: bold;
    font-family: 'Verdana', sans-serif;
  }
  
  #nusku-video-cov {
    text-align: center;
    padding: 70px 0;
    transform: translateX(55px);
    z-index: 99;
  }
  
  
  nusku-video-content {
    grid-column: 2;
    vertical-align: middle;
    line-height: 90px;
  }
  
  .video-img {
    box-shadow: 0 15px 69px -14px black;
  }
  
  #nusku-intro {
    box-sizing: border-box;
    min-height: 50vh;
    display: flex;
    background-color: #f8f8f8;
    padding-left: 5%;
  }
  
  #intro-title {
    font-weight: 900;
    font-family: 'Arial';
  }
  
  #intro-img {
    order: 0;
    overflow: hidden;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    background-image: url(assets/images/laptop3.png);
  }

  #intro-content {
    order: 1;
    padding: 10% 12% 12% 3%;
  }
  
  #feature-header {
    font-weight: 900;
    font-family: 'Arial';
  }
  
  #feature-header2 {
    font-weight: 900;
    font-family: 'Arial';
  }
  
  #feature-p {
    padding-top: 8%;
  }
  
  #legal-p {
    font-size: 13px;
    font-weight: bold;
    text-align: center;
    padding-top: 5%;
  }
  
  #legal-h2 {
    font-weight: bold;
    text-align: center;
    padding-bottom: 6%;
    
  }
  
  #legal-btn {
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: Arial;
    color: #1a7182;
    font-size: 9px;
    font-weight: bold;
    background: #12d5b7;
    padding: 10px 20px 10px 20px;
    text-decoration: none;
    transform: translatex(10px);
    border: none;
  }
  
  #nusku-media {
    
  }
  
  #nusku-media-title {
    color: #1A1A1A;
    font-weight: bold;
    text-align: center;
    padding: 5% 10%;
    padding-bottom: 0;
  }
  
  #nusku-media-cov {
    padding: 7% 10%;
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
    padding-left: 19%;
    padding-right: 17%;
    padding-bottom: 6%;
  }
  
.border1 {
  border-right: 1px solid #f8f8f8;  
}
  
.border2 {
  border-bottom: 1px solid #f8f8f8;  
}
  
.uk-text-center1 {
    margin-top: 0px;
}
  
.coolors {
    color: #203771;
    font-weight: 900;
    font-size: 22px;
}
  
  .uk-grid1 {
    margin-left: 0;
  }
  
  .uk-padding1 {
    padding: 15px;
  }
  
  .container-div {
    display: none;
  }
  
  .carousel {
    display: none;
  }
  
@media only screen and (min-width: 768px) and (max-width : 1024px) {
/* For tablet: */
  #nusku-header {
    grid-template-columns: 0.5fr 1.5fr 1.5fr 0.5fr;
  }
}
  
@media only screen and (max-width: 768px) {
        /* For mobile phones: */
        [class*="uk-width-"] {
            width: 100%;
        }
  
        #nusku-header {
    grid-template-columns: 1fr;
    grid-template-rows: auto auto;
  }
  .header-container.header-text {
    grid-column: 1 / -1;
    grid-row: 1 / span 1;
    padding: 20px;
    padding-top: 5rem;
  }
  .header-input {
    grid-column: 1 / -1; 
    grid-row: 2 / span 1;
    display: grid;
    grid-template-columns: auto 1fr;
    padding: 0;
  }
   
  .header-input > input,
  .header-container.red-border {
    display: none;
  }
  
  .header-input > button {
    grid-column: 1 / span 1; 
    font-size: 0.9rem;
    padding: 18px 10px 18px 10px;
    margin-bottom: 2rem;
    margin-left: 1.5rem;
    border-radius: 5px;
  }
  
  .header-container.header-text h1 {
    font-size: 2rem;
  }
  
    .header-container.header-text h2 {
    font-size: 1.9rem;
  }
  
  .header-container.header-text p {
    font-size: 1rem;
    font-weight: 500;
    text-align: justify;
  }
  
  #nusku-video {
    display: grid;
    grid-template-columns: auto;
    grid-template-rows: auto auto;
    padding-top: 10%;
    padding-bottom: 10%;
  }
  
  #nusku-video-title {
    color: #1A1A1A;
    font-weight: bold;
    padding-top: 7%;
    background: #f7f8fa;
    transform: translateX(0);
    padding-bottom: 10%;
  }
  
  #nusku-video-p {
    line-height: 0;
    vertical-align: middle;
    text-align: center;
    font-size: 45px;
    font-weight: bold;
    font-family: 'Verdana', sans-serif;
  }
  
  #nusku-video-cov {
    text-align: center;
    padding: 70px 0;
    transform: translateX(0);
    z-index: 99;
  }
  
  
  nusku-video-content {
    grid-column: 2;
    vertical-align: middle;
    line-height: 90px;
  }
  
  .video-img {
    box-shadow: 0 0px 0px 0px white;
  }
  
  #nusku-media-title {
    color: #1A1A1A;
    font-weight: bold;
    text-align: center;
    padding: 10% 10%;
    padding-bottom: 0;
  }
  
  .media-padding {
    padding-left: 19%;
    padding-right: 17%;
    padding-bottom: 10%;
}
  
  .legal-container {
    display: none;
  }
  
  .carousel {
    position: relative;
    width: 25%;
    display: table-cell;
  }
  
  .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
  }
  
  .carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
  }
  
  .carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #060606;
    text-align: center;
    opacity: .5;
}
  
  .carousel-control-prev {
    left: 0;
  }
  
  .carousel-control-next {
    right: 0;
}
  
  .carousel-control-prev-icon {
    background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' f…3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E);
    color: black;
}
  
.carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: #000 no-repeat center center;
    background-size: 100% 100%;
    color: black;
    transform: translateY(50px);
}
  
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  
  #legal-btn {
    webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    font-family: Arial;
    color: #1a7182;
    font-size: 13px;
    font-weight: bold;
    background: #12d5b7;
    padding: 10px 20px 10px 20px;
    text-decoration: none;
    transform: translatex(10px);
    border: none;
    display: flex;
    margin: 0 auto;
    margin-bottom: 20%;
  }
  
  #legal-p {
    font-size: 13px;
    font-weight: bold;
    text-align: center;
    padding-top: 15%;
  }
  
  #feature-header {
    font-weight: bold;
    padding: 20% 0% 0% 0%;
    font-weight: 900;
    font-family: 'Arial';
  }
  
  #feature-header2 {
    font-weight: bold;
    padding: 0% 0% 0% 0%;
    font-weight: 900;
    font-family: 'Arial';
  }
  
  #feature-p {
    padding-top: 0%;
  }
  
  #legal-h2 {
    font-weight: bold;
    text-align: center;
    font-family: 'Arial';
    padding: 0% 5% 10% 5%;
  }
  
  .header-image {
    background-position: 80% 0%;
}
        .padding {
            padding-left: 0%;
            padding-right: 0%;
        }
        #intro-content{
            order: 0;
            padding: 20% 0% 0% 0%;
        }
        #intro-img{
            order: 1;
            min-height: 20em;
        }
  
        #intro-title {
            font-weight: 900;
            font-family: 'Arial';
            padding: 0% 7% 0% 0%;
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
  
        .uk-padding1 {
          padding: 15px;
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
            <div id="intro-img" class="uk-width-1-2 intro-padding uk-padding-remove-left">
                
            </div>
      </div>
      
    <div>
        <h2 id="feature-header" class="uk-text-center padding1">Exchange your Way with Ibinex.</h2>
        <h2 id="feature-header2" class="uk-text-center uk-text-center1">Your Turn-Key Solution Includes:</h2>
      
        <div class="uk-section padding padding1 uk-grid-collapse uk-child-width-1-2@s uk-grid-match" uk-grid>
            <div>
                
                <div class="uk-padding1 border1 border2 uk-text-left" >
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
                <div class="uk-padding1 border2">
                   <img src="assets/images/picture2.png" class="">
                   <h3 class="coolors uk-margin-remove-top">
                      Full CRM &amp; Back Office Solution
                   </h3>
                  <p id="feature-p">
                    The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account &amp; money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.
                  </p>
                </div>
            </div>
        </div>
      
        <div class="uk-section padding uk-grid-collapse uk-child-width-expand@s uk-grid-match" uk-grid>
            <div>
                <div class="uk-padding1 border1 border2">
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
                <div class="uk-padding1 border2">
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
                <div class="uk-padding1 border1">
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
                <div class="uk-padding1">
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

    <div id="nusku-video" class="uk-background-muted padding">
        <div id="nusku-video-cov">
            <img src="assets/images/video.png" class="video-img">
        </div>
        <div id="nusku-video-title">
          <h2 id="nusku-video-p">
            Our <span>vision.</span>
          </h2>
      </div>
    </div>

    <div class="legal-container">
        <p id="legal-p">Learn more about Ibinex</p>
        <h2 id="legal-h2" class="uk-margin-remove-top">Technical Papers &amp; Legal Circular</h2>
        <div class="uk-text-center media-padding" uk-grid uk-slideshow="animation: fade">
            <div class="uk-width-1-3 uk-padding-remove">
                <div class="uk-padding-remove">
                    <img src="assets/images/brochure1.png" class="">
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure2.png" class="">
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure3.png" class="">
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure4.png" class="">
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure5.png" class="">
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="uk-width-1-3 uk-padding-remove">
                <div class="uk-card uk-card-body uk-padding-remove">
                    <img src="assets/images/brochure6.png" class="">
                    <button id="legal-btn">DOWNLOAD</button>
                </div>
            </div>
        </div>
    </div>

    <div id="demo" class="carousel slide" data-ride="carousel">
          <p id="legal-p">Learn more about Ibinex</p>
          <h2 id="legal-h2" class="uk-margin-remove-top">Technical Papers &amp; Legal Circular</h2>
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/brochure1.png" alt="Los Angeles" width="auto" height="auto">
              <button id="legal-btn">DOWNLOAD</button>
            </div>
            <div class="carousel-item">
              <img src="assets/images/brochure2.png" alt="Chicago" width="auto" height="auto">
              <button id="legal-btn">DOWNLOAD</button>
            </div>
            <div class="carousel-item">
              <img src="assets/images/brochure3.png" alt="New York" width="auto" height="auto">
              <button id="legal-btn">DOWNLOAD</button>
            </div>
            <div class="carousel-item">
              <img src="assets/images/brochure4.png" alt="New York" width="auto" height="auto">
              <button id="legal-btn">DOWNLOAD</button>
            </div>
            <div class="carousel-item">
              <img src="assets/images/brochure5.png" alt="New York" width="auto" height="auto">
              <button id="legal-btn">DOWNLOAD</button>
            </div>
            <div class="carousel-item">
              <img src="assets/images/brochure6.png" alt="New York" width="auto" height="auto">
              <button id="legal-btn">DOWNLOAD</button>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php } ?>

<?php function scripts_include(){ ?>

$('.carousel').carousel({
  interval: 2000
})
<?php } ?>