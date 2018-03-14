<?php require 'template.php'; ?>

<?php function styles_include(){?>
<style>
  p {
    color: #7D8BA0;
    word-spacing: -1px;
    font-size: 12.5px;
    font-style: Helvetica;
  }

  h6 {
    font-size: 11.5px;
    word-spacing: 1px;
  }

  #title {
    color: #2A3137;
  }

  #security {
    font-size: 27px;
    font-weight: bold;
    font-family: Verdana !important;
  }

  #p2 {
    color: #6E7D94;
  }

  .center {
    margin: auto;
    width: 90%;
    border: 0px solid #FFFFFF;
    padding: 0px;
  }

  #security-content {
    column-gap: 20px!important;
  }
</style>

<?php } ?>

<?php function display_title(){ ?> Ibinex-Security
<?php } ?>

<?php function display_content(){ ?>
<div class="uk-background-primary uk-light uk-padding-large uk-panel uk-text-center@s uk-card-body" style="background-color:#152C58;">
  <h2 id="security"><i><b>Security</b></i></h2>
  <h6>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br> aliquip ex ea commodo consequat. Duis
    aute irure dolor in reprehendrit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur.
  </h6>
</div>

<div class="center">
      <div class="uk-column-1-2 uk-padding uk-margin-xlarge-left uk-margin-xlarge-right uk-panel uk-card-body uk-h6 uk-text-primary uk-text-justify" id="security-content";>
          <h2 id="title" class='uk-text-bold'>Protection of Funds</h2>
          <br>

          <p>
            The protection of your crypto-funds is of paramount importance to us. For this reason, we take the ultimate lengths to ensure your    funds   remain safe at all times.
          </p>
          <p>
            As an indication of the high protective standards we hold, Ibinex has been granted the status of fully-licensed, fully-compliant and as a regulated custodian and account processor.
          </p> 
          <p>
            We are the first cryptocurrency exchange platform to hold this mantle and offer exclusive payment solutions. As such, we must demonstrate a consistent level of regulatory compliance in order to retain this professional distinction, a title of which we are immensely proud.
          </p>
    
          <h2 id="title"  class='uk-text-bold'>Encryption and<br>Technologies</h2>


        <p>
          A successful cryptocurrency exchange suite is only as strong as its weakest link. Ibinex has left no encryption technology stone unturned, and has implemented the highest level of SSL security into the platform, complete with the most solid and secure
          technologies.
      </p>
        <p> 
          We ensure that no weak links exist to threaten the stability and core security of Ibinex for our customers. Threats are neutralised before they present themselves - we take no chances and anticipate potential breaches before they arise, entirely removing
          their potential before they ever eventuate.
      </p>
    </div>
</div>
<div class="center">
  <div class="uk-column-1-2 uk-padding uk-margin-xlarge-left uk-margin-xlarge-right uk-panel uk-card-body uk-h6 uk-text-primary uk-text-justify uk-align-left" id="security-content";>
    <h2 id="title"><b>Information Security</b>
    </h2>
    <p id="p2">Our platform is a 24/7 guarded operation, with all crypto-based funds held in cold-wallets, shielded by our own team of cyber security experts who work around the clock to ensure all funds are safe and untouchable by unauthorized seekers.</p>
    <h2 id="title"><b>Privacy</b>
    </h2>
    <p id="p2">Security and confidentiality are of the utmost importance for our clients, and you can learn more about our completely transparent Regulations and Privacy Policy, to have complete peace of mind and confidence in Ibinex.</p>
    <br>
    <br>
    <br>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>