<?php 
 include('DB/manager.php');

?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Home admin</title>
        <style type="text/css"> 
           .error{
           	color: red;
           	margin-left: 200px;
           }

        </style>
        <link rel="stylesheet" type="text/css" href="css/AdminPage.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <body  style="background-image:url(image/img-bg.jpg);">
        <div class="transparent">
        <header>
            <nav>
                <div class="logo"></div>
                <div class="titre">Le plaisir de jouer</div>
            </nav>
                    </header>
            <div class="container">
        <div class="box w92">
            <div class="head_box">
                                <p><br>Créer et paramétrer vos quizz</p>
           
<link rel="stylesheet" type="text/css" href="./public/css/modal.css">
<div id="myModal" class="modal">

  
  <div class="modal-content">
    <div class="modal-header">
      <span class="close cl">&times;</span>
      <p class="big_font">Déconnexion!</p>
    </div>
    <div class="modal-body">
      <p class='col_r'> Vous étes sur de vouloir vous déconnectez</p>
    </div>
    <div class="modal-footer ">
      <button class='close ipbtn col_r'> Annuler</button> <a id="href_id" href="index.php?origin=deconnexion"> <button name='submit' class="ipbtn float_r" >Confirmer</button></a>
    </div>
  </div>

</div>               
                    <button class="ipbtn pos_abs float_r" id="myBtn" >Déconnexion</button>
                
            </div>
                   <link rel="stylesheet" type="text/css" href="public/css/homeAdmin.css">
       <link rel="stylesheet" type="text/css" href="public/css/styleCheck.css">
       <link rel="stylesheet" type="text/css" href="public/css/styleCheckAdmin.css">
        
    <div class="body_box">
        <div class="box_menu_1">
            <div class="div_avatar_1">
                <div class="img_avatar_1">
                    <img class="w_70_h_70" alt="av" src="image/afri.png"/>
                </div>
                <div class="float_l ">
                    <br><br>
                    <a href="profil.php">
                        <div>&nbsp;&nbsp;&nbsp;<label class="lab_prenom ">emmanuel</label></div>
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="lab_nom">Toukas</label></div>
                    </a>
                </div>
            </div>
            <div class="div_menu"> 
                <a href="Liste_Question.php"><div class="li  sm_1" style="background-image:url(image/ic-liste.png);"><span>Liste Questions</span></div></a>
                <a href="AdminPage.php"><div class="li  sm_2" style="background-image: url(image/ic-ajout-active.png);" >Créer Admin</div></a>
                <a href="Liste_joueur.php"><div class="li  sm_3" style="background-image:url(image/ic-liste.png);">Liste joueurs</div></a>
                <a href="Creer_Question.php"> <div class="li  sm_4 "style="background-image:url(image/ic-ajout.png);">Créer Questions</div></a>
            </div>
        </div>

        <div class="rotate_page">
                <div class="contain_pl w100">
    
<link rel="stylesheet" type="text/css" href="public/css/styleInscription.css">      
<div class="div1_1">
                <div class="div2_1">
            <div class="box_left_1">
                <div class="largeur">
                    <span class="h2">s'inscrire</span><br>
                    <small>Proposer des Quizz </small>
                    <hr/>

                    <form name="myform" onsubmit="return validateForm()" action="" method="post" id="form_register" enctype="multipart/form-data">
                        <input type="hidden" name="profil" value="admin"/>
                        
                        <small for="prenom">Prénom</small><small id="error_1" class="input_alert float_r"></small>
                        <span class="error" id="erreurprenom"></span>
                        <div class="div_input_1"><input class="iptxt_1 iplogin_1" error="error_1" type="text" name="prenom" value="" /></div>
                        <small for="nom">Nom</small><small id="error_2" class="input_alert float_r"> </small>
                        <span class="error" id="erreurnom"></span>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" error="error_2"  type="text" name="nom" value="" /></div>
                        <small for="login">Login</small><small id="error_3" class="input_alert float_r"> </small>
                        <span class="error" id="erreurlogin"></span>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" error="error_3"  type="text" name="login" value="<?php if(isset($login)){
                        	echo $login;
                        } ?>" /></div>
                        <small for="mdp">Password</small><small id="error_4" class="input_alert float_r"> </small>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1"  error="error_4" id="mdp"  type="password" name="mdp"  /></div>
                         <small for="email">Email</small><small id="error_3" class="input_alert float_r"> </small>
                          <div class="div_input_1 "><input class="iptxt_1 ippwd_1"  error="error_4" id="email"  type="email" name="email" value="<?php if(isset($email)){
                        	echo $email;
                        } ?>"  /></div>
                         <small for="mdp2">Confirm password</small><small id="pwd_ctxt" class="input_alert float_r"></small>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" type="password" id="pwd_c" name="mdp2" /></div>
                        <div class="div_input_1 "><label class="float_f">Avatar</label><label class="file float_r"  for="imgUser">choisir une image<input class="fileBtn_1 float_r" error="error_f" type="file" onchange="prevUpload()" name="imgUser" id="imgUser" accept="image/png, image/jpeg"/></label></div>
                        
                        <div class="div_input_1"><button class="ipbtn_1" type="submit" name="inscription" >Créer compte</button>&nbsp;&nbsp;&nbsp;
                                                </div>
                    </form>
                    <script >
                    	function validateForm(){


                         var prenom = document.forms["myform"]["prenom"];
                         var nom = document.forms["myform"]["nom"];
                         var login = document.forms["myform"]["login"];
                         var password = document.forms["myform"]["password"];
                         if (prenom.value == "" && nom.value== "" && login.value =="" && password.value== "") {
                         	document.getElementById('erreurprenom').innerHTML="Ce champs est obligatoire";
                         	document.getElementById('erreurnom').innerHTML="Ce champs est obligatoire";
                         	document.getElementById('erreurlogin').innerHTML="Ce champs est obligatoire";
                         	document.getElementById('erreurpassword').innerHTML="le mot de passe doit avoir au moins 5 caracteres";
                         	prenom.focus();
                         	nom.focus();
                         	login.focus();
                         	password.focus();
                         	return false 
                         }
                         else{
                         	document.getElementById('erreurprenom').innerHTML="";
                         	document.getElementById('erreurnom').innerHTML="";
                         	document.getElementById('erreurlogin').innerHTML="";
                         	document.getElementById('erreurpassword').innerHTML="";
                         }
                         


                    	}



                    </script>
                    <?php 
                     if (isset($erreur)) {
                     	# code...
                     	echo '<font color = "red">'.$erreur.'</font>';
                     }


                     ?>
           
                </div>
            </div>
            <div class="box_right_1">
                <img class="imgProfil_1" alt='logo' id="avatar" src="image/avatar1.png">
                
                <p class="center">Avatar Admin <br><small id="error_f" class="input_alert float_r"> </small></p>
            </div>
            </div>
            </div>
</div>        </div>
    </div>
        </div>
    </div>

        <div>
    </body>

</html>