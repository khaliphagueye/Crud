<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="bootstrap.css" rel="stylesheet">
    <title>Todo_List</title>
</head>
<body style="background-image: url(image/background.jpg);">
<?php require_once 'bd.php' ?>
<?php
    if (isset($_SESSION['message'])) :
 ?>
 <div class="alert alert-<?=$_SESSION['msg_type'] ?>" >
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']); 
        ?>
 </div>
 <?php endif ?>
<?php
    $mysqli = new mysqli('localhost', 'root', '', 'todo_list') or die(mysqli_error($mysqli));
    $resultat = $mysqli->query("SELECT * FROM info ") or die($mysqli->error);

?>
<div class="container">
<div class="row justify-content-center ">
    <form action="bd.php" method="post">
        
        <input type="hidden" name="id" value =" <?php echo $id; ?>">
        <div class="form-group">
            
            <input class="form-control"  type="text" name="nom" value="<?php echo $nom; ?>" placeholder="Nom  *" required="required" data-validation-required-message="Svp entrez votre nom.">
        </div>
        <div class="form-group">
           
            <input type="text" name="prenom" value="<?php echo $prenom; ?>" class="form-control"placeholder="Prenom *" required="required" data-validation-required-message="Svp entrez votre nom." >
        </div>
        <div class="form-group">
          
            <input type="text" name="niveau" class="form-control" value="<?php echo $niveau; ?>" placeholder="Niveau d'étude *" required="required" data-validation-required-message="Svp entrez votre nom.">
        </div>
        <div class="form-group">
            
            <input type="text" name="domaine" class="form-control" value="<?php echo $domaine; ?>" placeholder="Domaine d'étude *" required="required" data-validation-required-message="Svp entrez votre nom.">
        </div>
        <div class="form-group">
            <?php if ($misAjour==true) :   ?>
                <button type="submit " class="btn btn-warning btn-xl text-uppercase" name="misajour">Modifier</button>
            <?php else: ?>    
            <button type="submit " class="btn btn-success btn-xl text-uppercase" name="valider">Valider</button>
            <?php endif ?>
        </div>
        
    </form>
    </div>
<div class="row justify-content-center" style = "text-color:'white'">
    <table class="table">
    <caption>La liste des étudiants</caption>
        <thead>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>NIVEAU D'ETUDE</th>
                <th>DOMAINE D'ETUDE</th>
                <th colspan="2">ACTION</th>
            </tr>
        </thead>

<?php
    while ($row = $resultat->fetch_assoc()):
 ?>
 <tr>
    <td><?php echo $row['nom']; ?></td>
    <td><?php echo $row['prenom']; ?></td>
    <td><?php echo $row['niveau']; ?></td>
    <td><?php echo $row['domaine']; ?></td>
    <td>
        <a href="todo_list.php?modifier= <?php echo $row['id']; ?> " class="btn btn-info">Modifier </a>
        <a href="bd.php?supprimer= <?php echo $row['id']; ?> " class="btn btn-danger">Supprimer </a>
    </td>
 </tr>
 
 <?php endwhile ?>
 </table>

    </div>
</body>
</html>