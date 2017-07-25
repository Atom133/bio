<?php 
require "header.html";
$nom_prod = $_GET['nomprod'];
$sql = "SELECT * FROM produits WHERE nom_prod = '$nom_prod'";
$result_sql = $db->query($sql);

?>
<div  class="ct-u-marginTop10 ct-u-marginBottom80 section" >
    <div class="ct-breadcrumbs-container" style="padding:150px">
        <div class="ct-breadcrumbs ct-js-breadcrumbs" data-bg-image="assets/images/demo-content/walnuts.jpg" data-bg-scratchImage="assets/images/scratch.png" data-height="200">
            <div class="ct-breadcrumbs-title">
                Single Product
            </div>
        </div>

        <ol class="breadcrumb  ">
            <li><a href="index.php">Home</a></li>
            <li class="active">Single Product</li>
        </ol>
    </div>
</div>

<section>
    <div class="container">
        <div class="row ct-u-marginBottom100">
            <div class="col-md-6">
                <div class="col-sm-12 ct-u-marginBottom40">
                    <div id="synced-1" class="ct-slick--synced ct-slick--synced--type1">
                        <div class="ct-slick ct-js-slick ct-js-slick-for" data-items="1" data-arrows="false" data-draggable="false" data-touchMove="false">
                        <?php 
                        $i = 0;
                        $files = scandir('../forms/produits/'.$nom_prod.'');
                        foreach($files as $file) :?>
                        <?php $i = $i + 1;
                        if ($i>2)
                          echo'<div class="item"><img src="../forms/produits/'.$nom_prod.'/'.$file.'" alt=""/></div>'; 
                        ?>
                          
                        <?php endforeach?>
                        
                            
                        </div>
                        <div class="ct-slick ct-js-slick ct-js-slick-nav ct-slick-arrow--type5 ct-slick-thumbnailHover--type1" data-items="2" data-centerMode="true" data-centerPadding="0" data-asNavFor="#synced-1 .ct-js-slick-for" data-XSitems="2" data-SMitems="4" data-focusOnSelect="true">
                            <?php 
                            $i = 0;
                            $files = scandir('../forms/produits/'.$nom_prod.'');
                            foreach($files as $file) :?>
                            <?php $i = $i + 1;
                            if ($i>2)
                              echo'<div class="item"><img src="../forms/produits/'.$nom_prod.'/'.$file.'" alt=""/></div>'; 
                            ?>
                              
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-sm-12">
                    <div class="ct-portfolio-singleItem">
                        <div class="ct-portfolio-SingleItem-backButton">
                            <a href="our-products.php">all products</a>
                        </div>
                        

                        <div class="ct-portfolio-SingleItem-title">
                            <h3><span><?=$nom_prod?></span></h3>
                        </div>

                        <fieldset class="rating">
                          <input type="radio" id="star5" name="rating" class="star star5" rat="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                          
                          <input type="radio" id="star4" name="rating" class="star star4" rat="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                          
                          <input type="radio" id="star3" name="rating" class="star star3" rat="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                          
                          <input type="radio" id="star2" name="rating" class="star star2" rat="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                          
                          <input type="radio" id="star1" name="rating" class="star star1" rat="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                          
                        </fieldset>
                            <span><?php
                                        if(($result_sql[0]->total) > 0)
                                            echo number_format($result_sql[0]->rate/$result_sql[0]->total,1,',',''); ?></span>
                        <br><br><br> 

                                        
                        <div class="ct-portfolio-SingleItem-text">
                            <p>
                                <span><?php foreach($result_sql as $prod) {echo $prod->description; $id = $prod->id_prod; $nom_prod = $prod->nom_prod; $categorie = $prod->categorie;}?><span>
                            </p>
                        </div>

                        <div class="ct-portfolio-SingleItem-types">
                            <p>
                                <strong>Available in:</strong> <a href="#">5 oz clamshell</a> <a href="#">10 oz clamshell</a> <a href="#">1 lb clamshell</a> <a href="#">1 lb bag</a>
                            </p>
                        </div>

                        <div class="panel-group ct-accordion ct-accordion--type2" id="accordion">
                            <div class="panel panel-default ct-accordion-panel">
                                <div class="panel-heading ct-accordion-heading">
                                    <h4 class="panel-title ct-accordion-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Nutrition Information
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in ct-accordion-collapse">
                                    <div class="panel-body ct-accordion-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa fa-circle"></i> Add thinly sliced radish to a classic garden salad for a bit of zing.
                                            </li>

                                            <li>
                                                <i class="fa fa-circle"></i> Coarsely grate and toss with grated carrot, shredded green cabbage and mayonnaise for a coleslaw with bite.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default ct-accordion-panel">
                                <div class="panel-heading ct-accordion-heading">
                                    <h4 class="panel-title ct-accordion-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                            Cooking Tips
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse ct-accordion-collapse">
                                    <div class="panel-body ct-accordion-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <i class="fa fa-circle"></i> Always use fresh products.
                                            </li>

                                            <li>
                                                <i class="fa fa-circle"></i> Wash fruits and vegetables before use.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ct-portfolio-SingleItem-similarProducts">
                            <div class="ct-portfolio-SingleItem-similarProducts-title">
                                <h5><span>Looking for something similar?</span></h5>
                            </div>

                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-circle"></i> Beautiful Pinapple In Big Crates
                                </li>

                                <li>
                                    <i class="fa fa-circle"></i> Mixed Freshly Harvested Salad Types
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?require "section.html";?>

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

<?php
$sql = "SELECT * FROM produits WHERE categorie = '$categorie'";
$productsInSameCategory = $db->query($sql);
foreach($productsInSameCategory as $prod) :?>
<div class="item">
    <article class="ct-imageBox">
        <figure class="ct-imageBox-wrapperOuter">
            <a href="single-product.php?nomprod=<?= $prod->nom_prod?>">
                <div class="ct-imageBox-container ct-imageBox-container-shadow">
                    <div class="ct-imageBox-hover ct-imageBox-hover--type1"></div>
                    <img src="../forms/produits/<?= $prod->nom_prod?>/<?= $prod->nom_prod?>1.jpg" alt="">
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
                        <h4><span><?= $prod->nom_prod?></span></h4>
                    </div>
                </div>
            </a>
            <figcaption class="ct-imageBox-wrapperInner ct-imageBox-wrapperInner--type3">
                <div class="ct-imageBox-titleContainer ct-imageBox-container-shadow">
                    <header class="ct-imageBox-title">
                        <a href="single-product.html"><h6><span class="ct-u-colorGrayDarker">save even more! get 25% extra off! </span></h6></a>
                    </header>

                    <div class="text-center">
                        <a class="btn ct-btn-link btn-motive" href="single-product.php?nomprod=<?= $prod->nom_prod?>"><span>Learn More</span></a>
                    </div>
                </div>
            </figcaption>
        </figure>
    </article>
</div>

<?php endforeach ?>


</section>
</div>

<?php var_dump($_GET['nomprod']);?>
<script type="text/javascript">
$(".star").click(function(e) {
   $.ajax({
        url: 'rating.php',
        type: 'POST',
        data: {
            rate: $(this).attr("rat"),
            id: <?= $id ?>
            //$_POST['data']
        },
        success: function() {
            console.log('success');
        },
        error: function() {
            console.log('fail');
        }
    });
});
  </script>


<?php require "footer.html";?>