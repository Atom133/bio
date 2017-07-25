  <?php

  require 'db.class.php';
  $db=new DB();
  
    if(isset($_POST['submitLogin'])){
      session_start();
      $email = $_POST['email'];
      $password = $_POST['password'];
      $sql_client = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
      $sql_four = "SELECT * FROM fournisseur WHERE email = '$email' AND password = '$password'";
      if($res = $db->query($sql_client))
      {
        $_SESSION['login']=true;
        $_SESSION['nom'] = $res[0]->nom;
        
        $_SESSION['typeOFAccount'] = "client";
        header('Location:../market/index.php');
      }
      else if($res = $db->query($sql_four))
      {
        $_SESSION['login']=true;
        $_SESSION['company_name'] = $res[0]->company_name ;
        $_SESSION['typeOFAccount'] = "Provider";
        header('Location:../market/index.php');
      }
      else{
        $_SESSION['login']=false;
        header('Location:../market/index.php');
      }
    }
    ?>
