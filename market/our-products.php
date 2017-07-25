<?php
require 'header.html';
$sql = "SELECT * FROM produits";
$products = $db->query($sql);
?>


<body class="cssAnimate">


<main>

<div class="container">
    <div class="ct-breadcrumbs-container">
        <div class="ct-breadcrumbs ct-js-breadcrumbs" data-bg-image="assets/images/demo-content/walnuts.jpg" data-bg-scratchImage="assets/images/scratch.png" data-height="260">
            <div class="ct-breadcrumbs-title">
                Fresh Products
            </div>
        </div>

        <ol class="breadcrumb  ">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Our Products</li>
        </ol>
    </div>
</div>


<div class="container">
    <div class="ct-gallery-filters">
        <div class="ct-gallery-filters-decoration"></div>
        <ul class="ct-gallery-filters-list list-unstyled list-inline">
            <li>
                <a href="#" class="btn btn-motive btn-sm ct-btn-rounded ct-btn-transparent ct-hover--outlineOut" data-filter="*"><span>new ones</span></a>
            </li>

            <li>
                <a href="#" class="btn btn-motive btn-sm ct-btn-rounded ct-btn-transparent ct-hover--outlineOut" data-filter=".saladsGreens"><span>salads + greens</span></a>
            </li>

            <li>
                <a href="#" class="btn btn-motive btn-sm ct-btn-rounded ct-btn-transparent ct-hover--outlineOut" data-filter=".fresh"><span>fresh</span></a>
            </li>

            <li>
                <a href="#" class="btn btn-motive btn-sm ct-btn-rounded ct-btn-transparent ct-hover--outlineOut" data-filter=".frozen"><span>frozen</span></a>
            </li>

            <li>
                <a href="#" class="btn btn-motive btn-sm ct-btn-rounded ct-btn-transparent ct-hover--outlineOut" data-filter=".dried"><span>dried</span></a>
            </li>
        </ul>
    </div>
</div>


<section>
<div class="container">
<div class="ct-gallery ct-portfolio-container ct-portfolio-masonry ct-portfolio-masonry--col3">
    
<?php foreach($products as $product):?>
    <article class="ct-gallery-item ct-portfolio-item fresh">

        <div class="ct-portfolio-item-outer">
            <div class="ct-portfolio-item-media">
                <figure>
                    <a href="single-product.html"><img src="../forms/produits/<?=$product->nom_prod;?>/<?=$product->nom_prod;?>1.jpg" alt=""/></a>
                </figure>
            </div>

            <div class="ct-portfolio-item-wrapper">
                <div class="ct-portfolio-item-inner">
                    <section>
                        <div class="ct-portfolio-item-title">
                            <a href="single-product.html">
                                <h6><span>Bunch Of Radishes In A Wooden Box</span></h6>
                            </a>
                        </div>

                        <div class="text-center">
                            <a href="single-product.php?nomprod=<?=$product->nom_prod?>" class="btn ct-btn-image btn-warning"><span><i class="fa fa-book"></i> Read More</span></a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </article>
<?php endforeach ?>



</div>
</div>
</section>

<div class="container ct-u-marginTop10 ct-u-marginBottom10">
    <div class="ct-divider ct-divider--big"></div>
</div>

<div class="ct-pagination text-center ct-u-marginBottom80">
    <ul class="list-unstyled list-inline">
        <li>
            <a href="#" class="active">1</a>
        </li>
        <li>
            <a href="#">2</a>
        </li>
        <li>
            <a href="#">3</a>
        </li>
        <li>
            <a href="#">4</a>
        </li>
    </ul>
</div>

<section class="ct-mediaSection ct-u-marginBottom90" data-stellar-background-ratio="0.2" data-height="340" data-type="parallax" data-bg-image="assets/images/demo-content/parallaxBG.jpg" data-bg-image-mobile="assets/images/demo-content/parallaxBG.jpg">
    <div class="ct-mediaSection-inner">
        <div class="container">
            <div class="ct-newsletter">
                <div class="text-center">
                    <header>
                        <h2><span class="ct-u-colorBrownDark ct-u-ff--2 text-lowercase"><span class="ct-u-colorMotive text-capitalize">Why We Love Us?</span> Subscribe To Us!</span></h2>
                        <h6><span class="ct-u-colorGray ct-u-ff--1">We are developing the most innovative, nutritious, free-form and organic foods ever. The futre of health food is right here.</span></h6>
                    </header>
                </div>


                <div class="successMessage alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> Congratulation, mission success
                </div>

                <div class="errorMessage alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Danger!</strong> You did something wrong
                </div>

                <form class="validateIt" role="form" action="http://farmfresh.html.themeplayers.net/assets/form/send.php" method="POST">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="sr-only" for="newsletter-email">Your Email Address</label>
                                <input type="email" class="form-control ct-input--type1" id="newsletter-email" placeholder="Your Email Address" required="" name="field[]">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-block ct-btn-default btn-default"><span>Subscribe Today</span></button>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /container -->
    </div>
