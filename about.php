<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/css/components/slideshow.min.css" />
<style>
    .uk-grid {
        margin-left: 0;
    }
    #banner-title, #banner-content {
        font-family: Verdana, Geneva, sans-serif;
    }
    #media-title, #exec-title-2, #board-title {
        color: #1A1A1A;
        font-family: system-ui;
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
        background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Oakland_Bay_Bridge_Western_Part.jpg/1024px-Oakland_Bay_Bridge_Western_Part.jpg');
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
        font-size: 80%;
        font-weight: 500;
        text-align: justify;
        line-height: 150%;
        padding: 8% 18% 8% 6%;
    }
    
    #ibx-media {
        text-align: center;
    }
    #media-title {
        font-weight: bold;
        padding-top: 8%;
    }   
    #media-cov {
        padding: 5% 15%;
    }   
    .media-logo{
        display:inline-block;
        margin: 0 auto;
        height: 80px;
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
        font-size: 120%;
        font-weight: 600;
    }
    #exec-title-2 {
        width: 50%;
        font-size: 2em;
        font-weight: bold;
        padding-bottom: 1%;
    }
    #exec-desc {
        color: #687C91;
        font-size: 95%;
        text-align: justify;
        display: block;
    }
    #exec-list {
        position: relative;
        min-height: 100%;
        background: rgba(255,0,0,0.5);
        border-radius: 10px;
        margin-top: 3%;
    }
    #exec-slideshow {
        padding-left: 25%;
    }
    a.exec-arrows {
        position: absolute;
        font-size: 200%;
        vertical-align: middle;
        text-decoration: none;
        top: 10%;
    }
    #exec-prev {
        right: 2%;
        margin-right: 3%;
    }
    #exec-next {
        right: 1%;
        margin-left: 3%;
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
        display: block;
        font-size: 80%;
        text-align: justify;
        padding-right: 3%;
    }
    #exec-album{
        height: 200%;
        width: 50%;
        background-color: red;
        position: absolute;
        top: -100%;
        left: 0;
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
        font-weight: bold;
    }
    #board-list {
        min-height: 50vh;
        padding: 2% 15% 5% 15%;;
    }
    .board-members{
        width: 180px;
        margin: 0 1% 2% 0;
        vertical-align: top;
        display: inline-block;
        line-height: 80%;
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
    .board-rank {
        font-size: 80%;
    }
    
    @media only screen and (max-width: 992px) {
        #exec-title-2 {
            width: 100%;
        }
        .exec-half {
            width: 100%;
            margin-left: 0;
        }
        #exec-slideshow {
            padding-left: 2%;
        }
        .exec-item {
            width: 100%;
            margin-left:0;
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
    }
</style>   
<?php } ?>

<?php function display_title(){ ?>
  About Us | IBINEX
<?php } ?>

<?php function display_content(){ ?>
<div id="ibx-banner" class="uk-grid">
    <div id="banner-content" class="uk-width-3-5">
        <h3 id="banner-title">Transparency</h3>
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
    <div id="banner-img" class="uk-width-2-5"></div>
</div>
<div id="ibx-media">
    <h2 id="media-title">Ibinex media coverage</h2>
    <div id="media-cov">
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
        <img src="http://teachersjobworld.com/employer/upload_logo/sample_logo.png" class="media-logo" />
    </div>
</div>
<div id="ibx-team">
    <div id="ibx-exec">
        <div id="exec-team" class="exec-half">
            <h4 id="exec-title-1" class="exec-header">Executive team</h4>
            <h2 id="exec-title-2" class="exec-header">The people behind iBinex.</h2>
            <span id="exec-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat.
            </span>
        </div>
        <div id="exec-list"  data-uk-slideshow="{animation: 'scroll'}">
            <div id="exec-slideshow" class="uk-slidenav-position">
                <ul class="uk-slideshow uk-position-relative uk-visible-toggle uk-light">
                    <li data-slideshow-slide="html">
                        <div class="exec-data exec-item">
                            <h4 class="exec-name exec-header">Matthew Novinski</h4>
                            <h6 class="exec-rank exec-header">Chief Executive Officer</h6>
                            <span class="exec-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in
                            </span>
                            <a href="">Linkedin Profile</a>
                            <a href="">Download CV</a>
                        </div>
                    </li>
                    <li data-slideshow-slide="html">
                        <div class="exec-data exec-item">
                            <h3 class="exec-name exec-header">John Whirlpool</h3>
                            <h5 class="exec-rank exec-header">Chief Executive Officer</h5>
                            <span class="exec-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in
                            </span>
                        </div>
                    </li>
                    <li data-slideshow-slide="html">
                        <div class="exec-data exec-item">
                            <h3 class="exec-name exec-header">Rion Pronelle</h3>
                            <h5 class="exec-rank exec-header">Chief Executive Officer</h5>
                            <span class="exec-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in
                            </span>
                        </div>
                    </li>
                </ul>
                <a id="exec-prev" class="exec-arrows" href="#" data-uk-slideshow-item="previous">🠔</a>
                <a id="exec-next" class="exec-arrows" href="#" data-uk-slideshow-item="next">🠖</a>
<!--                 <div id="exec-album">
                    <img src="http://ascii.jp/elem/000/000/200/200375/%E3%83%8B%E3%83%A3%E3%83%B3%E3%82%B3%E5%85%88%E7%94%9F2_240x.jpg"/>
                </div> -->
            </div>
        </div>
    </div>
    <div id="ibx-board">
        <hr id="ibx-divider"/>
        <h2 id="board-title">Advisory <i>Board</i></h2>
        <div id="board-list">
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Jeremy Corbein</h5>
                <span class="board-rank">Chief of Operational Officer, Deiteriy</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Jimmy Fallon</h5>
                <span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Stephen Colbert</h5>
                <span class="board-rank">Head of Products and Services Development Department XB Software</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Artem Kushik</h5>
                <span class="board-rank">Business Analyst, Credit Agricole CIB</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Jeremy Corbein</h5>
                <span class="board-rank">Chief of Operational Officer, Deiteriy</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Jimmy Fallon</h5>
                <span class="board-rank">Head of Economics Department, Stockholm School of Economics in Riga</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Stephen Colbert</h5>
                <span class="board-rank">Head of Products and Services Development Department XB Software</span>
            </div>
            <div class="board-members">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Official_Portrait_of_President_Donald_Trump.jpg" class="board-img" />
                <h5 class="board-name exec-header">Artem Kushik</h5>
                <span class="board-rank">Business Analyst, Credit Agricole CIB</span>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/js/components/slideshow.min.js"></script>
<script>
(function(){
}())
</script>
<?php } ?>