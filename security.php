<?php 

require 'template.php';

function display_title(){
  echo "Security";
}

function scripts_include(){
  
}

function styles_include(){
?>
<style>
  .heading{
    font-family: ;
  }
   p {
        color: #6F8197; 
        word-spacing: 1px;
        font-size: 11px;
        font-style: Helvetica;
        font-weight: bold;
    }
   h6 {
      font-size: 11.5px;
      word-spacing: 1px;
   }
  #title{
    font-family: 'Arial Black'
    font-weight: 900;
  }
  #title1{
      font-weight: 850;
      font-family: 'Comic Sans MS';
  }
   .border1{
      border-right: 0px solid #aaa;
    }
    .border2{
      border-bottom: 0;
    }
    #funds-tech{
      padding: 80px 20% 15px;
    }
    #banner-width{
      padding: 50px 30px 90px 80px;
    }
    #funds-tech div{
    @media (max-width: 767px) {  
      #funds-tech {  padding: 80px 5% 15px; }
    }

    @media (max-width: 959px) {  
      #funds-tech {  padding: 80px 10% 15px; }  
    }
  </style>
<?php
}
function display_content(){
?>
<!-- =================================================FIRST SECTION========================================= -->
<div class="uk-section uk-light uk-padding-large uk-panel uk-text-center@s uk-card-body uk-grid-small" id='banner-width' style="background-color:#152C58;">
    <h3 id="title1" style="font-style:italic;">Security</h3>
    <h6>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br>           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br> aliquip           ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum <br> dolore eu           fugiat nulla pariatur.
    </h6>
</div>


<!-- ===============================================SECOND SECTION========================================== -->
<div class="uk-section uk-grid-small uk-child-width-1-2@s uk-grid-match uk-grid" id='funds-tech' data-uk-grid-margin>
    <!--  FIRST COLUMN  -->
    <div class="uk-first-column" >
        <div class="border1 border2 uk-text-left">
            <h3 id="title">Protection of Funds</h3>
            <p class="uk-text-justify"><br><br>
                The protection of your crypto-funds is of paramount importance to us. For this reason, we take the                     ultimate lengths to ensure your funds remain safe at all times.
            </p>
            <p class="uk-text-justify">
                As an indication of the high protective standards we hold, Ibinex has been granted the status of                       fully-licensed, fully-compliant and as a regulated custodian and account processor.
            </p> 
            <p class="uk-text-justify">
                We are the first cryptocurrency exchange platform to hold this mantle and offer exclusive payment                     solutions. As such, we must demonstrate a consistent level of regulatory compliance in order to retain                 this professional distinction, a title of which we are immensely proud.
            </p>
        </div>
    </div>
    <!--  2ND COLUMN  -->
    <div>
        <div class="border2">
            <h3 id="title">Encryption and Technologies</h3>
            <p class="uk-text-justify uk-text-top">
            A successful cryptocurrency exchange suite is only as strong as its weakest link. Ibinex has left no                   encryption technology stone unturned, and has implemented the highest level of SSL security into the                   platform, complete with the most solid and secure technologies.
            </p>
            <p class="uk-text-justify">
            We ensure that no weak links exist to threaten the stability and core security of Ibinex for our                       customers. Threats are neutralised before they present themselves - we take no chances and anticipate                 potential breaches before they arise, entirely removingtheir potential before they ever eventuate.
            </p>
        </div>
    </div> 
  
<!--  END OF 2ND COLUMN  -->
</div>


<!-- =================================================THIRD SECTION======================================== -->
<div class="uk-background-muted uk-section uk-grid-small uk-child-width-1-2@s uk-grid-match uk-grid" id='funds-tech' data-uk-grid-margin>
  
      <!--     FIRST COLUMN   -->          
      <div class="uk-first-column">
          <div class="border1 border2 uk-text-left">
              <h3 id="title">Information Security</h3>
              <p class="uk-text-justify">
                Our platform is a 24/7 guarded operation, with all crypto-based funds held in cold-wallets, shielded                   by our own team of cyber security experts who work around the clock to ensure all funds are safe and                   untouchable by unauthorized seekers.
              </p>
          </div>
      </div>

      <!--     SECOND COLUMN   -->
      <div>
          <div class="border2">
              <h3 id="title">Privacy </h3>
              <p class="uk-text-justify">
              Security and confidentiality are of the utmost importance for our clients, and you can learn more about               our completely transparent Regulations and Privacy Policy, to have complete peace of mind and confidence      in Ibinex.
              </p>
          </div>
      </div>
</div>

<?php
}
?>