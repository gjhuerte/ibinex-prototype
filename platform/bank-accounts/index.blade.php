<?php $display_sidebar = true; 
      $current = 'bankAccounts';?>

<?php require '../../template-bootstrap.blade.php'; ?>

<?php function display_title(){ ?> Bank Accounts | IBINEX  <?php } ?>

<?php function styles_include(){ ?>
<style> 
        
    #bank-container {
        height: 100%;
    }
    
    .bank-acc-box {
        padding: 0 15px 10px 0;
    }
    
    .bank-headers {
        color: white;
        font-size: 0.7rem;
        padding: 0.8rem 0 0 1.2rem;
    }
    
    #bank-left-box {
        background-color: #0A0928;
        height: 100%;
    }

    #bank-form {
        margin-top: 5%;
    }
    
    input[type="text"] {
        border: none;
        font-size: .7rem;
        border-radius: 0;
        padding-left: 0;
        background: transparent;
        border-bottom: 1px solid #171b3e;
        box-shadow: none;
        -webkit-box-shadow: none;
    }

    input[type="text"]:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        color: white;
    }

    .select-label {
        color: white;
        font-size: .55rem;
    }

    .account-label {
        color: #2f4b8a;
        font-size: .55rem;
    }

    .form-control:focus {
        background-color: #0a0928;
    }

    .bank-select {
        background-color: #21234c;
        color: white;
        font-size: .7rem;
        border-radius: 1rem;
        border: 1px solid #21234c;
    }

    #add-button {
        background-color: #16d4ba;
        padding: 4% 15% 4% 15%;
        font-size: .7rem;
        font-weight: 900;
        position: relative;
    }
    
    #bank-right-box {
        background-color: #0A0928;
        height: 100%;
        width: 100%;
    }
    
    #bank-table {
        width: 100%;
        color: white;
        margin-top: 1%;
        text-align: center;
        font-size: 0.7rem;
    }
    
    th {
        color: #46D8B6;
    }
    tr {
        height: 1.8rem;
    }
    
    table tbody tr:nth-child(2n){
        background-color: #21234C;
    }
    table tbody tr:nth-child(2n-1){
        background-color: #0A0928;
    }
    
    table tr th:nth-child(2), table tr th:nth-child(4),
    table tr td:nth-child(2), table tr td:nth-child(4) {
        width: 20%;
    }
    table tr th:nth-child(1),
    table tr td:nth-child(1){
        width: 15%;
    }
    table tr th:nth-child(3), table tr th:nth-child(5), table tr th:nth-child(6),
    table tr td:nth-child(3), table tr td:nth-child(5), table tr td:nth-child(6){
        width: 10%;
    }
    table tr th:nth-child(7),
    table tr td:nth-child(7){
        width: 20%;
    }
    
    .delete-btn{
        line-height: 0.3rem;
        font-size: 0.8rem;
    }
    
</style>
<?php } ?>

<?php function display_content(){ ?>
<div id="bank-container" class="row">
    <div class="bank-acc-box col-md-4 col-sm-12">
        <div id="bank-left-box">
            <div class="bank-headers">
                <span>ADD A BANK ACCOUNT</span>
            </div>
            <div id="bank-form">
                <form>
                    <div class="form-row col-md-12 col-lg-12">
                        <div class="form-group col-md-7 col-lg-7">
                            <span class="select-label" for="bank-name">BANK NAME</span>
                            <select id="bank-name" class="form-control bank-select">
                                <option selected>SELECT BANK</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5 col-lg-5">
                            <span class="select-label" for="bank-currency">CURRENCY</span>
                            <select id="bank-currency" class="form-control bank-select">
                                <option selected>USD</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="bank-agency" placeholder="AGENCY">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="bank-acc-no" placeholder="BANK ACCOUNT NUMBER">
                    </div>
                    <div class="form-group col-md-12">
                        <span class="account-label" for="inputCity">ACCOUNT HOLDER NAME</span>
                        <input type="text" class="form-control" id="bank-acc-name" placeholder="KOUNIO ERIC">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="bank-desc" placeholder="DESCRIPTION">
                    </div>
                    <div class="form-group col-md-12">
                        <button id="add-button" type="submit" class="btn">ADD ACCOUNT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bank-acc-box col-md-8 col-sm-12">
        <div id="bank-right-box">
            <div class="bank-headers">
                <span>LINKED BANK ACCOUNTS</span>
            </div>
            <table id="bank-table">
                <thead>
                    <tr>
                        <th>Bank Name</th>
                        <th>Account Holder Name</th>
                        <th>Agency</th>
                        <th>Account Num</th>
                        <th>Currency</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bank</td>
                        <td>KOUNIO ERIC</td>
                        <td>Agency 1</td>
                        <td>1234 5678 8900 123</td>
                        <td>USD</td>
                        <td>SAVINGS</td>
                        <td><button type="button" class="btn btn-danger delete-btn">DELETE</button></td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

