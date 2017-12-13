<?php
    include ("connect.php");

    

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formateur</title>
    <link href="css2.css" type="text/css" rel="stylesheet">
</head>
<body>
   <div class="form-style-5">
    <form name="formateurs" method="POST" action="formateurs.php">
      <h1>FORMULAIRE</h1>
       <legend><span class="number">Identité</span></legend>
        Nom: <input type="text" name="nom" ><br/>
        Prenom: <input type="text" name="prenom" ><br/>
        <legend><span class="number">Info</span></legend>
        Statut: <input type="text" name="statut"><br/>
        Email: <input type="email" name="mail"><br/>
        Tel: <input type="text" name="tel"><br/>
        Ville: <input type="text" name="ville"><br/>
        <input id="bouton" type="submit" name="valider" value="Envoyer">
    </form>
    </div>
    <?php
         if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $statut=$_POST['statut'];
            $mail=$_POST['mail'];
            $tel=$_POST['tel'];
            $ville=$_POST['ville'];
            $bdd->query('INSERT INTO formateurs VALUES (NULL,"'.$nom.'","'.$prenom.'","'.$statut.'","'.$mail.'","'.$tel.'","'.$ville.'")');
             
            
          
             }
 
    ?>
</body>
</html>