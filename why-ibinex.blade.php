<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  .display {
    display: grid;
  }
  .main-grid{
    display: grid;
    grid-template-rows: auto;
  }
  
  .mainPadding{
    padding-left: 20%;
    padding-right: 20%;
  }
  
  .section1st{
    padding-top: 5%;
    grid-template-rows: auto;
  }
  
  .section2{
     padding-top: 5%;
     grid-template-rows: auto;
    display: grid;
     padding-bottom: 5%;
  }
  
  .title-section2,
  .text2  {
    display: grid;
    text-align: center;
  }
  
  .section2-text{
    grid-template-rows: auto;
    grid-template-columns: 2fr 2fr;
    display: grid;
  } 
  
  .section2-text .text {
     padding-top: 10%;
  } 
  
  .header-section,
  .section2-text2{
    padding-top: 5%;
  }
  
  .float-image{
    top: -166px;
    right: 10%;
  }
  .bgcolor{
    background-color: #142c5a;
  }
  
  .padding-top {
    padding-top: 10%;
  }
   @media only screen and (min-width : 768px) and (max-width : 1024px) {
    
  }
  
  @media only screen and (max-width : 480px) {
    .mainPadding{
    padding-left: 5%;
    padding-right: 0;
  }
  }
</style>
<?php } ?>

<?php function display_title(){ ?>
  Why Ibinex
<?php } ?>

<?php function display_content(){ ?>
<div class="main-grid">
  <div class="section1st">
    <div class="display mainPadding">
       <h2 class="header-section">We fuse innovation with accessibility as blockchain technology evolves</h2>
       <p>We seek to revolutionise the way that exchange owners create their platforms and raise the standard of marketplace excellence by incorporating our cutting-edge technology, delivered with practicality and a host of unique benefits, only enjoyed by merging with the ibinex ecosystem.</p>
    </div>
    <div class="display mainPadding bgcolor uk-light" style="padding-bottom: 3%;">
      <h2 class="header-section">We are an ecosystem with vision</h2>
      <p>As the gateway to your own customisable cryptocurrency ecosystem, our vision is to equip you with the tools to create and operate your cryptocurrency exvhange, your way.</p>
    </div>
  </div>
  <div class="section2">
    <div class="title-section2 mainPadding">
      <h2 class="uk-text-bold">Why you should exchange your way with Ibinex:</h2>
      <p>Our strategy is underpinned by the 4 core strengths of Ibinex:</p>
    </div>
    <div class="section2-text mainPadding" style="border-bottom: 1px solid #e5e5e5;">
       <div class="text" style="padding-right: 15%; border-right: 1px solid #e5e5e5;">
             <div class="uk-animation-toggle">
               <img src="assets/images/1.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            Commitment to technological innovation, through out patent-pending proprietary software, Cryptobridge<sup>TM</sup>
        </div>
        <div class="text" style="padding-left: 15%;">
            <div class="uk-animation-toggle">
               <img src="assets/images/2.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            Trailblazing of complete and customisable white label platform solutions
        </div>
        <div class="text" style="padding-right: 15%; border-right: 1px solid #e5e5e5;  padding-bottom: 5%;">
             <div class="uk-animation-toggle">
               <img src="assets/images/3.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            Offering unprecedented custodian service with our industry's first finance transaction license
        </div>
        <div class="text"  style="padding-left: 15%; padding-bottom: 5%;">
             <div class="uk-animation-toggle">
               <img src="assets/images/4.png" alt="" width="60" height="60" style="margin-bottom: 15px;" class="uk-animation-shake"/>
            </div>
            Providing a full-spectrum payment processing infrastructure to revolutionise liquidity for your exchange
        </div>
    </div>
    <div class="section2-text2 mainPadding">
       <div class="text2">
        <p>This vision of a balanced yet pioneering approach to blockchain technology software and white label platform turnkey solutions, aim  to maximise liquidity both whitin your own exchange and the wider pool of burgeoning cryptocurrency markets internationally, creating a natural funnel with a self-feeding ecosystem of buyers and sellers.</p>
     </div>
    </div>
  </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>