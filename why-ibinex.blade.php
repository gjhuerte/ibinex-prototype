<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  .imgHeight{
    height: 100vh;
  }
  
  .mainPadding{
    padding-left: 20%;
    padding-right: 20%;
  }
  
  .float-image{
    top: -166px;
    right: 10%;
  }
  
  .losange, .losange div {
  margin: 0 auto;
  transform-origin: 50% 50%;
  overflow: hidden;
  width: 250px;
  height: 250px;
}
.losange {
  transform: rotate(45deg) translateY(10px);
}
.losange .los1 {
  width: 355px;
  height: 355px;
  transform: rotate(-45deg) translateY(-74px);
}
.losange .los1 img {
  width: 100%;
  height: auto;
}

  .bgcolor{
    background-color: #142c5a;
  }
  
  .padding-top {
    padding-top: 20px;
  }
</style>
<?php } ?>

<?php function display_title(){ ?>
  Why Ibinex
<?php } ?>

<?php function display_content(){ ?>
<main class="imgHeight">
  <div>
    <div class="uk-section mainPadding">

          <div class="uk-grid-match uk-child-width-1-1" uk-grid>
            <div>
              <h2 class="uk-text-bold">We fuse innovation with accessibility as blockchain technology evolves</h2>
              <p>
                We seek to revolutionise the way that exchange owners create their platforms and raise the standard of marketplace excellence                 by incorporating our cutting-edge technology, delivered with practicality and a host of unique benefits, only enjoyed by                     merging with the ibinex ecosystem.
              </p>
            </div>
          </div>

    </div>
    <div class="uk-float-right float-image uk-position-relative">
        <img src="http://farm3.staticflickr.com/2178/3531465579_8bff044e9b_z.jpg?zz=1" alt="" width="255" height="320" />
    </div>
    <div class="uk-section uk-light mainPadding bgcolor padding-top">

          <div class="uk-grid-match uk-child-width-1-1" uk-grid>
             <div>
              <h2 class="uk-text-bold">We are an ecosystem with vision</h2>
              <p>
                As the gateway to your own customisable cryptocurrency ecosystem, our vision is to equip you with the tools to create and                     operate your cryptocurrency exvhange, your way.
              </p>
            </div>
          </div>

    </div>
  </div>
  <div class="uk-section uk-padding-remove">
    <div class="uk-text-center uk-padding-large mainPadding">
      <h2 class="uk-text-bold">Why you should exchange your way with Ibinex:</h2>
      <p>Our strategy is underpinned by the 4 core strengths of Ibinex:</p>
    </div>
    <div class="uk-grid-collapse uk-child-width-1-2@m mainPadding" uk-grid style="border-bottom: 1px solid #b1b2b4;">
      <div>
          <div class=" uk-padding" style="border-right: 1px solid #b1b2b4;">Commitment to technological innovation, through out patent-pending proprietary software, Cryptobridge<sup>TM</sup></div>
      </div>
      <div>
          <div class="uk-padding">Trailblazing of complete and customisable white label platform solutions</div>
      </div>
      <div>
          <div class="uk-padding" style="border-right: 1px solid #b1b2b4;">Offering unprecedented custodian service with our industry's first finance transaction license</div>
      </div>
      <div>
          <div class="uk-padding">Providing a full-spectrum payment processing infrastructure to revolutionise liquidity for your exchange</div>
      </div>
    </div>
    <div class="uk-text-center mainPadding">
      <div class="uk-padding-large">
      <p>This vision of a balanced yet pioneering approach to blockchain technology software and white label platform turnkey solutions, aim  to maximise liquidity both whitin your own exchange and the wider pool of burgeoning cryptocurrency markets internationally, creating a natural funnel with a self-feeding ecosystem of buyers and sellers.</p>
     </div>
    </div>
  </div>
</main>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>