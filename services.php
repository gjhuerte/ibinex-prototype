<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .red {
    color: #FEFEFD;
  }
  .red h3{
    color: #FEFEFD;
    text-align: center;
  }
  .red p{
    text-align: center;
  }
  .uk-section-muted {
    height: 10%;
  }
  li:before {
  content: "\f058";
  font-family: FontAwesome;
  display: inline-block;
  margin-left: -1.3em; 
  width: 1.3em; 
  color: #12D5B8;
}
</style>
<?php } ?>

<?php function display_title(){ ?>
  Services
<?php } ?>

<?php function display_content(){ ?>
<div class="uk-section uk-section-default red" style="background-color: #C11722;">
    <div class="uk-container">
        <h3>Services</h3>
        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
            <div>
                <p>Ibinex services are all characterised by high-level innovation made practical for your personalised <br> exchange integration.</p>
                <p>Our ecosystem of services compromises of the following units.</p>  
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted" style="background-color: #F7F7F7; max-height: 200em;">
    <div class="uk-container">
        
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <img src="http://www.pngmart.com/files/4/Macbook-PNG-Pic.png" width="392" height="210" alt="macbook">
            </div>
            <div>
                <h3 class="">Platform</h3>
                <p>Your exchange is your launchpad. Our suite elevates your exchange by<br> equipping you with your own platform consisting of:</p>
                <ul id="pl_list" style="list-style: none;">
                  <li> Tailor-made private, institutional while label infrastructure</li>
                  <li> Fully-customisable front-end website</li>
                  <li> Completely integrated web-based trading platform</li>
                  <li> Flexible front-end user trading</li>
                  <li> Performance-driven features</li>
                  <li> Secure private cloud hosting</li>
                  <li> Total compatibility with your own branding deck</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <h3>CRM/Back Office</h3>
                <p>The Ibinex solution unites the front-end and platform with a full black<br> office suit including CRM with:</p>
                <ul id="pl_list" style="list-style: none;">
                  <li> KYC/AML documentation collection</li>
                  <li> Documentation verification</li>
                  <li> Account and money management</li>
                  <li> Optimised back-office administrative workflow</li>
                  <li> Enhanced UI/UX</li>
                </ul>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-primary uk-light" style="background: #142C5C; background: linear-gradient(to right, #142C5C , #134093);">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <h3>CryptoBridge&trade;</h3>
                <p>Aggregate elite exchanges and indexes as the cryptocurrency market<br> moves, with out patent-pending proprietary software suite, Crypto-<br> Bridge&trade;. Gain access to 60 premier exchanges for maximum liquidity<br> cryptocurrencies, all available only through CryptoBridge&trade; by Ibinex.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                <h3>Credit Card Processing</h3>
                <p>We offer full spectrum payment processing for cryptocurrencies, and a<br> complete selection that is unavailable elsewhere. Exchanging your way<br> with Ibinex means experiencing a whole new world of payment<br> options including: credit cards, debit cards, wire transfers, alternative<br> payments, hosted wallets and cold wallets.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-muted" style="background-color: #F7F7F7; max-height: 200em;">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
            <div>
                
            </div>
            <div>
                <h3 class="">Custodian Accoounts</h3>
                <p>Another first sees Ibinex leading the way as the world's first cryptocurrency<br> exchange with a finance transaction license. We are proud to be the first to offer<br> you:</p>
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

<?php } ?>