<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
  .red {
    color: #FEFEFD;
  }
  .red h3{
    color: #FEFEFD;
    text-align: center;
    font-weight: 500;
  }
  .red p{
    text-align: center;
  }
  .grey2 {
    padding-bottom: -35%;
  }
  .uk-container h3{
    font-weight: 600;
    font-size: 250%;
  }
  .uk-container p, li{
    font-size: 15px;
  }
</style>

<script>
</script>
<?php } ?>

<?php function display_title(){ ?>
  Services - Ibinex
<?php } ?>

<?php function display_content(){ ?>
<div class="uk-section uk-section-default red" style="background-color: #C11722;">
    <div class="uk-container">
      <h3><i>Services</i></h3>
        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
            <div>
                <p>Ibinex services are all characterised by high-level innovation made practical for your personalised <br> exchange integration.</p>
                <p>Our ecosystem of services compromises of the following units.</p>  
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted grey1" style="background-color: #F7F7F7;">
    <div class="uk-container">
        <div class="uk-margin-remove uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <img src="http://www.pngmart.com/files/4/Macbook-PNG-Pic.png" style="position: relative; top: 25%;"  alt="macbook">
            </div>
            <div  style="color: #6B7C93;">
                <h3 style="color: #2C3135;">Platform</h3>
                <p>Your exchange is your launchpad. Our suite elevates your exchange by equipping you with your own platform consisting of:</p>
                <ul class="uk-list uk-list-space" id="pl_list" style="list-style: none;">
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Tailor-made private, institutional while label infrastructure</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Fully-customisable front-end website</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Completely integrated web-based trading platform</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Flexible front-end user trading</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Performance-driven features</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Secure private cloud hosting</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Total compatibility with your own branding deck</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default white1">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <h3 style="color: #2C3135;">CRM/Back Office</h3>
                <p>The Ibinex solution unites the front-end and platform with a full black<br> office suit including CRM with:</p>
                <ul class="uk-list uk-list-space" id="pl_list" style="list-style: none;">
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> KYC/AML documentation collection</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Documentation verification</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Account and money management</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Optimised back-office administrative workflow</li>
                  <li><span uk-icon="check" style="color: #11D1B5;"></span> Enhanced UI/UX</li>
                </ul>
            </div>
            <div>
                <p>(IMAGE HERE)</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-primary uk-light gradient" style="background: #142C5C; background: linear-gradient(to right, #142C5C , #134093);">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <p>(IMAGE HERE)</p>
            </div>
            <div>
                <h3>CryptoBridge&trade;</h3>
                <p>Aggregate elite exchanges and indexes as the cryptocurrency market moves, with out patent-pending proprietary software suite, CryptoBridge&trade;. Gain access to 60 premier exchanges for maximum liquidity cryptocurrencies, all available only through CryptoBridge&trade; by Ibinex.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default white2">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div style="color: #6B7C93;">
                <h3 style="color: #2C3135;">Credit Card Processing</h3>
                <p>We offer full spectrum payment processing for cryptocurrencies, and a<br> complete selection that is unavailable elsewhere. Exchanging your way<br> with Ibinex means experiencing a whole new world of payment<br> options including: credit cards, debit cards, wire transfers, alternative<br> payments, hosted wallets and cold wallets.</p>
            </div>
            <div>
               
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted grey2" style="background-color: #F7F7F7; max-height: 200em;">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <p>(IMAGE HERE)</p>
            </div>
            <div style="color: #6B7C93;">
                <h3 style="color: #2C3135;">Custodian Accounts</h3>
                <p>Another first sees Ibinex leading the way as the world's first cryptocurrency exchange with a finance transaction license. We are proud to be the first to offer you:</p>
                <p>Fully-compliant and licensed custodian proceeding and accounts</p>  
                <p>The choice to instead select a custodian of your choice</p>
                <p>Payments via swipe-and-transmit from FIAT to base currency</p>
                <p>A raft of other custodian account options unavailable elsewhere</p>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<?php } ?>