<?php require "header.html"; ?>
<main>

<div class="container">

    <div class="ct-breadcrumbs-container">
        <div class="ct-breadcrumbs ct-js-breadcrumbs" data-bg-image="assets/images/demo-content/italian.jpg" data-bg-scratchImage="assets/images/scratch.png" data-height="260">
            <div class="ct-breadcrumbs-title">
                Change The World
            </div>
        </div>

        <ol class="breadcrumb  ">
            <li><a href="index.php">Home</a></li>
            <li class="active">Feed A Child</li></ol>
    </div>

</div>

<section class="container">
    <h1 class="ct-headline text-center ct-u-marginBottom50">
        <span class="ct-headline-container ct-u-colorMotive">
            <span class="ct-headline-line ct-headline-line--left"></span>
                Help Us Change the World
            <span class="ct-headline-line ct-headline-line--right"></span>
        </span>
    </h1>
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

				<img src="assets/images/WorldHungerFull.jpg"/>
            </div>
            <div class="col-md-6">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 ct-u-marginBottom30">
                            <h3 class="ct-u-colorYellow ct-u-ff--2 text-uppercase ct-u-marginBottom30">Donate To A Charity of YOUR Choice</h3>
                            <h6 class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-size13 ct-u-marginBottom15">Set A Price</h6>

                            <p class="ct-u-colorGray ct-u-marginBottom10"></p>
                           <input class="input" type="text" name="nom_prod" required>
						   <p></p>
							<p style="color:#ff875c" class="ct-u-colorMotive ct-u-marginBottom25 text-uppercase">Spread the Smile:</p>
                            <p class="ct-u-colorMotive ct-u-marginBottom25 text-uppercase">FOODCY allows you to choose the price for your product, but remember it is for the poor make it count !</p>

                            <h6 class="ct-u-colorBrownDark2 text-uppercase ct-fw-600 ct-u-size13 ct-u-marginBottom15">Charity</h6>

                 <select class="selectpicker" style="color: black" name="categorie">
					<option value="heathAndHygiene" selected> Un enfant, des sourires</option>
					<option value="fruitsAndVegetables"> TUNAIDE</option>
					<option value="proteins"> Association Rose de L'Espoir</option>
					<option value="beauty"> 1 enfant, 1 espoir</option>
				</select>
                        </div>
                          <div class="text-left ct-u-marginTop40 ct-u-marginBottom70">
                        <button type="submit" class="btn btn-lg ct-btn-image btn-warning"><span> <a href="thanks.php"> Spread The Smile</span></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php require "section.html";?>




<?php require "footer.html"; ?>