<?php
require 'header.html';
?>

<div style="margin-top: 250px"></div>

<div class="alert alert-success text-center" role="alert" style="font-size: 46px">
  <strong>Well done!</strong><br><br><br><br><br><br> Your order have been placed and will be treated <br><br><br>as soon as possible.<br><br><br> Thank you for your confidence.
</div>

<?php
unset($_SESSION['panier']);
require 'footer.html';
?>


