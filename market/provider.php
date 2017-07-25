<?php 
  require "header.html";

  $idProvider = $_SESSION['id_four'];
  $DB = new DB();   
  $providers =  $DB->query("SELECT * FROM fournisseur WHERE id_four= '$idProvider'");
  
   
?>

<html class="no-js" lang="en"> 

<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Farm Fresh is HTML5 template, dedicated for farm owners, organic food distributors and green, eco, veggie food lovers.">
    <meta name="keywords" content="farm, organic template, html5 eco template" />
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">

    <title>Provider</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/motive.css">
    <script src="assets/js/modernizr.custom.js"></script>
</head>


<body class="cssAnimate ct-headroom--fixedBoth navbar--transparent">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>

<div class="ct-navbarMobile ct-u-bgBlack">
    <button type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>

<div class="ct-menuMobile">
    <ul class="ct-menuMobile-navbar list-unstyled ct-u-backgroundDarkGray">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="index-2.html"><i class="fa fa-fw fa-home"></i>Homepage - Slider</a></li>
                <li><a href="index2.html"><i class="fa fa-fw fa-home"></i>Homepage - Parallax</a></li>
                <li><a href="index3.html"><i class="fa fa-fw fa-home"></i>Homepage - Kenburns</a></li>
                <li><a href="index4.html"><i class="fa fa-fw fa-home"></i>Homepage - Video</a></li>

                <li><a href="index5.html"><i class="fa fa-fw fa-home"></i>Onepage - Slider</a></li>
                <li><a href="index6.html"><i class="fa fa-fw fa-home"></i>Onepage - Parallax</a></li>
                <li><a href="index7.html"><i class="fa fa-fw fa-home"></i>Onepage - Kenburns</a></li>
                <li><a href="index8.html"><i class="fa fa-fw fa-home"></i>Onepage - Video</a></li>

                <li><a href="index9.html"><i class="fa fa-fw fa-home"></i>Scroll Up Menu</a></li>
                <li><a href="index10.html"><i class="fa fa-fw fa-home"></i>Scroll Up Top Bar</a></li>
                <li><a href="index11.html"><i class="fa fa-fw fa-home"></i>Scroll Up Both</a></li>
                <li><a href="index12.html"><i class="fa fa-fw fa-home"></i>Fixed Top Bar</a></li>
                <li><a href="index13.html"><i class="fa fa-fw fa-home"></i>Fixed Menu</a></li>
                <li><a href="index14.html"><i class="fa fa-fw fa-home"></i>Fixed Both</a></li>
            </ul>
        </li>

        <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Farm Fresh <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="single-event.html">Single Event</a></li>
                <li><a href="tours-and-events.html">Tours & Events</a></li>
                <li class="active"><a href="single-person.html">Member Page</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="what-we-grow.html">What We Grow</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Products <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="single-product.html">Single Product</a></li>
                <li><a href="our-products.html">Our Products</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Distributor <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="our-distributors.html">Our Distributors</a></li>
                <li><a href="our-distributors2.html">Our Distributors 2</a></li>
                <li><a href="our-suppliers.html">Our Suppliers</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a>Features <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="features-grid.html"><i class="fa fa-fw fa-th"></i> Grid System</a></li>
                <li><a href="features-typography.html"><i class="fa fa-fw fa-font"></i> Typography</a></li>
                <li><a href="features-buttons.html"><i class="fa fa-fw fa-link"></i> Buttons</a></li>
                <li><a href="features-forms.html"><i class="fa fa-fw fa-align-justify"></i> Forms</a></li>
                <li><a href="features-tables.html"><i class="fa fa-fw fa-table"></i> Tables</a></li>

                <li><a href="features-p-tables.html"><i class="fa fa-fw fa-money"></i> Pricing Tables</a></li>
                <li><a href="features-iconbox.html"><i class="fa fa-fw fa-th-large"></i> Icon Boxes</a></li>
                <li><a href="features-personbox.html"><i class="fa fa-fw fa-users"></i> Person Boxes</a></li>
                <li><a href="features-counters.html"><i class="fa fa-fw fa-plus"></i> Counters</a></li>
                <li><a href="features-toggables.html"><i class="fa fa-fw fa-toggle-on"></i> Toggables</a></li>

                <li><a href="features-charts.html"><i class="fa fa-fw fa-area-chart"></i> Charts</a></li>
                <li><a href="features-p-bar.html"><i class="fa fa-fw fa-bars"></i> Progress Bars</a></li>
                <li><a href="features-p-icons.html"><i class="fa fa-fw fa-star-half-full"></i> Progress Icons</a></li>
                <li><a href="features-lists.html"><i class="fa fa-fw fa-list"></i> Lists Simple</a></li>
                <li><a href="features-lists2.html"><i class="fa fa-fw fa-list"></i> Lists Icons</a></li>

                <li><a href="features-slider.html"><i class="fa fa-fw fa-navicon"></i> Sliders</a></li>
                <li><a href="features-m-sections.html"><i class="fa fa-fw fa-play"></i> Media Sections</a></li>
                <li><a href="features-404.html"><i class="fa fa-exclamation-triangle"></i> 404 Page</a></li>
                <li><a href="faq.html"><i class="fa fa-question"></i> FAQ</a></li>
                <li><a href="maintenance.html"><i class="fa fa-pause"></i> Maintenance</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gallery <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="gallery.html">Gallery - Type 1</a></li>
                <li><a href="gallery2.html">Gallery - Type 2</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="single-post.html">Single Post</a></li>
                <li><a href="blog-list.html">Blog List</a></li>
                <li><a href="blog-masonry.html">Blog Masonry</a></li>
            </ul>
        </li>

        <li><a href="contact-us.html">Contact Us</a></li>
    </ul>
</div>

<div id="ct-js-wrapper">

<main>

<section class="ct-u-marginTop40 ct-u-marginBottom80">
    <div class="container" style="margin-top: 250px;">
        <div class="row">
           <?php foreach ($providers as $prov): ?>
            <div class="col-md-6">
                <img class="ct-u-borderAll2 ct-u-marginBottom30" src="../forms/<?= $prov->logo ;?>" alt=""/>
                
            </div>

            <div class="col-md-6">
                <div class="col-xs-12">
                    <h3 class="ct-u-ff--2 ct-u-colorMotive ct-u-marginBottom20"><?= $prov->company_name ;?></h3>
                     <div class="col-xs-6">
                    Votes <p class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-marginBottom40"><?= $prov->nb_votes ;?></p>
                    </div>
                     <div class="col-xs-6">
                    Rating <p class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-marginBottom40"><?= $prov->rate ;?></p>
                    </div>

                    <p class="ct-u-colorGray ct-u-marginBottom40"><?= $prov->description ;?></p>

                    <p class="ct-u-colorGray ct-u-marginBottom10">
                    <span class="ct-fw-600">
                        Address:
                    </span>
                        <?= $prov->adresse ;?>
                    </p>

                    <p class="ct-u-colorGray ct-u-marginBottom40">
                    <span class="ct-fw-600">
                        Email:
                    </span>
                       <?= $prov->email ;?>
                    </p>

                    <ul class="socialicons socialicons--image">
                        <li>
                            <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom" title data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://twitter.com/createitpl" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title data-original-title="LinkedIn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endforeach ?>
            
            <a href="../forms/product_form.php" class="btn ct-btn-image btn-warning"><span>Add Product</span></a>  
            <a href="../market/products-list.php" class="btn ct-btn-image btn-warning"><span>Show my products</span></a> 
              
          </div>
    </div>
</section>

</main>

</div>

<?php require "footer.html"; ?>

</body>

</html>