<?php 
  require "header.html";

  $idProvider = $_SESSION['id_four'];
  $DB = new DB();   
  $providers =  $DB->query("SELECT * FROM fournisseur WHERE id_four= '$idProvider'");
  
   
?>

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