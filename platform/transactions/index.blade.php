<?php $display_sidebar = true; 
      $current = 'transactions';
?>
<?php require '../../template-bootstrap.blade.php'; ?>

<?php function styles_include(){ ?>
  <style>
    
    .col-mid {
      background-color: #0A0827;
      color: #FFF;
      font-size: 12px;
      padding:0;
      /*border-bottom: 40px solid #146CF2;*/
    }
    
    .col-mid .inline h5{
      font-size: 12px;
    }
    .bordered{
      position: relative;
      padding: 10px;  
    }
    
    .btn-group-withdraw {
      padding: 10px 0;
    }
    
    .my-btn {
      color: #FFF;
      background-color: #212247;
      border-radius: 10px;
      margin: 0 7px;
      font-size: 12px;
    }
    
    .btn.active{
      background-color: #0B6FF0;
    }
    
    .btn-withdraw{
      background-color: #FFD03E;  
      color: #000;
    }
    .inline {
      display: inline-block;
      margin: 5px;
    }
    .bordered:after {
      position: absolute;
      content: '';
      bottom: -8px;
      left: 0;
      height: 8px;
      width: 100%;
      background-size: 12px 12px;
      background-position: -5px -3px;
      background-image: -webkit-radial-gradient(50% 0%, circle, #0A0827 50%, transparent 55%);
      background-image: -moz-radial-gradient(50% 0%, circle, #0A0827 50%, transparent 55%);
      background-image: radial-gradient(circle at 50% 0%, #0A0827 50%, transparent 55%);
    }
    
    
    
    /* Transactions Table CSS */
    
    .table-bg{
    background-color: #0C0A29;
    color: whitesmoke;
    margin-top:5%;
  }
  
  .table-bg td, .table-bg th, .table-bg thead th{
    border: 0;
    padding-left: 2.5em;
    text-align:center;
  }
  
  .table-bg td{
    font-weight:500;
    font-size: 0.9em;
  }
  
  
  .custom-container{
    background-color:#0C0A29;
    padding:0 0 2% 0;
    border-radius: 7px;
    margin-left: 3%;
  }
  
    .custom-col-7{
      flex: 1 0 58.333333%;
      max-width: 100%;
    }
  
  .custom-h6{
    color:whitesmoke; 
    padding: 1em 0 0 1.5em;
    font-size: 1.2em;
  }
  
  .table-custom-stripe>tbody>tr:nth-child(even)>td, 
  .table-custom-stripe>tbody>tr:nth-child(even)>th {
     background-color: rgb(33,35,76);
   }
  .custom-thead{
    color: rgb(36,124,125);
    font-size: 1em;
  }
    
}
  </style>
<?php } ?>

<?php function display_title(){ ?>
  Transactions | IBINEX
<?php } ?>

<?php function display_content(){ ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-4 col-mid" >
        <div class="bordered">
          <div class="text-center btn-group-withdraw">
            <button type="button" class="btn my-btn active" >Withdraw Cryptos</button>
            <button type="button" class="btn my-btn">Withdraw FIAT Currency</button>
          </div>
        <div>
          <p>Available BTC <span style="float:right;">3.00700000 BTC</span></p>
        </div>
        <form>
          <div class="form-group">
            <label for="exampleFormControlSelect1">WITHDRAW CURRENCY</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <!---<span class="input-group-text">$</span>--->
                <img src="https://i0.wp.com/savageio.com/wp-content/uploads/2016/12/bitcoin-logo-gold.png" style="height: calc(2.25rem + 2px); width: 40px;">
                <img src="https://www.ethereum.org/images/logos/ETHEREUM-ICON_Black_small.png" style="height: calc(2.25rem + 2px); width: 40px;" hidden>
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Official_Litecoin_Logo.png" style="height: calc(2.25rem + 2px); width: 40px;" hidden>
                <img src="http://s3.amazonaws.com/lbn-s3/2017/05/29051444/Ripple-anonymous.png" style="height: calc(2.25rem + 2px); width: 40px;" hidden>
              </div>
              <select id="currency" class="form-control" id="exampleFormControlSelect1">
                <option>BTC</option>
                <option>ETH</option>
                <option>LTC</option>
                <option>XRP</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">SEND TO ADDRESS</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">AMOUNT</label>
            <div class="input-group mb-3">
              <input type="text" id="amt" class="form-control" aria-label="Amount (to the nearest dollar)">
              <div class="input-group-append">
                <span class="input-group-text" id="amt-currency" style="background-color: #FFF; border:none;">BTC</span>
              </div>
            </div>
          </div>
        </form>
        </div>
        <div style="background-color:#146CF2; padding: 10px;">
          <div >
            <div class="inline">
              <h5>BLOCKCHAIN FEE</h3>
              <h5>$0.00</h3>
            </div>
            <div class="inline">
              <h5>BTC TO RECEIVE</h3>
              <h5 id="amt-receive">0.0000</h3>
            </div>
          </div>
          <button type="button" class="btn btn-withdraw">Withdraw Cryptos</button>
        </div>
      </div>
      
      
      <div class="custom-col-7 col-7 col-mid  custom-container">
        <h6 class="custom-h6">
          RECENT WITHDRAWALS
        </h6>
      <table class="table table-custom-stripe table-bg">
        <thead class="custom-thead">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Date & Time</th>
            <th scope="col">Description</th>
            <th scope="col">Amount</th>
            <th scope="col">NET Amount</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="custom-tbody">

        </tbody>
      </table>
      </div>
      
    </div>
  </div>

<?php } ?>

<?php function scripts_include(){ ?>
<script>
(function(){
  
  //Populate data
  var data = {
    
    populate: function(size){
      var html = '';
      var x = 0;
      var status = [
        "<td class='text-success'>COMPLETE</td>",
        "<td class='text-warning'>PENDING</td>",
        "<td class='text-danger'>FAILED</td>",
      ];
      
      //var randomStatus = status[Math.floor(Math.random()*status.length)];
      
      for(x=0;x<size;x++){
        html+="<tr>";
        html+="<th scope='row'>Buy</th>";
        html+="<td>Feb 5, 2018, 8:47pm</td>";
        html+="<td>Withdrawal &#579;123</td>";
        html+="<td>	&#36;1,002.85</td>";
        html+="<td> &#36;7,067.51</td>";
        html+=status[Math.floor(Math.random()*status.length)];
        html+="<td> &nbsp;&nbsp;&nbsp;</td>";
        html+="</tr>";
        
      }
      
      $('tbody.custom-tbody').append(html);
    }
  }
  
  
  data.populate(8);
  
  //End
  
  
  
  
  
  $(".btn-group-withdraw .btn").on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
  });
  
  var y = document.getElementById('currency');
  var span = document.getElementById('amt-currency');
  
  $(y).on('change', function(){
    span.textContent = y.value;
  });
  
  var x = document.getElementById('amt');
  x.addEventListener("input",function() {
    document.getElementById('amt-receive').textContent = x.value;
  });
  
   
})()
</script>
<?php } ?>