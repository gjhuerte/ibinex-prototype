<?php require '../../template-bootstrap.blade.php'; ?>

<?php function display_title(){ ?> Dashboard  <?php } ?>

<?php function styles_include(){ ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
  <style type="text/css">
    #main-body{
      grid-template-columns: none;
    }
    .section-1,.section-2 {
      color: #fff;
      font-size:11px;
    }
    .col{
      
    }
    .panel{
      background-color:#0A0928;
/*       border: 1px solid #0D112E; */
      border-radius:3px;
      padding:0;
    }
    
    .text-mint-green{
      color:#338F68;
    }
    .float-right{
      float:right;
    }
    .text-light-blue{
      color:#537986;
    }
    #table-bid, 
    #table-trades,
    #table-open-orders{
      min-width:100%;
      font-size: 9px;
      padding:4px;
    }
    #table-bid th, #table-bid td, 
    #table-trades th, #table-trades td, 
    #table-open-orders th,#table-open-orders td{
      padding:5px;
      border:0 !important;
    }
    
    
    #table-bid .even, #table-trades .even,
    #table-open-orders .even, #table-open-orders .even
    {
      background-color:#20244A;
    }
    
    #order-book p{
      padding:5px;
    }
    
    .amount{
      font-size:14px;
    }
    .text-red{
     color:#94273C;
    }
    .nav-item{
      background-color:transparent;
      color: #fff;
    }
    
    .nav-item:hover{
      font-weight:bolder;
    }
    .nav-link:hover{
      color: #fff !important;
    }
    .nav-link{
      border-radius:0;
      font-size:11px;
      color: #fff;
    }
    
    .nav-link.active{
      border-radius:0;
      background-color:#000!important;
      color: #fff;
    }
  </style>
<?php } ?>

<?php function display_content(){ ?>

<div class="container-fluid pl-0 pr-0">
  <div class="row section-1 mr-0 ml-0">
    <div class="col panel ml-4 mr-3"  style="max-width:20%">col 1</div>
    <div class="col panel mr-3" style="max-width:20%" id="order-book">
      <p class="text-uppercase mb-1">ORDER BOOK</p>
      
      <p class=" text-left ">
        <span class="text-mint-green text-uppercase font-weight-bold">BID</span>
        <span class="float-right">BTC available 289.78116765</span>
      </p>
      <table class="table text-center" id='table-bid'>
        <thead class="text-light-blue">
          <tr>
            <th>Price</th>
            <th>Amount</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
          <?php
            for($i=1;$i<=5;$i++){
              ?>
               <tr class="<?php echo ($i%2 == 0) ? "even" : "odd";?>">
                <td>$ 415.70</td>
                <td>0.00000000</td>
                <td>$ 32.41</td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
      
      <p class="text-mint-green amount text-center font-weight-bold">$8085.00 <span class="oi oi-caret-top"></span></p>
      
      <p class=" text-left ">
        <span class="text-red text-uppercase font-weight-bold">ASK</span>
        <span class="float-right">BTC available 314.1560000</span>
      </p>
      <table class="table text-center" id='table-bid'>
        <thead class="text-red">
          <tr>
            <th>Price</th>
            <th>Amount</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
           <?php
            for($i=1;$i<=5;$i++){
              ?>
               <tr class="<?php echo ($i%2 == 0) ? "even" : "odd";?>">
                <td>$ 415.70</td>
                <td>0.00000000</td>
                <td>$ 32.41</td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
    <div class="col mr-4" style="max-width:60%">
        <div class="row">
          <div class="col panel mr-3" style="max-width:62%">col 3</div>
          <div class="col panel" style="max-width:38%" id="recent-trades">
            
            <p class="text-uppercase mb-1">RECENT TRADES</p>


            <table class="table text-center" id='table-trades'>
              <tbody class='font-weight-bold'>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-red'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>
                <tr class='text-mint-green'>
                  <td>1166.76</td>
                  <td>0.00000000</td>
                  <td>1427.34</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col panel"  >row  2</div>
        </div>
    </div>
  </div>
  <div class="row section-2 mt-4 mr-0 ml-0">
    <div class="col panel ml-4 mr-4"  style="max-width:70%" >
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active text-uppercase" data-toggle="pill" href="#open-orders">Open Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" data-toggle="pill" href="#transactions">Transactions</a>
          </li>
        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="open-orders">
               <table class="table text-center" id='table-open-orders'>
                  <thead class="text-light-blue">
                    <tr>
                      <th>Type</th>
                      <th>Date & Time</th>
                      <th>Amount</th>
                      <th>Value</th>
                      <th>Price</th>
                      <th>Fee</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      for($i=1;$i<=11;$i++){
                        ?>
                         <tr class="<?php echo ($i%2 == 0) ? "even" : "odd";?>">
                           <td>Buy</td>
                           <td>Feb 20, 2011 8:42 pm</td>
                           <td>0.233300000</td>
                           <td>$1,683.85</td>
                           <td>$3,067.85</td>
                           <td>$3.72</td>
                        </tr>
                        <?php
                      }
                    ?>


                  </tbody>
                </table>
          </div>
          <div class="tab-pane container" id="transactions">Transactions</div>
        </div>
    </div>
    <div class="col panel mr-4" style="max-width:30%">
    </div>
  </div>
</div>


<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

