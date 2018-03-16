<?php $display_sidebar = true; ?>
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
    
    .btn-group-withdraw{
      padding: 10px 0;
    }
    
    .btn{
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
            <button type="button" class="btn active" >Withdraw Cryptos</button>
            <button type="button" class="btn">Withdraw FIAT Currency</button>
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
                <img src="https://image.freepik.com/free-vector/modern-yellow-bitcoin-design_1017-9631.jpg" style="height: calc(2.25rem + 2px); width: 40px;">
              </div>
              <select class="form-control" id="exampleFormControlSelect1">
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
                <span class="input-group-text" style="background-color: #FFF; border:none;">BTC</span>
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
              <h5>0.0000</h3>
            </div>
          </div>
          <button type="button" class="btn btn-withdraw">Withdraw Cryptos</button>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<?php function scripts_include(){ ?>
<script>
(function(){
  $(".btn-group-withdraw .btn").on('click', function(){
    $(this).siblings().removeClass('active')
    $(this).addClass('active');
  })
  
  var x = document.getElementById('#amt')
  x.addEventListener("onfocus",function(){alert('hi')});
})()
</script>
<?php } ?>