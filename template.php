<!DOCTYPE html>
<html>
	<head>
	<!-- usage of special character -->
	<meta charset="utf-8">
	<!-- This is a mobile application -->
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximum-scale="1.0">
	<!-- Use for Internet Exploer -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
	<title><?php display_title(); ?></title>
	<!-- import UIKIT cdn css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
	<!-- import jquery -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- import uikit js -->
  <script src="assets/js/uikit.min.js"></script>
  <script src="assets/js/uikit-icons.min.js"></script>
  <!-- Font Awesome -->
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<!-- For CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
   <?php styles_include() ?>
	</head>
  <body>
    <?php require 'layouts/nav.blade.php'; ?>
    <?php display_content(); ?>
    <?php require 'layouts/footer.blade.php'; ?>
    
		<script type="text/javascript">
			$(document).ready(function(){			
				
				$('.uk-navbar-nav > li').on({
					mouseenter: function () {
							setTimeout(function(){
								$(this).addClass('uk-animation-scale-up')
							}, 1000)
					},
					mouseleave: function () {
							setTimeout(function(){
								$(this).removeClass('uk-animation-scale-up')
							}, 1000)
								 
					}
				})

			})
		</script>
		
    <?php scripts_include() ?>
		
	</body>
</html>