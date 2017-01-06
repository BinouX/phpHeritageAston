
<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<?php include 'class/autoloader.php';?>
<?php 
//Variable temporaire
$idprof = 1;
$firstname = 'Alexis';
$lastname = 'Verquin';



?>

<section id="home">
    
       
     <div id="panel">
        <div class="classe">
            <h2>Vos Classe : </h2>
            <table>
                <thead>
                    <tr>
                        <td>Classe</td>
                        <td>Nombres eleves</td>
                        <td>Date relevé de notes</td>
                        <td>Acces</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DEV9</td>
                        <td>19</td>
                        <td>19/01/2017</td>
                        <td><button type="submit" class="btn-tab" id="valid" name="valid">Acceder au detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
            <?php if(isset($selectedClass)): ?>
                <div class="classNoSelect">
                    <h1>Selectionnez votre classe</h1>
                </div>
                
            <?php else: ?>
                <div class="classSelect">
                    <h1>Classe : $classe a mettre</h1>
                    <?php
                        include 'class/access.php';
                        $stmt = new Access();
                        $stmt->new_cnx();
                        $stmt->select_all('id_administrator', 'aston_administrator');
                        echo '<pre>';
                        var_dump($stmt);
                        echo '</pre>';
                    ?>
                    
                </div>
            <?php endif; ?>
        
    </div>
    
       

       
    
    
   
</section>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/foot.php'; ?>