</section>


<section class="container">
    <h3 class="ct-headline text-center ct-u-marginBottom50">
                <span class="ct-headline-container ct-u-colorMotive">
                    <span class="ct-headline-line ct-headline-line--left"></span>
                        our notice board
                    <span class="ct-headline-line ct-headline-line--right"></span>
                </span>
    </h3>
</section>


<div class="container">
<section class="ct-js-slick ct-slick ct-slick-arrow--type1" data-animations="true" data-autoplay="false" data-arrows="true" data-items="1" data-XSitems="1" data-SMitems="2" data-MDitems="3">
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="testimonials.html">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="assets/images/demo-content/SliderImage4.jpg" alt="">
                    <div class="ct-decoration ct-decoration--type4 ct-decoration-decorationBorder">
                        <div>
                            <div class="ct-decoration-textContainer">
                                <div class="ct-decoration-text">
                                    <h5><span>Say Hello</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer">
                    <header class="ct-imageBox-title">
                        <a href="testimonials.html"><h6><span class="ct-u-colorGrayDarker">our notice board</span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="testimonials.html"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="single-product.html">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="assets/images/demo-content/SliderImage5.jpg" alt="">
                    <div class="ct-decoration ct-decoration--type3 ct-decoration-decorationBorder">
                        <div>
                            <div class="ct-decoration-textContainer">
                                <div class="ct-decoration-text">
                                    <h5><span>Contest</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ct-discount">
                        <h2><span>25% OFF</span></h2>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer ct-imageBox-container-shadow">
                    <header class="ct-imageBox-title">
                        <a href="single-product.html"><h6><span class="ct-u-colorGrayDarker">save even more! get 25% extra off!</span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="single-product.html"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="single-product.html">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="assets/images/demo-content/SliderImage6.jpg" alt="">
                    <div class="ct-decoration ct-decoration--type2 ct-decoration-decorationBorder">
                        <div>
                            <div class="ct-decoration-textContainer">
                                <div class="ct-decoration-text">
                                    <header>
                                        <h4 class="ct-u-marginBoth0"><span>Gourmet</span></h4>
                                        <h2 class="ct-u-marginBoth0"><span class="ct-fw-700">Shop</span></h2>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer ct-imageBox-container-shadow">
                    <header class="ct-imageBox-title">
                        <a href="single-product.html"><h6><span class="ct-u-colorGrayDarker">dairy products at prices you’ll love</span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="single-product.html"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="testimonials.html">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="assets/images/demo-content/SliderImage4.jpg" alt="">
                    <div class="ct-decoration ct-decoration--type4 ct-decoration-decorationBorder">
                        <div>
                            <div class="ct-decoration-textContainer">
                                <div class="ct-decoration-text">
                                    <h5><span>Say Hello</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer ct-imageBox-container-shadow">
                    <header class="ct-imageBox-title">
                        <a href="testimonials.html"><h6><span class="ct-u-colorGrayDarker">meet our farmers</span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="testimonials.html"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="single-product.html">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="assets/images/demo-content/SliderImage5.jpg" alt="">
                    <div class="ct-decoration ct-decoration--type3 ct-decoration-decorationBorder">
                        <div>
                            <div class="ct-decoration-textContainer">
                                <div class="ct-decoration-text">
                                    <h5><span>Contest</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ct-discount">
                        <h2><span>25% OFF</span></h2>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer">
                    <header class="ct-imageBox-title">
                        <a href="single-product.html"><h6><span class="ct-u-colorGrayDarker">save even more! get 25% extra off!</span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="single-product.html"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="single-product.html">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="assets/images/demo-content/SliderImage6.jpg" alt="">
                    <div class="ct-decoration ct-decoration--type2 ct-decoration-decorationBorder">
                        <div>
                            <div class="ct-decoration-textContainer">
                                <div class="ct-decoration-text">
                                    <header>
                                        <h4 class="ct-u-marginBoth0"><span>Gourmet</span></h4>
                                        <h2 class="ct-u-marginBoth0"><span class="ct-fw-700">Shop</span></h2>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer ct-imageBox-container-shadow">
                    <header class="ct-imageBox-title">
                        <a href="single-product.html"><h6><span class="ct-u-colorGrayDarker">dairy products at prices you’ll love</span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="single-product.html"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>
</section>
</div>

<div class="ct-u-borderTop">
    <section class="container ct-u-marginBoth50">
        <h3 class="ct-headline text-left">
        <span class="ct-headline-container ct-u-colorMotive">
            <span class="ct-headline-line ct-headline-line--left"></span>
                our brands
            <span class="ct-headline-line ct-headline-line--right"></span>
        </span>
        </h3>
    </section>
