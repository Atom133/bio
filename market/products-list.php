<?php
 require "header.html";
 $idProvider = $_SESSION['id_four'];
 $DB = new DB();   
 $products =  $DB->query("SELECT * FROM produits WHERE id_four= $idProvider");
?> 


<div id="ct-js-wrapper">

<main>

<section class="container section ct-u-marginBottom10" id="products" >
    <h3 class="ct-headline text-center" style="padding: 85px 0px 40px;">
        <span class="ct-headline-container ct-u-colorMotive">
            <span class="ct-headline-line ct-headline-line--left"></span>
                Your Products
            <span class="ct-headline-line ct-headline-line--right"></span>
        </span>
    </h3>
</section>


<section class="ct-u-marginTop20 ct-u-marginBottom70">
    <div class="container">
    <div class="ct-gallery ct-portfolio-container ct-portfolio-masonry ct-portfolio-masonry--col3 is-loaded" style="position: relative; height: auto;">
       <?php foreach ($products as $prod): ?>
        <article class="ct-gallery-item ct-portfolio-item fresh" style="float:left;">

            <div class="ct-portfolio-item-outer">
                <div class="ct-portfolio-item-media">
                    <figure>
                         <a href="#"><img src="../forms/produits/<?= $prod->nom_prod?>/<?= $prod->nom_prod?>1.jpg"></a>
                    </figure>
                </div>

                <div class="ct-portfolio-item-wrapper">
                    <div class="ct-portfolio-item-inner">
                        <section>
                            <div class="ct-portfolio-item-title">
                                <a href="single-product.php">
                                    <h6><span><?= $prod->nom_prod ;?></span></h6>
                                </a>
                            </div>

                            <div class="text-center">
                                <a href="single-product-prov.php?id_prod=<?= $prod->id_prod; ?>" class="btn ct-btn-image btn-warning"><span><i class="fa fa-book"></i> Read More</span></a>
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


</main>

</div>
<?php require "footer.html"; ?>
</body>

</html>

