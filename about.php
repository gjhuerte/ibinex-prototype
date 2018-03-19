<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<style>
    .uk-grid {
        margin-left: 0;
    }
	.slick-slide {
		outline: none
	}
    #banner-title, #banner-content {
        font-family: Verdana, Geneva, sans-serif;
    }
    #media-title, #exec-title-2, #board-title {
		font-family: Arial, sans-serif;
		color: #1A1A1A;
    }
    
    #ibx-banner {
        box-sizing: border-box;
        min-height : 50vh;
        display: flex;
    }
    #banner-img{
        order: 0;
        width: 45%;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        background-image: url('./assets/images/about-banner.jpg');
    }
    #banner-title {
        color:white;
        font-weight: bold;
    }
    #banner-content{
        order: 1;
        width: 55%;
        background-color : #112B56;
        color: white;
        font-weight: 500;
        text-align: justify;
        line-height: 150%;
        padding: 8em 18% 8em 6%;
    }
    
    #ibx-media {
        text-align: center;
    }
    #media-title {
        font-weight: 800;
		margin: 0;
        padding-top: 8%;
    }   
    #media-cov {
        padding: 5% 15%;
    }   
    .media-logo{
        display:inline-block;
        margin: 0 auto;
        height: auto;
        width: 150px;
    }
    
    #ibx-team {
        color: #1A1A1A;
        background-color : #F6F6F8;
    }
    
    .exec-header {
        margin: 0;
    }
    .exec-half {
        width: 50%;
        margin-left: 50%;
    }
    #ibx-exec {
        min-height: 50vh;
        padding: 8% 15%;
    }   
    #exec-title-1 {
        font-weight: 600;
    }
    #exec-title-2 {
        width: 50%;
        font-weight: 900;
        padding-bottom: 1%;
    }
    #exec-desc {
        color: #687C91;
		line-height: 1em;
        text-align: justify;
        display: block;
    }
    #exec-list {
        position: relative;
        min-height: 100%;
        margin-top: 3%;
    }
    #exec-slideshow {
        padding-left: 25%;
		background: white;
        border-radius: 10px;
    }
    a.exec-arrows {
        position: absolute;
        font-size: 200%;
        vertical-align: middle;
        text-decoration: none;
        top: 10%;
    }
    #exec-prev {
        right: 5%;
    }
    #exec-next {
        right: 1%;
    }
    .exec-item {
        width: 67%;
        margin-left: 33%;
    }
    .exec-name, .exec-rank {
        font-weight: bold;
    }
    .exec-data {
        padding: 1% 0;;
        text-overflow: ellipsis;
    }
    .exec-info {
        padding: 2% 0;
		font-size: 1rem;
        display: block;
        text-align: justify;
        padding-right: 3%;
    }
	.exec-icons svg{
		padding-bottom: 20%;
		color: #4861E2;
	}
	.exec-links{
		font-style: italic;
		text-decoration: underline;
		color: #4861E2;
	}
    #exec-album{
        height: 200%;
        width: 50%;
        position: absolute;
        top: -100%;
        left: 0;
		z-index: 999;
    }
	#exec-images {
		position: relative;
		height: 100%;
	}
	.exec-img {
		position: absolute;
		margin: auto;
		height: 22em;
		width: 25em;
		z-index: -999;
	}
	.exec-img:nth-child(1){
		z-index: 3;
		bottom: 15%;
		right: 28%;
	}
	.exec-img:nth-child(2){
		z-index: 2;
		bottom: 5%;
		right: 20%;
		opacity: 0.7;
	}
	.exec-img:nth-child(3){
		z-index: 1;
		bottom: 25%;
		right: 10%;
		opacity: 0.7;
	}
    
    #ibx-divider {
        border: none;
        height: 2px;
        width: 30%;
        margin: auto;
        color: #99A6EB;
        background-color: #99A6EB;
    }
    
    #ibx-board{
        text-align: center;
        margin: auto;
        min-height: 40vh;
    }
    #board-title {
        font-weight: 800;
    }
	#board-title i {
		font-family: "Playfair Display", sans-serif;
	}
    #board-list {
        min-height: 50vh;
        padding: 2% 15% 5% 15%;;
    }
	#board-box {
		position: relative;
	}
    .board-members{
        width: 180px;
        margin: 0 1% 2% 0;
        vertical-align: top;
        display: inline-block;
    }
    .board-img {
        margin: 0 auto;
        height:230px;
        width: 180px;
        padding-bottom: 10%;
    }
    .board-name {
        font-weight: bold;
    }

	#board-arrow-box {
	}
	a.board-arrows{
		position: absolute;
		color: white;
		background-color: rgba(0,0,0,0.5);
		top: 35%;
	}
	#board-next {
		right: 0;
	}
	#board-prev {
		left: 0;
	}
    
	@media only screen and (max-width: 992px) {
		#exec-title-2 {
			width: 100%;
		}
	}
	@media only screen and (max-device-width : 430px) {
		#ibx-exec {
			box-sizing: border-box;
			padding: 0;
		}
		#exec-team {
			width: 90%;
			padding: 0 5%;
		}
		#exec-list {
			margin-bottom: 25em;
		}
		#exec-slideshow {
			position: absolute;
			top: 90%;
			width: 90%;
			margin: 0 5%;
		}
		.exec-img {
			height: 20em;
		}
		.exec-info {
			font-size: 70%;
		}
		.exec-links {
			font-size: 80%;
		}
		#board-list {
			padding: 0 0 10% 0;
		}
		.board-members {
			margin: 0;
		}
		.board-img {
			margin: 0;
			width: 100%;
			height: 70vh;
		}
	}
    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        [class*="uk-width-"] {
            width: 100%;
        }
        #banner-title {
            text-align: center;
        }
        #banner-content{
            order: 0;
            width: 100%;
            padding:2% 5%;
        }
        #banner-img{
            order: 1;
            width: 100%;
            min-height: 20em;
        }
        .media-logo:nth-last-child(-n+6) {
            display: none;
        }        
        #ibx-divider {
            display: none;
        }
		.exec-item {
            width: 100%;
            margin-left:0;
        }
		a.exec-arrows {
			position: relative;
		}
		#arrow-box {
			width: 100%;
			text-align: center;
		}
		#exec-slideshow {
			padding-left: 2%;
        }
		#exec-album {
			position: relative;
			width: 100%;
			z-index: 0;
		}
		.exec-img {
			position: relative;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}
		.exec-half {
            width: 100%;
            margin-left: 0;
        }
		.board-members {
			margin: 0;
		}
    }
	
	.exec-animate-1-2 {
    	animation: exec-image-1-2 0.3s forwards;
    	-webkit-animation: exec-image-1-2 0.3s forwards;
	}
	.exec-animate-2-1 {
		animation: exec-image-1-2 0.3s reverse forwards;
		-webkit-animation: exec-image-1-2 0.3s reverse forwards;
	}
	.exec-animate-2-3 {
    	animation: exec-image-2-3 0.3s forwards;
    	-webkit-animation: exec-image-2-3 0.3s forwards;
	}
	.exec-animate-3-2 {
		animation: exec-image-2-3 0.3s reverse forwards;
		-webkit-animation: exec-image-2-3 0.3s reverse forwards;
	}
	.exec-animate-1-3 {
    	animation: exec-image-1-last 0.3s forwards;
    	-webkit-animation: exec-image-1-last 0.3s forwards;
	}
	.exec-animate-3-1 {
		animation: exec-image-1-last 0.3s reverse forwards;
		-webkit-animation: exec-image-1-last 0.3s reverse forwards;
	}
		
	@keyframes exec-image-1-2 {
		0% { 
			z-index: 3;
			bottom: 15%;
			right: 28%;
			opacity: 1;
		}
		100% {
			z-index: 2;
			bottom: 5%;
			right: 20%;
			opacity: 0.7;
		}
	}
	@-webkit-keyframes exec-image-1-2 {
		0% { 
			z-index: 3;
			bottom: 15%;
			right: 28%;
			opacity: 1;
		}
		100% {
			z-index: 2;
			bottom: 5%;
			right: 20%;
			opacity: 0.7;
		}
	}
	@keyframes exec-image-2-3 {
		0% { 
			z-index: 2;
			bottom: 5%;
			right: 20%;
			opacity: 0.7;
		}
		100% {
			z-index: 1;
			bottom: 25%;
			right: 10%;
			opacity: 0.7;
		}
	}
	@-webkit-keyframes exec-image-2-3 {
		0% { 
			z-index: 2;
			bottom: 5%;
			right: 20%;
			opacity: 0.7;
		}
		100% {
			z-index: 1;
			bottom: 25%;
			right: 10%;
			opacity: 0.7;
		}
	}
	@keyframes exec-image-1-last {
		0% { 
			z-index: 3;
			bottom: 15%;
			right: 28%;
			opacity: 1;
		}
		50% {
			opacity: 0.3;
			z-index: 0;
		}
		100% {
			z-index: 1;
			bottom: 25%;
			right: 10%;
			opacity: 0.7;
		}
	}
	@-webkit-keyframes exec-image-1-last {
		0% { 
			z-index: 3;
			bottom: 15%;
			right: 28%;
			opacity: 1;
		}
		50% {
			opacity: 0.3;
			z-index: 0;
		}
		100% {
			z-index: 1;
			bottom: 25%;
			right: 10%;
			opacity: 0.7;
		}
	}
