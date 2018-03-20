<?php $display_sidebar = true;
      $current = 'security';
?>

<?php function display_title(){ ?> Example Title  <?php } ?>

<?php function styles_include(){ ?>
<style>
  .personal-information {
    background-color: #0A0827;
    margin-right: 70%;
    padding-bottom: 2.4%;
  }
  .pi-content {
    margin-left: 10%;
    padding-top: 6%;
  }
  .personal-information .pi-content h3 {
    color: #fff;
    font-size: 82%;
  }
  .pi-form {
    margin-top: 8%;
    
  }
  .pi-form label {
    color: #2972F3;
    font-size: 65%;
    font-weight: 500;
    margin-bottom: 1%;
  }
  .save-changes {
    background-color: #17D3BA;
    color: #0A0827;
    font-weight: 700;
    width: 90%;
    font-size: 100%;
    margin-bottom: -2%;
  }
  .marketSelect {
    background-color: #21224A;
    border-radius: 8px;
    border: 1px;
    color: #fff;
    margin-bottom: 6%;
    margin-top: 6%;
    font-size: 90%;
    padding-top: 3%;
    padding-bottom: 3%;
    padding-right: 39%;
    padding-left: 4%;
  }
  /*.currencySelect {
    background-color: #21224A;
    border-radius: 8px;
    border: 1px;
    color: #fff;
    margin-bottom: 6%;
    font-size: 90%;
    padding-top: 3%;
    padding-bottom: 3%;
    padding-left: 4%;
    padding-right: 33%;
  }*/
  label.select2 {
    overflow: hidden; 
    position: relative;
    display: block;
}

select.currencySelect{       
    background-color: #21224A;
    border-radius: 8px;
    border: 1px;
    color: #fff;
    margin-bottom: 6%;
    font-size: 130%;
    padding-top: 3%;
    padding-bottom: 3%;
    padding-left: 6%;
    padding-right: 41.5%;
   -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
label.select2:after {
    content:">";
    width: 50px;
    font-size: 150%;
    font-weight: 900;
    color: #fff;
    position: absolute; 
    right: 15%;
    top: 2%;
    z-index: 1;
    width: 10%;
    height: 100%;  
    pointer-events: none;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
  .pi-form input[type=email], input[type=password] {
    color: #fff;
    background-color: #080927;
    border-bottom-color: #2972F3;
    border-left-style: none;
    border-right-style: none;
    border-top-style: none;
    border-width: 1px;
    padding-bottom: 2%;
    width: 90%;
    margin-bottom: 2%;
  }
  select::-ms-expand {
     display: none;
  }
</style>
<?php } ?>

<?php function display_content(){ ?>
   <div class="personal-information">
     <div class="pi-content">
        <h3>PERSONAL INFORMATION</h3>
        <div class="pi-form">
          <form action="">
            
            <label for="changePassword"><strong>CHANGE PASSWORD</strong></label><br>
            <input type="password" name="changePassword" id="changePassword"><br>
            <label for="retypePassword"><strong>RETYPE PASSWORD</strong></label><br>
            <input type="password" name="retypePassword" id="retypePassword"><br>
            <label for="email"><strong>EMAIL ADDRESS</strong></label><br>
            <input type="email" name="email" id="email">
            
            <div class="select1">
              <select class="marketSelect" name="market" id="">
                <option value="market" selected>DEFAULT MARKET</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
              </select>
            </div>
            
            <label class="select2">
              <select class="currencySelect" name="currency" id="">
                <option value="market" selected>DEFAULT CURRENCY</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
              </select>
            </label>
              
            <input type="submit" class="btn btn-basic save-changes" name="saveChanges" value="SAVE CHANGES">
          </form>
        </div>
     </div>
   </div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

<?php require '../../template-bootstrap.blade.php'; ?>