</div>

<section class="ct-u-paddingBottom50">
    <div class="container">
        <section class="ct-js-slick ct-slick ct-slick-arrow--type2" data-height="60" data-animations="true" data-autoplay="false" data-arrows="true" data-items="1" data-XSitems="2" data-SMitems="3" data-MDitems="5">
            <div class="item">
                <img src="assets/images/demo-content/logo1.png" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/demo-content/logo2.png" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/demo-content/logo3.png" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/demo-content/logo4.png" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/demo-content/logo5.png" alt="" />
            </div>
            <div class="item">
                <img src="assets/images/demo-content/logo3.png" alt="" />
            </div>
        </section>
    </div>
</section>
</main>

<footer>
    <div class="ct-preFooter ct-u-backgroundGray ct-u-paddingTop70 ct-u-paddingBottom15">
        <div class="container">
            <ul class="ct-preFooter-mainList list-unstyled list-inline">
                <li>
                    <h6 class="ct-u-marginBottom30"><span class="ct-u-colorGray text-uppercase ct-fw-600">My Account</span></h6>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> My Account
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Account login
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Email Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> My Set & Save
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Refer Friends Now
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h6 class="ct-u-marginBottom30"><span class="ct-u-colorGray text-uppercase ct-fw-600">customer service</span></h6>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Help & FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Live Chat
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Request a Product
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Product Recalls
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h6 class="ct-u-marginBottom30"><span class="ct-u-colorGray text-uppercase ct-fw-600">ways to shop</span></h6>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Coupons & Discounts
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Free Samples
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Mobile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Come To Store
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h6 class="ct-u-marginBottom30"><span class="ct-u-colorGray text-uppercase ct-fw-600">company info</span></h6>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Our Online Store
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Careers opportunity
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Privaty Police
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-long-arrow-right"></i> Site Map
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="ct-footerDownload">
                        <img src="assets/images/demo-content/footerDownloadImage.png" alt=""/>
                        <div class="ct-footerDownload-header">
                            <h3><span>We Have Our <span>Own App</span></span></h3>
                        </div>

                        <div class="text-center">
                            <a class="btn btn-lg ct-btn-image btn-motive" href="#"><span>Download Now</span></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="ct-postFooter">
        <div class="container">
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell text-left">
                    <p class="ct-u-marginBoth0 ct-u-colorWhite">© 2015 Organic Farm Fresh. All Rights Reserved.</p>
                </div>

                <div class="ct-u-displayTableCell text-right">
                    <ul class="list-unstyled list-inline ct-u-marginBoth0">
                        <li><img src="assets/images/demo-content/cart1.jpg" alt=""/></li>
                        <li><img src="assets/images/demo-content/cart2.jpg" alt=""/></li>
                        <li><img src="assets/images/demo-content/cart3.jpg" alt=""/></li>
                        <li><img src="assets/images/demo-content/cart4.jpg" alt=""/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<a href="#" class="ct-js-btnScrollUp"><i class="fa fa-angle-up"></i></a>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/dependencies.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/form/js/contact-form.js"></script>

<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/slick/init.js"></script>

<script src="assets/js/ct-mediaSection/jquery.stellar.min.js"></script>
<script src="assets/js/ct-mediaSection/init.js"></script>

<script src="assets/js/portfolio/jquery.isotope.min.js"></script>
<script src="assets/js/portfolio/imagesloaded.js"></script>
<script src="assets/js/portfolio/init.js"></script>

<script src="assets/js/main.js"></script>


<!-- switcher -->
<script src="demo/js/demo.js"></script>
<script type="text/javascript">
    $('head').append('<link rel="stylesheet" type="text/css" href="demo/css/demo.css">');
    $('head').append('<link rel="stylesheet" type="text/css" href="demo/generator.css">');
</script>

