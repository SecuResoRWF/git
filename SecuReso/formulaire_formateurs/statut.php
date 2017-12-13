<?php


include("fonctions.php");


if(isset($_POST['statut'])){
    $statut=$_POST['statut'];
}

//Valeur par défaut à l'arrivée

else{
    $statut="projet_professionnel";
}
?>

<html>
    <head>
        
        <title>Actuellement:</title>	
	    <meta charset="utf-8">

    </head>

    <body>
        
	 <form name="statut" method="POST" action="statut.php">
    <select name="choix">
          <option value="projet_professionnel" <?php if($statut =='projet_professionnel'){echo 'selected';}?>
        >>Projet professionnel </option>
          <option value="independant" <?php if($statut =='independant'){echo 'selected';}?>
        >>Indépendant(e) </option>
          <option value="salarie" <?php if($statut =='salarie'){echo 'selected';}?>
        >>Salarié(e) </option>
          <option value="formation" <?php if($statut =='formation'){echo 'selected';}?>
        >>Formation</option>
          <option value="disponible" <?php if($statut =='disponible'){echo 'selected';}?>
        >>Disponible </option>
    </select>
        
        <input type="submit" name="Valider" value="OK"><br/>
        <input type="submit" name="Quitter" value="Retour à la page d'acceuil">
    </form>
        

        <?php
        if (isset ($_POST['Valider'])){

            $projet_professionnel=$_POST['projet_professionnel'];
            $independant=$_POST['independant'];
            $salarie=$_POST['salarie'];
            $formation=$_POST['formation'];
            $disponible=$_POST['disponible'];

            connectforumprojet();
 
            $sql = 'INSERT INTO statut VALUES(null,"'.$projet_professionnel.'","'.$independant.'","'.$salarie.'","'.$formation.'","'.$disponible.'")'; 
 
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

            mysql_close();
        }
        ?>

    </body>
</html>