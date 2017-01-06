<?php include 'class/access.php';?>
<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<section id="home">
    <center><div id="logo">

    </div>
        <div id="titre">
            <form method="post">
                <label for="nom">Nom : </label><br />
                <input type="text" class="inputtext" id="nom" name="nom"  /><br />
                <label for="pass" style="margin-top:25px;">Mot de passe :</label><br />
                <input type="password" class="inputtext" id="pass" name="pass"  /><br />
                <button type="submit" id="valid" name="valid" class="btn-valid" style="margin-top:25px;">Valider</button>
            </form>
        </div>
    </center>
</section>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/foot.php'; ?>

<?php

  if(isset($_POST["valid"])){

    $user=$_POST["nom"];
    $pass=$_POST["pass"];

    //$connexion=new access();
    //$connexion->new_cnx();
    //  $resultCo=$connexion->select("*","aston_administrator",$lala,$user);
      // fait par laurine :-) MERCI LA BELLE CLASS ACCESS DE THOMAS !!
    $db='aston';
    $host='localhost';
    $dsn = 'mysql:dbname='.$db.';host='.$host;
    $userbdd= 'root';
    $password = '';

    try {
        $dbh = new PDO($dsn, $userbdd, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }


    $res = $dbh->query("SELECT * FROM aston_user WHERE lastname_user='".$user."'");

    foreach($res as $data){
      if($data['lastname_user'] == $user && $data['password'] == $pass){
        session_start();
        $_SESSION['statut'] = $data['statut_user'];
        $_SESSION['nom'] = $data['lastname_user'];
        $_SESSION['prenom'] = $data['firstname_user'];
        header("Location: index.php");
      }

    };
  }

 ?>