<div id="stylechooser">

    <div class="easyBox flat">
        <h6 class="subTitle">Style Switcher</h6>
      <a href="#" class="entypo cancel-squared" id="styleToggle"><i class="fa fa-cogs"></i></a>
    </div>

    <div class="easyBox">

      <div class="mkSpace">
         <label>Main Color</label>
         <ul class="demoList clearfix">
           <li><a href="#" title="Green" data-value='Green'><span class="demoColor" style="background:#99cd4d;"></span></a></li>
           <li><a href="#" data-value="Red"><span class="demoColor" style="background:#ce0000;"></span></a></li>
          <li><a href="#" data-value="Orange"><span class="demoColor" style="background:#ff7f00;"></span></a></li>
          <li><a href="#" data-value="Yellow"><span class="demoColor" style="background:#ffd600;"></span></a></li>
          <li><a href="#" data-value="Purple"><span class="demoColor" style="background:#ad53c1;"></span></a></li>
          <li><a href="#" data-value="Sun"><span class="demoColor" style="background:#ffb400;"></span></a></li>
          <li><a href="#" data-value="Darkgreen"><span class="demoColor" style="background:#00726d;"></span></a></li>
          <li><a href="#" data-value="Darkenblue"><span class="demoColor" style="background:#2b8be9;"></span></a></li>

         </ul>
     </div>
      <hr>

        <div class="mkSpace">
            <label>Second Color</label>
            <ul class="demoList clearfix">
                <li><a href="#" title="YellowSecond" data-value='YellowSecond'><span class="demoColor" style="background:#f4c806;"></span></a></li>
                <li><a href="#" data-value="RedSecond"><span class="demoColor" style="background:#ce0000;"></span></a></li>
                <li><a href="#" data-value="OrangeSecond"><span class="demoColor" style="background:#ff7f00;"></span></a></li>
                <li><a href="#" data-value="GreenSecond"><span class="demoColor" style="background:#99cd4d;"></span></a></li>
                <li><a href="#" data-value="PurpleSecond"><span class="demoColor" style="background:#ad53c1;"></span></a></li>
                <li><a href="#" data-value="SunSecond"><span class="demoColor" style="background:#ffb400;"></span></a></li>
                <li><a href="#" data-value="DarkgreenSecond"><span class="demoColor" style="background:#00726d;"></span></a></li>
                <li><a href="#" data-value="DarkenblueSecond"><span class="demoColor" style="background:#2b8be9;"></span></a></li>

            </ul>
        </div>
        <hr>

        <div class="mkSpace">
          <a href="#" id="demoReset" class="btn btn-motive ct-btn-image btn-block demo-reset"><span>DEFAULT</span></a>
        </div>
    </div>

    <div class="easyBox">
        <div class="mkSpace">
            <div class="title">
                <label>Dropdown Style</label>
            </div>
            <div class="switch-animations">
                <div class="select">
                    <select id="dropdownSelect" onchange="selectDropdown()">
                        <option value="ct-navbar--fadeInLeft">fadeInLeft</option>
                        <option value="ct-navbar--fadeInRight">fadeInRight</option>
                        <option value="ct-navbar--fadeIn">fadeIn</option>
                        <option value="ct-navbar--fadeInDown">fadeInDown</option>
                        <option value="ct-navbar--fadeInUp">fadeInUp</option>
                        <option value="ct-navbar--pulse">pulse</option>
                        <option value="ct-navbar--bounceIn">bounceIn</option>
                        <option value="ct-navbar--bounceInLeft">bounceInLeft</option>
                        <option value="ct-navbar--bounceInRight">bounceInRight</option>
                        <option value="ct-navbar--flipInX">flipInX</option>
                        <option value="ct-navbar--flipInY">flipInY</option>
                        <option value="ct-navbar--zoomIn">zoomIn</option>
                        <option value="ct-navbar--zoomInDown">zoomInDown</option>
                        <option value="ct-navbar--zoomInUp">zoomInUp</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="easyBox">
        <div class="mkSpace">
        <div class=" title">
            <label>Body Layout</label>
        </div>
        <div class="switch-toggle">
            <div class="onoffswitch">
                <input type="checkbox" data-refresh="true" data-value="boxed" data-clear-container-deselected="#patternContainer" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                </label>
            </div>
            </div>
        </div>
    </div>

    <div class="easyBox">
        <div class="mkSpace">
        <div class="title">
            <label>Background Pattern Style</label>
        </div>
        <div id="patternContainer">

                <ul class="demoList clearfix">
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn1" data-value="ptn1"><span class="demoPattern" style="background: url('assets/images/bg_pattern_01.png')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn2" data-value="ptn2"><span class="demoPattern" style="background: url('assets/images/bg_pattern_02.png')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn3" data-value="ptn3"><span class="demoPattern" style="background: url('assets/images/bg_pattern_03.png')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn4" data-value="ptn4"><span class="demoPattern" style="background: url('assets/images/bg_pattern_09.png')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn5" data-value="ptn5"><span class="demoPattern" style="background: url('assets/images/bg_pattern_10.png')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn6" data-value="ptn6"><span class="demoPattern" style="background: url('assets/images/bg_pattern_11.jpg')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn7" data-value="ptn7"><span class="demoPattern" style="background: url('assets/images/bg_pattern_12.jpg')"></span></a></li>
                    <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" class="refresh" title="ptn8" data-value="ptn8"><span class="demoPattern" style="background: url('assets/images/bg_pattern_12.png')"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- end switcher -->
</body>

<!-- Mirrored from farmfresh.html.themeplayers.net/our-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2017 08:13:49 GMT -->
</html>