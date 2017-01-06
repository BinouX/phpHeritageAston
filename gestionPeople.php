<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<?php include 'class/classe.php';?>


<section id="home">


     <div id="panel">
        <div class="classe">
            <h2>Ajout Administrateur/Professeur/Elève : </h2>
        </div>

      <form method="post" action="./includes/addPeople.php">
        <select name="listStatut">
          <option value="student">Eleve</option>
          <option value="teacher">Professeur</option>
          <option value="admin">Administrateur</option>
        </select>
        <table>
           <tr><td>Prenom: </td><td><input type="text" class="inputtext" name="firstname"></td></tr>
           <tr><td>Nom: </td><td><input type="text" class="inputtext" name="lastname"></td></tr>
       </table>
       <input type='hidden' name='create' value='create'>
       <button type="submit" id="valid" name="valid" class="btn-valid" style="margin-top:25px;">Valider</button>
       </form>

    </div>

</section>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/foot.php'; ?>
