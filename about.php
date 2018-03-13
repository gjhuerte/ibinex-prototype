<?php require 'template.php'; ?>

<?php function styles_include(){ ?>
<style>
    .uk-grid {
        margin-left: 0;
    }
    #ibx-banner {
        box-sizing: border-box;
        min-height : 50vh;
        display: flex;
    }
    #banner-img{
        order: 0;
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
        background-color : #112B56;
        color: white;
        text-align: justify;
        padding: 8% 18% 8% 6%;
    }
    
    #ibx-media {
        text-align: center;
    }
    #media-title {
        color: #1A1A1A;
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
        background: rgba(255,0,0,0.5);
        border-radius: 10px;
        margin-top: 3%;
    }
/*     #exec-item {
        height: 80%;
        min-height: 30vh;
    }
    .exec-data {
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .exec-info {
        display: inline-block;
        text-align: justify;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-right: 3%;
    } */
    
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
        min-height: 50em;
        padding: 2% 15% 0 15%;;
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
            padding:2% 5%;
        }
        #banner-img{
            order: 1;
            min-height: 20em;
        }
        .media-logo:nth-last-child(-n+6) {
            display: none;
        }
        .exec-half {
            width: 100%;
            margin-left: 0;
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
<!--         <div id="exec-list" class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="">
                <ul id="exec-item" class="uk-slideshow-items" style="height:100%">
                    <li>
                        <div class="exec-data exec-half">
                            <h3 class="exec-name exec-header">Matthew Novinski</h3>
                            <h5 class="exec-rank exec-header">Chief Executive Officer</h5>
                            <span class="exec-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="exec-data exec-half">
                            <h3 class="exec-name exec-header">John Whirlpool</h3>
                            <h5 class="exec-rank exec-header">Chief Executive Officer</h5>
                            <span class="exec-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="exec-data exec-half">
                            <h3 class="exec-name exec-header">Rion Pronelle</h3>
                            <h5 class="exec-rank exec-header">Chief Executive Officer</h5>
                            <span class="exec-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </span>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-top-right uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-top-right uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div> -->
<!--             <div class="uk-slidenav-position" data-uk-slideshow="">
                <ul class="uk-slideshow">
                    <li data-uk-slideshow-item="0">
                      <img src="https://download.unsplash.com/photo-1414446483597-8d8f792bfe39">
                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                        <div class="caption">
                          <h3>Example 1</h3>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                      </div>
                    </li>
                    <li data-uk-slideshow-item="1">
                      <img src="https://download.unsplash.com/photo-1417870839255-a23faa90c6b0">
                      <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                        <div class="caption">
                          <h3>Example 2</h3>
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                      </div>
                    </li>
                    <li data-uk-slideshow-item="2">
                  <img src="https://unsplash.com/photos/34mvN5nt1ls/download">
                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                    <div class="caption">
                      <h3>Example 3</h3>
                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                    </div>
                  </div>
                </li>
                </ul>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            </div> -->
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
<?php } ?>