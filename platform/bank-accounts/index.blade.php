<?php $display_sidebar = true; 
      $current = 'bankAccounts';?>

<?php require '../../template-bootstrap.blade.php'; ?>

<?php function display_title(){ ?> Example Title  <?php } ?>

<?php function styles_include(){ ?>
<style>
    input[type="text"] {
        background: transparent;
        border: none;
        border-bottom: 1px solid #171b3e;
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
        font-size: .7rem;
    }

    .label2 {
        color: white;
        font-size: .5rem;
    }

    .label3 {
        color: #2f4b8a;
        font-size: .5rem;
    }

    .form-control1 {
        border-radius: 1rem;
        border: 1px solid #21234c;
    }

    .formcontrol1:focus {
        color: white;
    }

    .form-control:focus {
        background-color: #0a0928;
    }

    .bank-color {
        background-color: #21234c;
    }

    .btn-color {
        background-color: #16d4ba;
        padding: 4% 15% 4% 15%;
        font-size: .7rem;
        font-weight: 900;
        position: relative;
    }

    .form1-margin {

    }

    .input-color {
        font-size: .7rem;
    }

    .input-color:focus {
        color: white;
    }
    
    #bank-right-box {
        background-color : red;
        width: 100%;
        min-height: 50vh;
        padding: 0 1%;
    }
    
    .bank-headers {
        color: white;
        font-size: 0.8rem;
    }

</style>
<?php } ?>

<?php function display_content(){ ?>
<div class="row">
    <form class="form-row col-md-4 col-sm-4 form-color">
        <div class="form-row col-md-12 col-lg-12">
            <div class="form-group col-md-12 col-lg-12">
                <label class="label1" for="inputEmail4">ADD A BANK ACCOUNT</label>
            </div>
            <div class="form-group col-md-7 col-lg-7">
                <label class="label2" for="inputState">BANK NAME</label>
                <select id="inputState" class="form-control form-control1 label1 bank-color">
                    <option selected>SELECT BANK</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-5 col-lg-5">
                <label class="label2" for="inputEmail4">CURRENCY</label>
                <select id="inputState" class="form-control form-control1 label1 bank-color">
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
            <label class="label3" for="inputCity">ACCOUNT HOLDER NAME</label>
            <input type="text" class="form-control input-color" id="inputName" placeholder="KOUNIO ERIC">
        </div>
        <div class="form-group col-md-12">
            <input type="text" class="form-control input-color" id="inputAddress2" placeholder="DESCRIPTION">
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-color">ADD ACCOUNT</button>
        </div>
    </form>
    <div id="bank-right-box" class="col-md-8 col-sm-8">
         <div class="form-group col-md-12 col-lg-12">
            <span class="bank-headers">LINKED BANK ACCOUNTS</span>
        </div>
    </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

