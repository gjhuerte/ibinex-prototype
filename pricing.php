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
    height: 100vh;
    background-color: whitesmoke;
  }
  
  div.main-pricing.heading2 {
    height: 70vh;
    background-color: white;
  }
  
  .main-image {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    background-image: url('assets/images/pricing-image1.png');
    background-repeat: no-repeat;
    background-position: -180px;
    background-size: 50%;
    filter: drop-shadow(60px 50px 50px rgba(0,0,0,0.5));
  }
  .main-text1,
  .main-text2,
  .main-text3 {
    display: grid;
    align-content: center;
    padding-right: 20px;
  }
  
  .main-text1 {
    grid-column: span 1 / -2;
    grid-row: 1 / -1;
  }
  
  .main-text2 {
    grid-column: 2 / span 1;
  }
  
  .main-text3 {
    grid-column: span 1 / -2;
  }
  
  .main-text1 .heading,
  .main-text2 .heading,
  .main-text3 .heading {
    font-size: 1.8rem;
    font-weight: 700;
    color: black;
    margin-bottom: 20px;
  }
  
  .main-text1 p,
  .main-text2 p,
  .main-text3 p,
  .main-text1 ul,
  .main-text2 ul,
  .main-text3 ul {
    font-size: 0.9rem;
  }
  
  .main-text1 p,
  .main-text2 p,
  .main-text3 p {
    margin: 0 0 15px 0;
  }
  
  .main-text1 ul li,
  .main-text2 ul li,
  .main-text3 ul li {
    padding-bottom: 20px;
  }
  
  @media only screen and (min-width : 768px) and (max-width : 1024px) and (orientation : portrait) {
      div.main {
      grid-template-columns: 1fr 3fr 3fr 1fr;
    }
    div.main-pricing.heading1 {
      height: 70vh;
    }
    div.main-pricing.heading2 {
      height: 50vh;
    }
  }
  
  @media only screen and (min-width : 320px) and (max-width : 480px) {
    .main-image{
      display: none;
    }
    div.main {
      grid-template-columns : 1fr;
    }
    .main-text1,
    .main-text2,
    .main-text3 {
      grid-column: 1 / -1;
      padding-left: 10px;
      padding-right: 10px;
    }
    div.main-pricing.heading1,
    div.main-pricing.heading2 {
      height: 120vh;
    }
    
    .main-text1 .heading,
    .main-text2 .heading,
    .main-text3 .heading {
      margin-top: 20px;
    }
  }
  
  @media only screen and (min-width : 320px) and (max-width : 480px) and (orientation : landscape){
    
  }  
  
</style>
<?php } ?>

<?php function display_title(){ ?>
Pricing
<?php } ?>

<?php function display_content(){ ?>
<div class="main-pricing heading1">
  <div class="main-image">
  </div>
  <div class="main-text1">
    <span class="heading">Pricing</span>
    <p>Integration of the Ibinex turnkey cryptocurrency platform to exchange your way reguires</p>
    <ul class="fa-ul">
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1" style="color:black"></i></span>$150,000 "reserve only, no payment" deposited in a local Escrow account of your choice for 180 days.</li>
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1" style="color:black"></i></span>Your first 90 days of Ibinex are gratis while you build your book.</li>
    </ul>
    <span class="heading">Our Fees</span>
    <p>0.1% flat-rate fee based on exchange volume with a minimum fee of $20,000 per month</p>
    <p>Fees begin only at day 91.</p>
  </div>
</div>

<div class="main-pricing heading2">
  <div class="main-text2">
    <span class="heading">Setup</span>
    <p>In order to proceed with setup, we require:</p>
    <p>Your company to sign out Letter of Intent (LOI)</p>
    <p>Proof of the Escrow deposit at a bank or with an attorney of your choice.</p>
  </div>
  
  <div class="main-text3">
    <span class="heading">Onboarding time</span>
    <p>Please note that, due to incredibly high demand of the Ibinex exchange solutions suite, the current onboarding waiting time is 4 months</p>
    <p>We are doing our utmost to reduce time to market while retaining our trademark standard of exellence, and appreciate your interest in our innovations.</p>
    
  </div>
  
</div>

<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>