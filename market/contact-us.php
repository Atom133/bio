<?php require "header.html"; ?>


<div class="container">

    <div class="ct-breadcrumbs-container">
        <div class="ct-breadcrumbs ct-js-breadcrumbs" data-bg-image="assets/images/demo-content/italian.jpg" data-bg-scratchImage="assets/images/scratch.png" data-height="260">
            <div class="ct-breadcrumbs-title">
                get in touch
            </div>
        </div>

        <ol class="breadcrumb  ">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact</li></ol>
    </div>

</div>

<section class="container">
    <h3 class="ct-headline text-center ct-u-marginBottom50">
        <span class="ct-headline-container ct-u-colorMotive">
            <span class="ct-headline-line ct-headline-line--left"></span>
                contact us
            <span class="ct-headline-line ct-headline-line--right"></span>
        </span>
    </h3>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="successMessage alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> Congratulation, mission success
                </div>

                <div class="errorMessage alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Danger!</strong> You did something wrong
                </div>

                <form data-email-subject="Form Subject" class="validateIt" role="form" action="http://farmfresh.html.themeplayers.net/assets/form/send.php" method="POST">
                    <div class="form-group">
                        <label class="ct-u-colorBrownDark2" for="firstName">First name*</label>
                        <input type="text" placeholder="Name" class="form-control input-sm" id="firstName" required name="field[]">
                    </div>

                    <div class="form-group">
                        <label class="ct-u-colorBrownDark2" for="lastName">Last Name*</label>
                        <input type="text" placeholder="Surname" class="form-control input-sm" id="lastName" required name="field[]">
                    </div>

                    <div class="form-group">
                        <label class="ct-u-colorBrownDark2" for="email">Email Address*</label>
                        <input type="email" placeholder="Email" class="form-control input-sm" id="email" required name="field[]">
                    </div>

                    <div class="form-group ct-js-radio">
                        <label class="ct-u-colorBrownDark2" for="email">Subject*</label>
                        <div class="radio">
                            <input type="radio" placeholder="Subject" name="field[]" id="optionsRadios1" value="Education">
                            <label for="optionsRadios1">Education</label>
                        </div>

                        <div class="radio">
                            <input type="radio" placeholder="Subject" name="field[]" id="optionsRadios2" value="About Our Service" checked>
                            <label for="optionsRadios2">About Our Service</label>
                        </div>

                        <div class="radio">
                            <input type="radio" name="field[]" placeholder="Subject" id="optionsRadios3" value="Events">
                            <label for="optionsRadios3">Events</label>
                        </div>

                        <div class="radio">
                            <input type="radio" placeholder="Subject" name="field[]" id="optionsRadios4" value="Our Website">
                            <label for="optionsRadios4">Our Website</label>
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-4">
                                <div class="radio">
                                    <input class="ct-js-radio-input" placeholder="Subject" name="field[]" type="radio" id="optionsRadios5" value="Other">
                                    <label for="optionsRadios5">Other</label>
                                </div>
                            </div>

                            <div class="col-md-10 col-sm-9 col-xs-8">
                                <div class="form-group">
                                    <label class="sr-only" for="other_text">Other</label>
                                    <input  class="form-control ct-js-radio-target input-sm"  placeholder="Subject Content" name="field[]" type="text" id="other_text" required disabled >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="ct-u-colorBrownDark2" for="message">Message*</label>
                        <textarea class="form-control" rows="7" id="message" placeholder="Message" required name="field[]"></textarea>
                    </div>

                    <p class="text-right ct-u-colorBrownDark2">*Required fields.</p>

                    <div class="text-left ct-u-marginTop40 ct-u-marginBottom70">
                        <button type="submit" class="btn btn-lg ct-btn-image btn-warning"><span>Send message</span></button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 ct-u-marginBottom30">
                            <h3 class="ct-u-colorYellow ct-u-ff--2 text-uppercase ct-u-marginBottom30">customer service</h3>
                            <h6 class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-size13 ct-u-marginBottom15">PHONE</h6>

                            <p class="ct-u-colorGray ct-u-marginBottom10">1.800.796.6009</p>
                            <p class="ct-u-colorGray ct-u-marginBottom20">Monday - Friday, 7:00 a.m. - 6:00 p.m. PT</p>

                            <p class="ct-u-colorMotive ct-u-marginBottom25 text-uppercase">Missed our office hours? Leave a message; Voicemail messages checked 7 days a week.</p>

                            <h6 class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-size13 ct-u-marginBottom15">Email</h6>

                            <p class="ct-u-colorGray">contactus@organicfarmfresh.com</p>

                        </div>
                        <div class="col-md-12 col-sm-6 ct-u-marginBottom30">
                            <h3 class="ct-u-colorYellow text-uppercase ct-u-ff--2 ct-u-marginBottom30">MAIL LOCATIONS</h3>
                            <h6 class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-size13 ct-u-marginBottom15">organic Farm Fresh  (Northern CA)</h6>

                            <p class="ct-u-colorGray ct-u-marginBottom10">12345 State Highway 16</p>
                            <p class="ct-u-colorGray ct-u-marginBottom30">Capay, CA 95656</p>

                            <h6 class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-size13 ct-u-marginBottom15">organic Farm Fresh (Southern CA)</h6>

                            <p class="ct-u-colorGray ct-u-marginBottom10">PO Box 1234</p>
                            <p class="ct-u-colorGray">Maywood, CA 902789</p>

                        </div>
                        <div class="col-md-12 col-sm-6 ct-u-marginBottom30">
                            <h3 class="ct-u-colorYellow ct-u-ff--2 text-uppercase ct-u-marginBottom30">find us on map</h3>

                            <div class="ct-js-googleMap ct-googleMap ct-js-googleMap--single" data-location="Narbutta 22, Warszawa" data-icon="assets/images/marker.png" data-display-desc="true" data-zoom="14" data-height="172" id="map1"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php require "section.html";?>

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

<?php require "footer.html"; ?>