</style>   
<?php } ?>

<?php function display_title(){ ?>
  About Us | IBINEX
<?php } ?>

<?php function display_content(){ ?>
<div id="ibx-banner" class="uk-grid">
    <div id="banner-content" class="uk-width-3-5">
		<div class="uk-scrollspy-inview">
        	<h2 id="banner-title">Transparency</h2>
			<p>
				Ibinex is a collaboration of pioneers. With decades of combined experience within the finance, 
				technology, cyber security and SaaS worlds, today we are proud to work with over 60 of the leading
				exchanges for hundreds of cryptocurrencies.
			</p>
			<p>
				We channel our extensive industry knowledge and vision into the live and developing cryptocurrency 
				arena, to provide you with premium solutions for you to create tailored exchange platforms with our 
				seasoned experience as your competitive edge.
			</p>
			<p>
				We are trusted by thousands of customers world-wide daily as their white-label exchange platform, and 
				pride ourselves on exhibiting the very highest standards of transparency and professionalism.
			</p>
			<p>
				Ibinex is defined by our dedication to unifying trading standards in the cryptocurrency world, increasing 
				accountability, integrity and excellence in service.
			</p>
		</div>
    </div>
    <div id="banner-img" class="uk-width-2-5"></div>
</div>
<div id="ibx-media">
    <h2 id="media-title" class="reveal-up">Ibinex media coverage</h2>
    <div id="media-cov">
        <img src="./assets/images/media1.png" class="media-logo reveal-up" />
        <img src="./assets/images/media2.png" class="media-logo reveal-up" />
        <img src="./assets/images/media3.png" class="media-logo reveal-up" />
        <img src="./assets/images/media4.png" class="media-logo reveal-up" />
        <img src="./assets/images/media5.png" class="media-logo reveal-up" />
        <img src="./assets/images/media6.png" class="media-logo reveal-up" />
        <img src="./assets/images/media7.png" class="media-logo reveal-up" />
        <img src="./assets/images/media8.png" class="media-logo reveal-up" />
        <img src="./assets/images/media9.png" class="media-logo reveal-up" />
        <img src="./assets/images/media10.png" class="media-logo reveal-up" />
        <img src="./assets/images/media11.png" class="media-logo reveal-up" />
        <img src="./assets/images/media12.png" class="media-logo reveal-up" />
    </div>
</div>
<div id="ibx-team">
    <div id="ibx-exec">
        <div id="exec-team" class="exec-half reveal-right">
            <h4 id="exec-title-1" class="exec-header">Executive team</h4>
            <h2 id="exec-title-2" class="exec-header">The people behind iBinex.</h2>
            <span id="exec-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat.
            </span>
        </div>
		<div id="exec-list">
			<div id="exec-album" class="reveal-left">
				<div id="exec-images">
					<img class="exec-img exec-cards" src="./assets/images/exec1.png"/>
					<img class="exec-img exec-cards" src="./assets/images/exec2.png"/>
					<img class="exec-img exec-cards" src="./assets/images/exec3.png"/>
				</div>
			</div>
            <div id="exec-slideshow" class="reveal-right">
				<div class="exec-div-slick slick-track">
					<div>
						<div class="exec-data exec-item">
							<h3 class="exec-name exec-header">Matthew Novinski</h3>
							<h6 class="exec-rank exec-header">Chief Executive Officer</h6>
							<span class="exec-info">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in
							</span>
							<span class="exec-icons" uk-icon="icon: linkedin; ratio: 0.8"></span>
							<a class="exec-links" href="">Linkedin Profile</a>
							<span class="exec-icons" uk-icon="icon: copy; ratio: 0.8"></span>
							<a class="exec-links" href="">Download CV</a>
						</div>
					</div>
					<div>
						<div class="exec-data exec-item">
							<h3 class="exec-name exec-header">John Whirlpool</h3>
							<h6 class="exec-rank exec-header">Chief Executive Officer</h6>
							<span class="exec-info">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in
							</span>
							<span class="exec-icons" uk-icon="icon: linkedin; ratio: 0.8"></span>
							<a class="exec-links" href="">Linkedin Profile</a>
							<span class="exec-icons" uk-icon="icon: copy; ratio: 0.8"></span>
							<a class="exec-links" href="">Download CV</a>
						</div>
					</div>
					<div>
						<div class="exec-data exec-item">
							<h3 class="exec-name exec-header">Rion Pronelle</h3>
							<h6 class="exec-rank exec-header">Chief Executive Officer</h6>
							<span class="exec-info">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
								ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
								laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
								voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in
							</span>
							<span class="exec-icons" uk-icon="icon: linkedin; ratio: 0.8"></span>
							<a class="exec-links" href="">Linkedin Profile</a>
							<span class="exec-icons" uk-icon="icon: copy; ratio: 0.8"></span>
							<a class="exec-links" href="">Download CV</a>
						</div>
					</div>
				</div>
				<div id="arrow-box">
					<a id="exec-prev" class="exec-arrows" href="#" data-uk-slideshow-item="previous">🠔</a>
					<a id="exec-next" class="exec-arrows" href="#" data-uk-slideshow-item="next">🠖</a>
				</div>
			</div>
		</div>
    </div>
    <div id="ibx-board">
        <hr id="ibx-divider"/>
        <h2 id="board-title" class="reveal-up">Advisory <i>Board</i></h2>
		<div id="board-box">
			<div id="board-list">
				<div class="board-members reveal-up">
					<img src="./assets/images/board1.png" class="board-img" />
					<h5 class="board-name exec-header">Jeremy Corbein</h5>
					<span class="board-rank">Chief of Operational Officer, Deiteriy</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board2.png" class="board-img" />
					<h5 class="board-name exec-header">Jimmy Fallon</h5>
					<span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board3.png" class="board-img" />
					<h5 class="board-name exec-header">Stephen Colbert</h5>
					<span class="board-rank">Head of Products and Services Development Department XB Software</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board4.png" class="board-img" />
					<h5 class="board-name exec-header">Artem Kushik</h5>
					<span class="board-rank">Business Analyst, Credit Agricole CIB</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board1.png" class="board-img" />
					<h5 class="board-name exec-header">Jeremy Corbein</h5>
					<span class="board-rank">Chief of Operational Officer, Deiteriy</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board2.png" class="board-img" />
					<h5 class="board-name exec-header">Jimmy Fallon</h5>
					<span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board3.png" class="board-img" />
					<h5 class="board-name exec-header">Stephen Colbert</h5>
					<span class="board-rank">Head of Products and Services Development Department XB Software</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board4.png" class="board-img" />
					<h5 class="board-name exec-header">Artem Kushik</h5>
					<span class="board-rank">Business Analyst, Credit Agricole CIB</span>
				</div>
			</div>
			<div id="board-arrow-box">
				<a id="board-prev" class="board-arrows" href="#" uk-icon="icon: chevron-left; ratio: 2"></a>
				<a id="board-next" class="board-arrows" href="#" uk-icon="icon: chevron-right; ratio: 2"></a>
			</div>
		</div>
    </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
(function(){
	var exec_index 	= 0,
		exec_cards	= $('.exec-cards'),
		exec_clone	= $('#exec-images').clone(),
		exec_len	= exec_cards.length,
		last_arrow 	= "";
	
	function getCardSiblings(index){
		return {
			curr : index,
			next : (exec_index+1) % (exec_len),
			last : (exec_index+2) % (exec_len),
		};
	}
	
	function removeAnimateClass(){
		exec_cards.removeClass (function (index, className) {
			return (className.match (/(^|\s)exec-animate-\S+/g) || []).join(' ');
		});
	}
	
	function resetExecImages(){
		if ($(window).width()<768){
			removeAnimateClass();
		}else{
			$('#exec-images').replaceWith(exec_clone.clone());
			exec_cards	= $('.exec-cards')
		}
	}
	
	function nextAnimate(){
		let cards = getCardSiblings(exec_index);
		
		resetExecImages();
		
		exec_cards.eq(cards.curr).addClass('exec-animate-1-3');
		exec_cards.eq(cards.next).addClass('exec-animate-2-1');
		exec_cards.eq(cards.last).addClass('exec-animate-3-2');
		
		exec_index = (exec_index+1) % (exec_len);
	}
	
	function prevAnimate(){
		let cards = getCardSiblings(exec_index);
		
		resetExecImages();

		exec_cards.eq(cards.curr).addClass('exec-animate-1-2');
		exec_cards.eq(cards.next).addClass('exec-animate-2-3');
		exec_cards.eq(cards.last).addClass('exec-animate-3-1');

		exec_index = exec_index==0 ? exec_len-1 : exec_index-1;	
	}
	
	function windowHandler(){
		var window_flag = false;
		
		if ($(window).width()<768) {
			if(window_flag) return;
			window_flag = true;
			try{
				$('#board-arrow-box').show();
				$('#exec-images').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					fade: true,
					draggable: false,
					swipe: false,
					asNavFor: '.exec-div-slick'
				});

				$('.board-members').removeClass('reveal-up');
				$('#board-list').addClass('reveal-up');
				
				$('#board-list').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: $('#board-prev'),
					nextArrow: $('#board-next'),
				});
			}catch(err){}
		}else {
			window_flag = false;
			try{
				$('#board-arrow-box').hide();
				$('#board-list').removeClass('reveal-up');
				$('.board-members').addClass('reveal-up');
				$('#exec-images').slick('unslick');
				$('#board-list').slick('unslick');
			}catch(err){}
		}
	}
	
	$('#exec-next').click(nextAnimate);
	$('#exec-prev').click(prevAnimate);
	
	$('.exec-div-slick').slick({
		prevArrow: $('#exec-prev'),
		nextArrow: $('#exec-next'),
		draggable: false,
		swipe: false
	});
	
	$(window).resize(function(){
		windowHandler();
  	});
	
	windowHandler();
	
	$(window).on("load", function(){
		$('#banner-content > div').addClass('uk-animation-slide-right-medium')
		window.sr = ScrollReveal({opacity: 0, duration: 800, delay:300});
         sr.reveal('.reveal-up');
         sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
         sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
         sr.reveal('.fade',{distance:'0'});
	})
}())
</script>
<?php } ?>