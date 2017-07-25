  <?php

<<<<<<< HEAD
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
=======
		<tr><td></td><td><button type="submit" name="submitLogin" value="submitLogin" class="btn btn-default btn-block">Log In</button></td></tr>
	</table>

	
</form>

<div>
	<?php
		if(isset($_POST['submitLogin'])){
			require 'db.class.php';
			$db = new DB();
			session_start();
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql_client = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
			$sql_four = "SELECT * FROM fournisseur WHERE email = '$email' AND password = '$password'";
			if($res = $db->query($sql_client))
			{
				
				$_SESSION['nom'] = $res['nom'];
				$_SESSION['typeOFAccount'] = "client";
				header('Location:client_form.php');
			}
			else if($res = $db->query($sql_four))
			{
             
				$_SESSION['company_name'] = $res[0]->company_name;
				$_SESSION['typeOFAccount'] = "Provider";
                $_SESSION['id_four'] = $res[0]->id_four;
                //header('Location:provider_form.php');
				header('Location:../market/provider.php');
			}
			else
				die('erreur');
			}
		?>
</div>

</body>
</html>
>>>>>>> 634df6326ee0e57384229bd8965fbfbeb6b7a747
