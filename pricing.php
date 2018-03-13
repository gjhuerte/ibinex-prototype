<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<style>
  div.main-pricing {
    display: grid;
    grid-template-columns: 1fr 2fr 2fr 1fr;
    grid-template-rows: auto;
  }
  
  div.main-pricing.heading1 {
    background-color: whitesmoke;
  }
  
  div.main-pricing.heading2 {
    background-color: white;
  }
  
  div.main-pricing.heading {
    padding-top: 100px;
    padding-bottom: 100px;
    overflow: hidden;
  }
  
  .main-image {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    background-image: url('assets/images/pricing-image1.png');
    background-repeat: no-repeat;
    background-position: -100px;
    background-size: 50%;
    filter: drop-shadow(60px 50px 50px rgba(0,0,0,0.5));
    height: 100%;
  }
  .main-text {
    display: grid;
    align-content: center;
  }
  
  .main-text.text1 {
    grid-column: span 1 / -2;
    grid-row: 1 / -1;
  }
  
  .main-text.text2 {
    grid-column: 2 / span 1;
    padding-right: 50px;
  }
  
  .main-text.text3 {
    grid-column: span 1 / -2;
  }
  
  .main-text .heading {
    font-size: 1.9rem;
    font-weight: 700;
    margin-bottom: 20px;
  }
  
  .main-text p
  .main-text ul {
    font-size: 0.9rem;
  }
  
  .main-text p {
    margin: 0 0 15px 0;
  }
  
  .main-text ul li {
    padding-bottom: 20px;
  }
  
  @media only screen and (min-width : 768px) and (max-width : 1024px) {
      div.main-pricing {
        grid-template-columns: 1fr 3fr 3fr 1fr;
    }
      div.main-pricing.heading {
        padding-top: 60px;
        padding-bottom: 60px;
    }
  }
  
  @media only screen and (max-width : 480px) {
    .main-image{
      display: none;
    }
    div.main-pricing {
      grid-template-columns : 1fr;
    }
    div.main-text.text1, 
    div.main-text.text2, 
    div.main-text.text3 {
      grid-column: 1 / -1;
      padding-left: 20px;
      padding-right: 20px;
    }
    div.main-pricing.heading {
      padding-top: 40px;
      padding-bottom: 40px;
    }
    
  }
  
  
</style>
<?php } ?>

<?php function display_title(){ ?>
Pricing
<?php } ?>

<?php function display_content(){ ?>
<div class="main-pricing heading heading1">
  <div class="main-image" uk-scrollspy="cls: uk-animation-slide-left-small; delay: 250">
  </div>
  <div class="main-text text1" uk-scrollspy="cls: uk-animation-slide-right-small; delay: 250">
    <h1 class="heading">Pricing</h1>
    <p>Integration of the Ibinex turnkey cryptocurrency platform to exchange your way reguires:</p>
    <ul class="fa-ul">
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1" style="color:black"></i></span>$150,000 "reserve only, no payment" deposited in a local Escrow account of your choice for 180 days.</li>
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1" style="color:black"></i></span>Your first 90 days of Ibinex are gratis while you build your book.</li>
    </ul>
    <h1 class="heading">Our Fees</h1>
    <p>0.1% flat-rate fee based on exchange volume with a minimum fee of $20,000 per month.</p>
    <p>Fees begin only at day 91.</p>
  </div>
</div>

<div class="main-pricing heading heading2">
  <div class="main-text text2 uk-animation-fade">
    <h1 class="heading">Setup</h1>
    <p>In order to proceed with setup, we require:</p>
    <p>Your company to sign out Letter of Intent (LOI)</p>
    <p>Proof of the Escrow deposit at a bank or with an attorney of your choice.</p>
  </div>
  
  <div class="main-text text3 uk-animation-fade">
    <h1 class="heading">Onboarding time</h1>
    <p>Please note that, due to incredibly high demand of the Ibinex exchange solutions suite, the current onboarding waiting time is 4 months</p>
    <p>We are doing our utmost to reduce time to market while retaining our trademark standard of exellence, and appreciate your interest in our innovations.</p>
    
  </div>
  
</div>



<?php } ?>

<?php function scripts_include(){ ?>
<?php } ?>