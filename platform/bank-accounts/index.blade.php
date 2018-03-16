<?php $display_sidebar = true; ?>

<?php require '../../template-bootstrap.blade.php'; ?>

<?php function display_title(){ ?> Example Title  <?php } ?>

<?php function styles_include(){ ?>
<style>
  input[type="text"] {
  background: transparent;
  border: none;
  border-bottom: 1px solid #000000;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
}

input[type="text"]:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}
  
  .form-color {
    background-color: #0a0928;
  }
  
  .label1 {
    color: white;  
  }
  
  .input-color {
    background-color: #0a0928;
  }
  
  .bank-color {
    background-color: #21234c;
  }
  
  .btn-color {
    background-color: #16d4ba;
    color: #003030;
    margin: 0 auto;
  }
  
  .form1-margin {
    
  }
  
</style>
<?php } ?>

<?php function display_content(){ ?>
<form class="form-row col-md-4 form-color">
    <div class="form-row col-md-12">
      <div class="form-group col-md-12">
        <label class="label1" for="inputEmail4">ADD A BANK ACCOUNT</label>
      </div>
      <div class="form-group col-md-7">
        <label class="label1" for="inputState">BANK NAME</label>
        <select id="inputState" class="form-control label1 bank-color">
          <option selected>SELECT BANK</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-5">
        <label class="label1" for="inputEmail4">CURRENCY</label>
        <select id="inputState" class="form-control label1 bank-color">
          <option selected>USD</option>
          <option>...</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-12">
      <input type="text" class="form-control input-color" id="inputAddress" placeholder="AGENCY">
    </div>
    <div class="form-group col-md-12">
      <input type="text" class="form-control input-color" id="inputAddress2" placeholder="BANK ACCOUNT NUMBER">
    </div>
    <div class="form-group col-md-12">
      <label for="inputCity">ACCOUNT HOLDER NAME</label>
      <input type="text" class="form-control input-color" id="inputName" placeholder="KOUNIO ERIC">
    </div>
    <div class="form-group col-md-12">
      <input type="text" class="form-control input-color" id="inputAddress2" placeholder="DESCRIPTION">
    </div>
    <div class="form-group col-md-12">
      <button type="submit" class="btn btn-color">ADD ACCOUNT</button>
    </div>
    
</form>

<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

