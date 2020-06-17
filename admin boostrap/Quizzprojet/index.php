<?php
session_start(); 
 $bdd =new PDO('mysql:host=127.0.0.1;dbname=quizz','root','');
 if (isset($_POST['formconnexion'])) {
     # code...
    $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
    $mdpconnect =sha1(($_POST['mdpconnect']));

    if (!empty($pseudoconnect) AND !empty($mdpconnect)) {
        # code...
        $req = $bdd->prepare("SELECT * FROM membre WHERE login =? AND mdp = ?");
        $req->execute(array($pseudoconnect, $mdpconnect));
        $userexist = $req->rowCount();
        if ($userexist == 1) {
            $userinfo = $req->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['login'] = $userinfo['login'];
            $_SESSION['mdp']= $userinfo['mdp'];
            $_SESSION['email'] = $userinfo['email'];
            header("Location: Liste_Joueur.php?id=" .$_SESSION['id']);
            # code...
        }
        else{
            $erreur ="Mot de passe ou Mail incorect" ;
        }
    }else{
         $erreur = "CE champ est a remplir";
    }
 }

 ?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Se connecter</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
        <script type="text/javascript">

     window.onload = function() {
            setTimeout(function(){ 
                    document.getElementById("alert").style.display='none';
                }, 3000);
            }
        </script>
    <body style="background-image: url(image/img-bg.jpg);">
        <div class="transparent">
        <header>
            <nav style="background-image: url(image/logo.png);">
                <div class="logo" ></div>
                <div class="titre">Le plaisir de jouer</div>
            </nav>
                    </header>
        
            <p>
                <br><br>
            </p>
            <div class="box w50">
                <div class="head_box">
                   <span class="labhead">Login Form</span>
                </div>
                <div class="body_box">
                    <form action="index.php?origin=login" id="form_login" method="post">
                        <div class="div_input"><input class="iptxt iplogin" error="error-1" type="text" name="pseudoconnect" placeholder="Login"value="" ><div id="error-1" class="input_alert"></div> </div>
                        <div  class="div_input "><input style="background-image: url(image/lock-security-pad-key.png);" class="iptxt ippwd" error="error-2" type="password" name="mdpconnect" placeholder="Password" ><div id="error-2" class="input_alert"></div> </div>
                        <div class="div_input"><Button class="ipbtn" type="submit" name="formconnexion" >Connexion</button>&nbsp;&nbsp;&nbsp;<a href="inscription.php"><small>s'inscrire pour jouer</small></a></div>
                    </form>

                    <?php 
                     if (isset($erreur)) {
                        # code...
                        echo '<font color = "red">'.$erreur.'</font>';
                     }


                     ?>
           
                </div>
            </div>
            <script>
                const inputs = document.getElementsByTagName("input");
                for(input of inputs)
                {
                    input.addEventListener("keyup",function(e)
                    {
                        if(e.target.hasAttribute("error"))
                        {
                            var idDivError=e.target.getAttribute("error");
                            document.getElementById(idDivError).innerText="";
                        }
                    })
                }

                document.getElementById("form_login").addEventListener("submit",function(e)
                {   
                    const inputs=document.getElementsByTagName("input");
                    var error=false;
                    for(input of inputs)
                    {
                        if(input.hasAttribute("error"))
                        {
                            var idDivError = input.getAttribute("error");
                            if(!input.value.trim())
                            {
                                input.value="";
                                document.getElementById(idDivError).innerText='ce champ est obligatoitre';
                                error=true;
                            }
                        }

                    }
                    if(error)
                    {
                        e.preventDefault();
                        return false;
                    }
                })
            </script>
        <div>
    </body>
</html>