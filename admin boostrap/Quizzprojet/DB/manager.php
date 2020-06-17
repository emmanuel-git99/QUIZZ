<?php 
 $bdd=new PDO('mysql:host=127.0.0.1;dbname=quizz','root','');
 if(isset($_POST['inscription'])){

    if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mdp']) AND !empty($_POST['login']) AND !empty($_POST['email'])AND !empty($_POST['mdp2'])) {
    	# code...
    	$prenom = htmlspecialchars($_POST['prenom']);
    	$nom = htmlspecialchars($_POST['nom']);
    	$mdp = sha1(($_POST['mdp']));
    	$login = htmlspecialchars($_POST['login']);
    	$email = htmlspecialchars($_POST['email']);
    	$mdp2 = sha1(($_POST['mdp2']));

    	$loginlength = strlen($login);

    	if ($loginlength <= 25) 
    	{

    		if (filter_var($email, )) 
    		{
    			if ($mdp == $mdp2) 
    			{
    			# code...
    				$insertmbr = $bdd->prepare("INSERT INTO membre(prenom, nom, mdp, login, email) VALUES(?, ?, ?, ?, ?) ");
    				$insertmbr->execute(array($prenom,$nom, $mdp, $login, $email));
    				$erreur = "votre compte a bien ete creer";
    		    }
                else
                {
    			   $erreur = "Les deux mots de passe ne correspondent pas";
    		    }
    		}
    		else
    		{
    			$erreur = "Votre Addresse email n'est pas valide";

    		}
    		
    	}
    	else{

    		$erreur = "votre pseudo ne doit pas depasser 25 caracteres";
    	}
    }else{
    	$erreur = "Tous les champs doivent etre remplis";
    }
    

 }
