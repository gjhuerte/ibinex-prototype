<<<<<<< HEAD
<?php $display_sidebar = true; ?>
=======
<?php $display_sidebar = true;
      $current = 'security';
?>
>>>>>>> ed114dcab6e233fa9e6845ea6fae3e02686e37aa

<?php function display_title(){ ?> Example Title  <?php } ?>

<?php function styles_include(){ ?>
<style>
  .personal-information {
    background-color: #0A0827;
    margin-right: 70%;
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
    color: #303F7D;
    font-size: 66%;
    font-weight: 600;
  }
  .save-changes {
    background-color: #17D3BA;
    color: #0A0827;
    font-weight: 700;
    width: 90%;
    font-size: 100%;
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
            <input type="password" name="changePassword"><br>
            <label for="retypePassword"><strong>RETYPE PASSWORD</strong></label><br>
            <input type="password" name="retypePassword"><br>
            <label for="email"><strong>EMAIL ADDRESS</strong></label><br>
            <input type="email" name="email">
            
            <select name="market" id="">
              <option value="market" selected>DEFAULT MARKET</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
              <option value="4">Option 4</option>
              <option value="5">Option 5</option>
            </select>
            
            <select name="currency" id="">
              <option value="market" selected>DEFAULT CURRENCY</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
              <option value="4">Option 4</option>
              <option value="5">Option 5</option>
            </select>
            
            <input type="submit" class="btn btn-basic save-changes" name="saveChanges" value="SAVE CHANGES">
          </form>
        </div>
     </div>
   </div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

<?php require '../../template-bootstrap.blade.php'; ?>

