<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  .header{
    background-image: url("https://images.pexels.com/photos/733852/pexels-photo-733852.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
    background-size: cover;
  }
  .header-inner{
    margin-left: 10%;
    max-width: 35%;
    padding: 20% 10px 30px 0px;
  }
  
  h1{
    font-weight: bold;
  }
 
</style>
<?php } ?>

<?php function display_title(){ ?>
  Contact Us
<?php } ?>

<?php function display_content(){ ?>
  <div class="header" uk-parallax="{bgy: -200}">
    
    <div class="header-inner" uk-parallax="viewport: 0.5">
      
      <div class="introduction-text">
        
        <h1 class=".uk-heading-hero">Get Started</h1>
        
        <p class="intro-text">
          We invite you to experience the Ibinex demo here, which will help you conceptualise
          the possibilities of personalisation for your own exchange.
          <br><br>
          The next step is to contact us on-boarding. It is a simple process which you can
          learn about in more detail on the Pricing page, but essentially consists of 3 steps:
        </p>
        
        <ul class="uk-list uk-list-bullet">
          <li>Local Escrow deposit (reserve only, no payment)</li>
          <li>Letter of Intent</li>
          <li>Proof of Escrow deposit</li>
        </ul>
        
        <p class="intro-text">
          Please note that due to high demand, the current on-boarding timeframe is 4 months.
        </p>
        
      </div>
      
    </div>
    
  </div>

  <div style="height: 200vh">
    
  </div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>