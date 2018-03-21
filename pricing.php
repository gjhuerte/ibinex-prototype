<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<style>
  div.main-pricing {
    display: grid;
    grid-template-columns: 1.15fr 1.95fr 2fr 1fr;
    grid-template-rows: 20vh auto 19vh;
  }
  
  div.main-pricing.heading2 {
    grid-template-columns: 1.225fr 1.9fr 2fr 1fr;
    grid-template-rows: 21.5vh auto 22.5vh;
    align-content: start;
  }
  
  div.main-pricing.heading1 {
    background-color: whitesmoke;
  }
  
  div.main-pricing.heading2 {
    background-color: white;
  }
  
  div.main-pricing.heading {
    overflow: hidden;
  }
  
  div.main-text .heading {
  font-family: 'Montserrat', sans-serif;
  }
  
  .main-image {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    background-image: url('assets/images/First-option-Pricing.jpg');
    background-repeat: no-repeat;
    background-position: left top;
    background-size: cover;
/*     filter: drop-shadow(60px 50px 50px rgba(0,0,0,0.5)); */
    height: 100%;
  }
  .main-text {
    display: grid;
    align-content: start;
  }
  
  .main-text.text1 {
    grid-column: span 1 / -2;
    grid-row: 2 / span 1;
    padding-right: 20px;
  }
  
  .main-text.text2 {
    grid-column: 2 / span 1;
    grid-row: 2 / span 1;
    padding-right: 70px;
  }
  
  .main-text.text3 {
    grid-column: span 1 / -2;
    grid-row: 2 / span 1;
    padding-right: 50px;
  }
  
  .main-text.text1 p,
  .main-text.text1 li,
  .main-text.text3 p,
  .main-text.text2 p{
    text-align: justify;
  }
  
  .main-text .heading {
/*     font-size: 1.9rem; */
    margin-top: 0;
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 20px;
/*     padding-left: 10px; */
  }
  
  
  .main-text p,
  .main-text ul {
/*     font-size: 0.8rem; */
    font-size: 0.96rem;
    font-weight: 600;
    color: rgb(107,124,147);
/*     text-align: justify; */
  }
  
  .main-text p {
    margin: 0 0 15px 0;
    padding-top: 16px;
/*     padding-left: 10px; */
    margin-bottom: 2px;
    line-height: 1.65;
    hyphens: none;
  }
  
  .main-text.text2 p,
  .main-text.text3 p {
    margin-bottom: 0.45rem;
  }
  
  .main-text ul li {
    padding-bottom: 20px;
    font-size: .96rem;
    line-height: 1.7;
  }
  
  .main-text .additional-margin {
    margin-top: 1.25rem;
  }
  .fa-ul {
    margin-left: 2em;
  }
  
  .fa-li {
    top: 0.5em !important;
  }
  
  @media only screen and (min-width : 768px) and (max-width : 1024px) {
      div.main-pricing,
      div.main-pricing.heading2 {
        grid-template-columns: 1fr 3fr 3fr 1fr;
        grid-template-rows: 10vh auto 9vh;
    }
    .main-image {
      background-image: url('assets/images/laptop-transparent2.png');
      background-position: left center;
      background-size: 40%;
      filter: drop-shadow(35px 35px 30px rgba(0,0,0,0.5));
  
    }
  }
  
  @media only screen and (max-width : 480px) and (orientation : portrait), screen and (max-width : 768px) and (orientation : landscape){
    .main-image{
      display: none;
    }
    div.main-pricing,
    div.main-pricing.heading2 {
      grid-template-columns : 1fr;
      grid-template-rows: 65px auto auto 70px;
      grid-gap: 0;
    }
    div.main-text.text1, 
    div.main-text.text2, 
    div.main-text.text3 {
      grid-column: 1 / -1;
      padding-left: 11px;
      padding-right: 14px;
    }
    
    div.main-text.text2 {
      grid-column: 1 / -1;
      grid-row: 2 /span 1;
    }
    
    div.main-text.text3 {
      grid-column: 1 / -1;
      grid-row: 3 /span 1;
    }
    
    .main-text p,
    .main-text h1{
      margin-left: 3px;
    }
    .main-text ul {
      margin-top: 1rem;
    }
    .main-text p,
    .main-text ul li {
      hyphens: manual;
      line-height: 1.78;
    }
    
    .main-text ul li {
      padding-bottom: 26px;
    }
      
    .fa-li {
      left: -2.3em !important;
    }
    
    .main-text.text1 p,
    .main-text.text2 p,
    .main-text.text3 p {
      margin-bottom: 0.55rem;
    }
      
  }
  
  
</style>
<?php } ?>

<?php function display_title(){ ?>
Pricing
<?php } ?>

<?php function display_content(){ ?>
<div class="main-pricing heading heading1">
  <div class="main-image reveal-left">
  </div>
  <div class="main-text text1 reveal-right">
    <h1 class="heading">Pricing</h1>
    <p>Integration of the Ibinex turnkey cryptocurrency platform to ex&shy;change your way reguires:</p>
    <ul class="fa-ul">
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle fa-lg" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1 " style="color:black"></i></span>$150,000 "reserve only, no pay&shy;ment" deposited in a local Escrow account of your choice for 180 days.</li>
      <li><span class="fa-li fa-layers fa-fw"><i class="fas fa-circle fa-lg" style="color:turquoise"></i><i class="fas fa-check" data-fa-transform="shrink-6 down-1 " style="color:black"></i></span>Your first 90 days of Ibinex are gratis while you build your book.</li>
    </ul>
    <h1 class="heading additional-margin">Our Fees</h1>
    <p>0.1% flat-rate fee based on exchange volume with a minimum fee of $20,000 per month.</p>
    <p>Fees begin only at day 91.</p>
  </div>
</div>

<div class="main-pricing heading heading2">
  
  <div class="main-text text2 reveal-up">
    <h1 class="heading">Setup</h1>
    <p>In order to proceed with setup, we require:</p>
    <p>Your company to sign out Letter of Intent (LOI)</p>
    <p>Proof of the Escrow deposit at a bank or with an attorney of your choice.</p>
  </div>
  
  <div class="main-text text3 reveal-up">
    <h1 class="heading">Onboarding time</h1>
    <p>Please note that, due to incredibly high demand of the Ibinex exchange solutions suite, the current onboarding waiting time is 4 months</p>
    <p>We are doing our utmost to reduce time to market while retaining our trademark standard of exellence, and appreciate your interest in our innovations.</p>
    
  </div>
  
  
</div>

<?php } ?>

<?php function scripts_include(){ ?>
 
  <script>
    $(window).on("load",function(){
      
      window.sr = ScrollReveal({ opacity: 0, duration: 800, delay:300,mobile: false });
        sr.reveal('.reveal-up');
        sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
        sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
        sr.reveal('.fade',{distance:'0'});
    })
    
      
  </script>
<?php } ?>