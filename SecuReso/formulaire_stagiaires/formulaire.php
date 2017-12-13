<?php
    include('connect.php');			 
 ?>    
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8" />
    </head>
    <body>
        <form name="inscription_rwf" method="POST" action="formulaire.php">
        <h1>POUR VOUS INSCRIRE :</h1>
                           
        <fieldset>  
            <legend>Veuillez saisir les informations vous concernant : </legend>
            <label>Prénom : <input type="text" name="prenom" class="input"/><br/></label>          
            <label>Nom : <input type="text" name="nom"/maxlenght=400px class="input"><br/></label>
            <label>Adresse mail: <input type="text" name="mail" class="input"/><br/></label>
            <label>Numéro de tél.: <input type="text" name="tel"maxlenght="10" class="input"/><br/></label>
            <label>Ville de domiciliation : <input type="text" name="ville" class="input"/><br/></label>
            <label>Date de naissance : <input type="text" name="naissance" placeholder="JJ/MM/AAAA" class="input"/><br/></label>
        </fieldset>
        
        <fieldset>
            <br/>
            <legend>Votre projet professionel</legend>
            <input type="checkbox" name="independant" id="independant" value="oui">independant<br>
            <input type="checkbox" id="salarie" name="salarie" value="oui">salarié(e)<br>
            <input type="checkbox" id="formation" name="formation" value="oui">formation<br>
            <input type="checkbox" id="disponnible" name="disponnible" value="oui">disponnible<br>
        </fieldset>
        
        <fieldset>
            <label>Login choisi: <input type="text" name="login" class="input"/><br/></label>
            <label>Mot de passe choisi: <input type="text" name="pass" class="input"/><br/></label>
        </fieldset>
        
        <fieldset class="mobilité">
            <legend>Question mobilité : </legend> 
            <p> Avez-vous le permis de conduire ?
            Oui<input type="radio" name="permis" value="oui" id="permis"/>
            Non<input type="radio" name="permis" value="non" id="permis"/>
            </p><br/>
            <p> Possédez-vous un véhicule ?
            Oui<input type="radio" name="vehicule" value="oui" id="vehicule"/>
            Non<input type="radio" name="vehicule" value="non" id="vehicule"/>
            </p><br/>                                  
      
        </fieldset>     
            <input type="submit" name="valider" value="Envoyer" class="btn"/>
        </form>
<?php

    if (isset ($_POST['valider'])){
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $ville=$_POST['ville'];
        $naissance=$_POST['naissance'];
        $independant=$_POST['independant'];
        $salarie=$_POST['salarie'];
        $formation=$_POST['formation'];
        $disponnible=$_POST['disponnible'];
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $permis=$_POST['permis'];
        $vehicule=$_POST['vehicule'];

        $bdd->exec('INSERT INTO stagiaires VALUES(NULL,"'.$prenom.'","'.$nom.'","'.$mail.'","'.$tel.'","'.$ville.'","'.$naissance.'","'.$independant.'","'.$salarie.'","'.$formation.'","'.$disponnible.'","'.$login.'","'.$pass.'","'.$permis.'","'.$vehicule.'")');
}
?>
    </body>
</html>