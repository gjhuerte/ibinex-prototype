<?php require '../../template-bootstrap.blade.php'; ?>

<?php function styles_include(){ ?>
  <style>
    .bordered {
      position: relative;
      border-top: 40px solid lightblue;
      background: #FFF;
      padding-top: 10px;
    }

    .bordered:before {
    }
  </style>
<?php } ?>

<?php function display_title(){ ?>
  Transactions | IBINEX
<?php } ?>

<?php function display_content(){ ?>
<div class="container">
<div class="row">
    <div class="col">
    Lorem Ipsum Dolor Sit Amet
  </div>
<div class="col">
    Lorem Ipsum Dolor Sit Amet
  </div>
  </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>
<?php } ?>