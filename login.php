<?php
session_start();
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $prenom = $_POST['prenom'];
    $code = $_POST['code'];

    $db = new PDD('mysql:host=localhost;dbname=quizz', 'root','');

    $sql = "SELECT * FROM user where  prenom='$prenom' "; //on vérifie si le prenom est déja utilisé ou
    $result = $db->prepare($sql);
    $result->execute();

    if ($result-rowCount() >0) {
        $data = $result->fetchAll();
        if(password_verify($prenom , $data[0]["prenom"]))
        {
            echo  "bgggg";
            $_SESSION["prenom"]= $prenom;
            $_SESSION["nom"]=$name;
            $_SESSION['code'] = $code;
            header("Location:create_quizz.php");
            exit;
            
        }
        
    
    else {
        echo 'compte introuvable';
    }
    }
}
?>