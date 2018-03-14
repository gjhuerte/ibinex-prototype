<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    /*     font-family: 'Lato', sans-serif !important; */
  }

  #nusku-header {
    display: grid;
    grid-template-columns: 1fr 1.5fr 1.5fr 2fr;
    grid-template-rows: 5rem auto 5rem;
    
  }

  .header-image {
    background-size: cover;
    background-position: left center;
    background-image: url(assets/images/bridge.png);
    filter: grayscale(100%) brightness(70%);
    grid-column: 1 / -1;
    grid-row: 1 / -1;
  }
  
  .header-container.red-border {
    grid-column: 2 / span 1;
    grid-row: 2 / span 1;
    border: 15px solid maroon;
    z-index: 1;
    filter: opacity(60%);
    border-radius: 0 30px 0 0;
    margin-left: 1.5rem;
  }
  
  .header-container.header-text {
    grid-column: 2 / span 2;
    grid-row: 2 / span 1;
    z-index: 2;
    padding: 15% 0 10% 15%;
  }
  .header-container.header-text p, 
  .header-container.header-text h1, 
  .header-container.header-text h2 {
    color: whitesmoke;
    font-size: 0.8rem;
    font-weight: 600;
  }

  .header-container.header-text h2 {
    font-family: 'Times New Roman', serif;
    font-weight: 700;
    font-size: 2.5rem;
    font-style: italic;
    margin-bottom: 0;
  }

  .header-container.header-text h1 {
    margin-top: 0;
    font-family: 'Verdana', sans-serif;
    font-weight: 900;
    font-size: 4rem;
    font-style: italic;

  }

  .header-container.header-text > h1 > span {
    font-size: 1.5rem;
    vertical-align: super;
    font-weight: 600;
  }
  
  .header-input {
    grid-column: 3 / span 1; 
    grid-row: 2 / span 1;
    z-index: 3;
    display: grid;
    grid-template-columns: 1fr auto;
    grid-template-rows: 1fr auto;
    padding: 0 0 2rem 2rem;
  }
  
  .header-input > button, 
  .header-input > input {
    background-color: #c81824;
    border:none;
    outline: none;
    color: white;
    padding: 12px 8px 12px 8px;
    font-size: 0.55rem;
    font-weight: 500;
    margin: 0;
    grid-column: 2 / span 1;
    grid-row: 2 / span 1;
    line-height: 10px;
    border-radius: 0 5px 5px 0;
   
  }
  .header-input > input {
    background-color: white;
    color: black;
    grid-column: 1 / span 1;
    border-radius: 5px 0 0 5px;
    
  }
 


@media only screen and (min-width: 768px) and (max-width : 1024px) {
/* For tablet: */
  #nusku-header {
    grid-template-columns: 0.5fr 1.5fr 1.5fr 0.5fr;
  }
}

@media only screen and (max-width: 767px) {
/* For mobile: */
  #nusku-header {
    grid-template-columns: 1fr;
    grid-template-rows: auto auto;
  }
  .header-container.header-text {
    grid-column: 1 / -1;
    grid-row: 1 / span 1;
    padding: 20px;
    padding-top: 5rem;
  }
  .header-input {
    grid-column: 1 / -1; 
    grid-row: 2 / span 1;
    display: grid;
    grid-template-columns: auto 1fr;
    padding: 0;
  }
   
  .header-input > input,
  .header-container.red-border {
    display: none;
  }
  
  .header-input > button {
    grid-column: 1 / span 1; 
    font-size: 0.9rem;
    padding: 18px 10px 18px 10px;
    margin-bottom: 2rem;
    margin-left: 1.5rem;
    border-radius: 5px;
  }
  
  .header-container.header-text h1 {
    font-size: 2rem;
  }
  
    .header-container.header-text h2 {
    font-size: 1.9rem;
  }
  
  .header-container.header-text p {
    font-size: 1rem;
    font-weight: 500;
    text-align: justify;
  }
  .header-image {
    background-position: 80% 0%;
}
  
</style>
<?php } ?>

<?php function display_title(){ ?>
  Ibinex
<?php } ?>

<?php function display_content(){ ?>
  <div id="nusku-header">
    <div class="header-image"></div>
    
    <div class="header-container red-border">
    </div>
    
    <div class="header-container header-text">
      <h2>Introducing</h2>
      <h1>CryptoBridge<span>TM</span></h1>
      <p>Our patent-pending proprietary software. CryptoBridge, is the nexus that aggregates premier cryptocurrency exchanges and indexes for your customers, in real-time.</p>
      <p>The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select cryptocurrency exchanges and most attractive live prices-only available via the ibinex trading platform.</p>
    </div>
    
    <div class="header-input">
      <input type="text" placeholder="Type your email">
      <button class="uk-button uk-button-danger uk-button-small">REQUEST A DEMO</button>
    </div>
    


  </div>

<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>