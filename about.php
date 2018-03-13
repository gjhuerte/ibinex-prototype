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
        background-image: url('https://www.hdwallpapers.in/walls/windows_xp_bliss-wide.jpg');
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
    
    #media-title {
        color: #1A1A1A;
        font-weight: bold;
        text-align: center;
        padding-top: 8%;
    }
    
    #media-cov {
        padding: 5% 15%;
        text-align: center;
    }
    
    .media-logo{
        display:inline-block;
        margin: 0 auto;
        height: 80px;
        width: 150px;
    }
    
    
    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        [class*="uk-width-"] {
            width: 100%;
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
    <div id="ibx-exec"></div>
    <div id="ibx-board"></div>
</div>
<?php } ?>

<?php function scripts_include(){ ?>

<?php } ?>