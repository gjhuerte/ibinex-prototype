<<<<<<< HEAD
<?php $display_sidebar = true; ?>
=======
<?php $display_sidebar = true; 
      $current = 'myAccount';
?>
>>>>>>> ed114dcab6e233fa9e6845ea6fae3e02686e37aa

<?php function display_title(){ ?> Account  <?php } ?>

<?php function styles_include(){ ?>
<style>
.another-container{
  display:inline;
}
.ex{
  display:inline-block;
}
.ex p{
  margin: 0;
  font-size: 10px;
  
}

.upgrade{
  display:inline-block;
}
  
.row.row-grid [class*="col-"] + [class*="col-"] {
    margin-top: 15px;
}

@media (min-width: 1200px) {
    .row.row-grid [class*="col-lg-"] + [class*="col-lg-"] {
        margin-top: 0;
    }
}
@media (min-width: 992px) {
    .row.row-grid [class*="col-md-"] + [class*="col-md-"] {
        margin-top: 0;
    }
}
@media (min-width: 768px) {
    .row.row-grid [class*="col-sm-"] + [class*="col-sm-"] {
        margin-top: 0;
    }
}
@media (max-width: 768px) {
  .btn-responsive {
    padding:2px 4px;
    font-size:80%;
    line-height: 1;
    border-radius:3px;
  }
}
  
@media (min-width: 769px) and (max-width: 992px) {
  .btn-responsive {
    padding:2px 5px;
    font-size:70%;
    line-height: 1.2;
  }
}
</style>

<?php } ?>

<?php function display_content(){ ?>
<div class="row" style='width:65%' id='row.row-grid'>
  <div class='col ml-1 mr-3 pb-5' style=' border:1px solid black; background-color:#0A0827'>
    <div class="another-container">
            <p class="text-white">Account Information</p>
       <div class="ex" style="display:inline-block;">
            <p class="text-white">Account Level</p>
            <p class="text-warning">3</p>
       </div>
            <button class="btn btn-info btn-responsive upgrade align-top" style="float:right">Upgrade</button>
    </div>
       <div class="ex" style="display:inline-block;">
           <p class="text-white">NTC AVAILABLE</p>
           <p class="text-warning">3.00700000</p>
       </div>
       <div class="ex" style="display:inline-block; float: right">
           <p class="text-white">USD AVAILABLE</p>
           <p class="text-warning">$ 20,563.20</p>
        </div>
       <div class="ex" style="display:inline-block;">
           <p class="text-white">DASH AVAILABLE</p>
           <p class="text-warning">10.00000000</p>
       </div>
       <div class="ex" style="display:inline-block; float: right">
           <p class="text-white">CTH AVAILABLE</p>
           <p class="text-warning">5.00000000</p>
       </div>
   </div>

 <div class='col mr-3' style='border:1px solid black; background-color:#0A0827'>
    <div class="another-container">
         <p class="text-white">FEE LEVEL AND VOLUME</p>
      <div class="ex" style="display:inline-block;">
            <p class="text-white">COMMISSION RATE (MARKER)</p>
            <p class="text-warning">0.50%</p>
      </div>
      <div class="ex" style="display:inline-block;">
           <p class="text-white">COMMISSION RATE (TOKEN)</p>
           <p class="text-warning">0.50%</p>
      </div>
      <div class="ex" style="display:inline-block;">
           <p class="text-white">30 DAY VOLUME IN USD</p>
           <p class="text-warning">$7.113.01</p>
      </div> 
   </div>

 </div>
</div>
  
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>

<?php require '../../template-bootstrap.blade.php'; ?>

