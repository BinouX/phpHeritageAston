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