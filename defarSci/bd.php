<?php

session_start();
$misAjour = false;
$id = 0;
$nom = '';
$prenom = '';
$niveau = '';
$domaine = '' ;
$mysqli = new mysqli('localhost', 'root', '', 'todo_list') or die(mysqli_error($mysqli));
if(isset($_POST['valider'])){
    $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $niveau=$_POST['niveau'];
   $domaine=$_POST['domaine'];
  
   $mysqli->query("INSERT INTO info(nom, prenom, niveau, domaine) VALUES('$nom', '$prenom', '$niveau', '$domaine' )") or die($mysqli->error);
   $_SESSION['message'] = "";
   $_SESSION['msg_type']= "";
   header("location: todo_list.php");
}
if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    $mysqli->query("DELETE FROM info WHERE id=$id") or die($mysqli_error);
    $_SESSION['message'] = "";
   $_SESSION['msg_type']= "";
   header("location: todo_list.php");
}
if (isset($_GET['modifier'])) {
    $id = $_GET['modifier'];
    $misAjour = true;
    $resultat=$mysqli->query("SELECT * FROM info WHERE id=$id") or die($mysqli->error());
    if (count($resultat)==1) {
        $row = $resultat->fetch_array();
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $niveau=$row['niveau'];
        $domaine=$row['domaine'];
    }
}
if (isset($_POST['misajour'])) {
    $id = $_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $niveau=$_POST['niveau'];
    $domaine=$_POST['domaine'];
    $mysqli->query("UPDATE info SET nom='$nom', prenom = '$prenom', niveau = '$niveau', domaine = '$domaine' WHERE id=$id") or die ($mysqli->error);
    $_SESSION['message'] = "";
    $_SESSION['msg_type']= "";
    header("location: todo_list.php");
}
?>