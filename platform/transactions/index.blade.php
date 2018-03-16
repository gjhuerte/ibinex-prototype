<?php $display_sidebar = true; ?>

<?php function display_title(){ ?> Example Title  <?php } ?>

<?php function styles_include(){ ?>
<style>
  .table-bg{
    background-color: #0C0A29;
    color: whitesmoke;
    margin-top:5%;
  }
  
  .table-bg td, .table-bg th, .table-bg thead th{
    border: 0;
    padding-left: 2.5em;
  }
  
  
  
  .custom-container{
    background-color:#0C0A29;
    padding:0 0 2% 0;
    border-radius: 7px;
  }
  
  .custom-h6{
    color:whitesmoke; 
    padding: 1em 0 0 1.5em;
  }
  
  .table-custom-stripe>tbody>tr:nth-child(even)>td, 
  .table-custom-stripe>tbody>tr:nth-child(even)>th {
     background-color: rgb(33,35,76);
   }
  .custom-thead{
    color: rgb(36,124,125);
    font-size: 0.9em;
  }

</style>
<?php } ?>

<?php function display_content(){ ?>
<div class="container custom-container">
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
    </tr>
  </thead>
  <tbody class="custom-tbody">
    
  </tbody>
</table>
</div>
<?php } ?>

<?php function scripts_include(){ ?>
<script>
$(document).ready(function(){
  
  var data_insert = {
    
    populate: function(size){
      var html = '';
      var x = 0;
      for(x=0;x<size+1;x++){
        html+="
         
        "
      }
    }
  }
  
  
});
</script>
<?php } ?>

<?php require '../../template-bootstrap.blade.php'; ?>