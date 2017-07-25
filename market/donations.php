<?php require "header.html"; 
  $idProvider = $_SESSION['id_four'];
  $DB = new DB();
	$date = date("Y-n-j",strtotime('+2 day')); 

   $providers =  $DB->query("SELECT * FROM produits, fournisseur WHERE fournisseur.id_four= '$idProvider' && produits.date_exp= '$date'");
?>
<div id="ct-js-wrapper">

    <main>

        <section class="ct-u-marginTop70 ct-u-marginBottom70 section" id="events">
        <div class="container ct-u-marginBottom80">

       
        <h1 class="ct-headline text-center ct-u-marginBottom50">
            <span class="ct-headline-container ct-u-colorMotive">
                <span class="ct-headline-line ct-headline-line--left"></span>
                    Donations
                <span class="ct-headline-line ct-headline-line--right"></span>
            </span>
        </h1>
		<h3  class="ct-headline text-center ct-u-marginBottom70" >
		 <span class="ct-headline-container ct-u-colorMotive" style="color:#FF875C">
                
                    Help Us Help the World, donate your nearly expired products and end hunger !!
                
            </span>
		</h3>
 <?php foreach ($providers as $prov): ?>

        <article class="ct-event-item ct-event-item--type2">

            <div class="ct-event-item-outer">
                <div class="ct-event-item-media">
                    <figure>
                        <a href="single-post.html"><img src="../forms/produits/<?= $prov->nom_prod?>/<?= $prov->nom_prod?>1.jpg" alt="" /></a>
                        <div class="ct-imagedata ct-imagedata--left" style="width:150px; height:70px">
                            <span class="ct-imagedata-day"><?= $prov->date_exp ;?></span>
                           
                    </figure>
                </div>

                <div class="ct-event-item-wrapper">

                    <div class="ct-event-item-inner">
                        <section>

                            <div class="ct-event-title">
                                <a href="single-event.html">
                                    <h6><span>This Product is about to expire, Donate it now!</span></h6>
                                </a>
                            </div>

                            <div class="ct-event-location">
                                <ul class="list-unstyled">
                                    <li>
                                        <p>
                                            Quantity:<?= $prov->stock ;?>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            EXPIRATION DATE: <?= $prov->date_exp ;?>
                                        </p>
                                    </li>
                                </ul>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="ct-event-meta">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-right">
                                        <a href="donateForm.php" class="btn ct-btn-image btn-warning"><span>Feed A child</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </article>

<?php endforeach ?>
        </div>
        </section>


    </main>

</div>
<?php require "footer.html"; ?>
