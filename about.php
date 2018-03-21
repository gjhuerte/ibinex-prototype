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
	
	/*================ IBX BANNER =====================*/
    
    #ibx-banner {
        font-family: "Montserrat";
        box-sizing: border-box;
        display: flex;
		background-color: #152B59;
    }
	#banner-title{
		font-size: 27px;
		color: white;
		font-weight: bold;	
	}	
    #banner-content{
        order: 1;
        width: 55%;
        background-color : #152B59;
        padding: 10.2em 17% 9em 6%;
    }
	#banner-inner {
		margin-top: 30px;
		font-size: 12px;
		line-height: 1.7em;
		color: white;
		font-weight: 450;
		text-align: justify;
    }
    #banner-img{
        order: 0;
        width: 45%;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        background-image: url('./assets/images/about-banner.jpg');
    }
    
	/*================ IBX MEDIA =====================*/
	
    #ibx-media {
		font-family: "Montserrat";
        text-align: center;
    }
    #media-inner {
		padding: 8% 0 2.5% 0;
    }   
    #media-title {
		font-size: 27px;
		color: rgb(26,26,26);
		font-weight: 800;
		text-align: center;
    }
	#media-cov {
		width: 65%;
		margin: auto;
		padding-top: 6em;
	}
    .media-logo{
        display:inline-block;
        margin: 0 auto;
		margin-bottom: 3em;
        height: auto;
        width: 15%;
    }
    
	/*================ EXEC TEAM =====================*/

	
    #ibx-team {
		font-family: "Montserrat";
		background-color : #F5F5F7;
    }
    
    .exec-header {
        margin: 0;
    }
    .exec-half {
        width: 48%;
        margin-left: 52%;
    }
    #ibx-exec {
        padding: 10% 18% 5.9% 18%;
    }   
    #exec-title-1 {
		font-size: 15px;
		line-height: 10px;
		font-weight: 600;
		color: rgb(54,54,54);
    }
    #exec-title-2 {
		display: block;
		width: 200px;
		font-size: 27px;
		line-height: 1.4em;
		letter-spacing: -2px;
		color: rgb(26,26,26);
		font-weight: 800;
    }
    #exec-desc {
        color: rgb(107,124,147);
		line-height: 1.4em;
        text-align: justify;
		font-weight: 600;
        display: block;
		margin-top: 0.5em;
    }
    #exec-list {
        position: relative;
        min-height: 100%;
        margin-top: 2%;
    }
    #exec-slideshow {
		background: white;
        border-radius: 10px;
		width: 80%;
		margin-left: 20%;
    }
    a.exec-arrows {
		color: rgb(59,85,230);
        position: absolute;
        font-size: 200%;
        vertical-align: middle;
        text-decoration: none;
        top: 10%;
    }
    #exec-prev {
        right: 1.5em;
    }
    #exec-next {
        right: 1%;
    }
    .exec-item {
        width: 60%;
        margin-left: 40%;
    }
    .exec-name, .exec-rank {
		color: rgb(26,26,26);
        font-weight: 600;
    }
    .exec-data {
        padding: 1% 0;;
        text-overflow: ellipsis;
    }
    .exec-info {
		color: rgb(107,124,147);
        padding: 2% 0;
		font-size: 0.9rem;
		line-height: 1.5rem;
        display: block;
        text-align: justify;
		font-weight: 600;
        padding-right: 3%;
    }
	.exec-icons svg{
		padding-bottom: 20%;
		color: #4861E2;
	}
	.exec-links{
		font-size: 12px;
		line-height: 1em;
		color: rgb(59,85,230);
		font-family: "Font Awesome", serif;
		font-style: italic;
		text-decoration: underline;
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
        height: 1.5px;
        width: 25%;
        margin: auto;
        color: #99A6EB;
        background-color: #99A6EB;
    }
    
	/*================ ADVISORY BOARD =====================*/

	
    #ibx-board{
        text-align: center;
        margin: auto;
    }
	span.board-mobile-title {
		display: none;
	}
    .board-title {
		font-size: 28px;
		letter-spacing: -2px;
		line-height: 41px;
		color: rgb(26,26,26);
		font-family: "Montserrat";
        font-weight: 800;
		margin: 2% 0 1% 0;
		display: block;
    }
	.board-italic {
		font-family: "Playfair Display";
		font-size: 32px;
		font-style: italic;
		font-weight: 900;
	}
    #board-list {
        padding: 1.5% 15% 8% 15%;;
    }
	#board-box {
		position: relative;
	}
    .board-members{
        width: 21%;
        margin: 0 1% 2% 0;
        vertical-align: top;
        display: inline-block;
		font-size: 12px;
		color: rgb(26,26,26);
    }
	.board-members span{
		display: block;
	}
    .board-img {
        margin: 0 auto;
        height:100%;
        width: 100%;
        padding-bottom: 10%;
    }
    .board-name {
        font-weight: 800;
    }
	.board-rank {
		letter-spacing: 0;
		line-height: 1.1em;
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
            padding:8% 5%;
        }
        #banner-img{
            order: 1;
            width: 100%;
            min-height: 19em;
        }
		#media-cov {
			padding-top: 3em;
			margin: auto;
		}
		.media-logo {
			display: block;
			width: 130px;
		}
        .media-logo:nth-last-child(-n+6) {
            display: none;
        }
		#ibx-exec {
			box-sizing: border-box;
			padding: 10% 15% 5.9% 15%;
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
			font-size: 3.7em;
		}
		#arrow-box {
			width: 100%;
			text-align: center;
		}
		#exec-prev, #exec-next {
			right:0;
		}
		#exec-prev{
			margin-right: 2px;
		}
		#exec-next {
			margin-left: 2px;
		}
		#exec-slideshow {
			width: 100%;
			margin: 0;
			padding-left: 2%;
        }
		#exec-album {
			position: relative;
			width: 80%;
			margin: auto;
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
		span.board-web-title {
			display: none;
		}
		span.board-mobile-title {
			display: block;
			margin-bottom: 1em;
		}
		.board-members {
			margin: 0;
		}
		.board-img {
			width: 60%;
		}
		.board-name{
			font-size: 20px;
    		font-weight: 600;
		}
    }
	@media only screen and (max-width : 460px) {
		#banner-title{
			font-size: 38px;
		}	
		#banner-content{
			padding-top: 3.7em;
		}
		#banner-inner {
			font-size: 15.5px;
			line-height: 1.8em;
		}
		#banner-img {
			-moz-transform: scaleX(-1);
			-o-transform: scaleX(-1);
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1);
			filter: FlipH;
			-ms-filter: "FlipH";
		}
		
		#ibx-media {
			padding-top: 5em;
			padding-bottom: 3em;
		}
		#media-cov {
			padding-top: 2em;
		}
		.media-logo {
			width: 90%;
			margin-bottom: 1em;
		}
		
		#ibx-team {
			padding-top: 1.5em;
		}
		#ibx-exec {
			box-sizing: border-box;
			padding: 0;
		}
		#exec-team {
			width: 90%;
			padding: 0 5%;
		}
		#exec-title-1{
			font-size: 20px;
		}
		#exec-title-2{
			padding: 0.5em 0;
		}
		#exec-list {
			margin-bottom: 25em;
		}
		#exec-album {
			width: 100%;
			margin: 0;
		}
		#exec-slideshow {
			position: absolute;
			top: 75%;
			width: 90%;
			margin: 0 5%;
		}
		#arrow-box {
			z-index: -99;
			margin-top: -1em;
			padding-bottom: 0.5em;
			display: inline-block;
			line-height: 3em;
			overflow: hidden;
		}
		.exec-item {
			width: 84%;
    		margin: 5% 8% 4% 8%;
		}
		.exec-rank {
			font-size: 1em;
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
		span.board-mobile-title {
			margin: 0;
			width: 90%; 
			text-align: left;
			padding-left: 12px;
		}
		#board-box {
			padding-top: 3em;
		}
		#board-list {
			padding: 0 0 4.5em 0;
		}
		.board-members {
			margin: 0;
		}
		.board-img {
			margin: 0;
			width: 100%;
		}
		.board-name{
			font-size: 16px;
    		font-weight: 600;
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
  Ibinex | About Us
<?php } ?>

