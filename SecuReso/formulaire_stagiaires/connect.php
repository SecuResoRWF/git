<?php
    try{	
        $bdd = new PDO('mysql:host=localhost;dbname=projet','root','phoenixwillneverdie21');
}
    catch (Exception $e){
        die('Erreur : '.$e->getmessage());
}
?>