<?php function display_content(){ ?>
<div id="ibx-banner" class="uk-grid">
    <div id="banner-content" class="uk-width-3-5">
		<div class="uk-scrollspy-inview">
        	<span id="banner-title">Transparency</span>
			<div id="banner-inner">
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
    </div>
    <div id="banner-img" class="uk-width-2-5"></div>
</div>
<div id="ibx-media">
	<div id="media-inner">
		<span id="media-title" class="reveal-up">Ibinex media coverage</span>
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
</div>
<div id="ibx-team">
    <div id="ibx-exec" class="reveal-up">
        <div id="exec-team" class="exec-half reveal-right">
            <span id="exec-title-1" class="exec-header">Executive team</span>
            <span id="exec-title-2" class="exec-header">The people behind iBinex.</span>
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
					<a id="exec-prev" class="exec-arrows" href="#" data-uk-slideshow-item="previous">&#x2190;</a>
					<a id="exec-next" class="exec-arrows" href="#" data-uk-slideshow-item="next">&#x2192;</a>
				</div>
			</div>
		</div>
    </div>
    <div id="ibx-board">
        <hr id="ibx-divider"/>
		<span class="board-title board-web-title reveal-up">Advisory <span class="board-italic">Board</span></span>
        <span class="board-title board-mobile-title reveal-up">Ibinex Advisory Board</span>
		<div id="board-box">
			<div id="board-list">
				<div class="board-members reveal-up">
					<img src="./assets/images/board1.png" class="board-img" />
					<span class="board-name exec-header">Jeremy Corbein</span>
					<span class="board-rank">Chief of Operational Officer, Deiteriy</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board2.png" class="board-img" />
					<span class="board-name exec-header">Jimmy Fallon</span>
					<span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board3.png" class="board-img" />
					<span class="board-name exec-header">Stephen Colbert</span>
					<span class="board-rank">Head of Products and Services Development Department XB Software</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board4.png" class="board-img" />
					<span class="board-name exec-header">Artem Kushik</span>
					<span class="board-rank">Business Analyst, Credit Agricole CIB</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board1.png" class="board-img" />
					<span class="board-name exec-header">Jeremy Corbein</span>
					<span class="board-rank">Chief of Operational Officer, Deiteriy</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board2.png" class="board-img" />
					<span class="board-name exec-header">Jimmy Fallon</span>
					<span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board3.png" class="board-img" />
					<span class="board-name exec-header">Stephen Colbert</span>
					<span class="board-rank">Head of Products and Services Development Department XB Software</span>
				</div>
				<div class="board-members reveal-up">
					<img src="./assets/images/board4.png" class="board-img" />
					<span class="board-name exec-header">Artem Kushik</span>
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
		
		if ($(window).width()<=768) {
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
		window.sr = ScrollReveal({opacity: 0, duration: 800, delay:300});
		
		sr.reveal('.reveal-up');
		
		if ($(window).width()<=450){
			$('#banner-content > div').addClass('uk-animation-slide-top-medium');
			sr.reveal('.fade',{distance:'0'});
		}else{
			$('#banner-content > div').addClass('uk-animation-slide-right-medium');
			sr.reveal('.reveal-left',{origin: 'left', distance:'200px'});
			sr.reveal('.reveal-right',{origin: 'right', distance:'200px'});
		}
		
	})
}())
</script>
<?php } ?>