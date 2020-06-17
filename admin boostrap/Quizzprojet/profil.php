<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Home admin</title>
        <link rel="stylesheet" type="text/css" href="css/profil.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
        
    <body style="background-image:url(image/img-bg.jpg);">
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
                <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
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

</div>                <!--"index.php?origin=deconnexion" -->
                    <button class="ipbtn pos_abs float_r" id="myBtn" >Déconnexion</button>
                <!--  -->
            </div>
                   <link rel="stylesheet" type="text/css" href="css/homeAdminPage.css">
        
    <div class="body_box">
        <div class="box_menu_1">
            <div class="div_avatar_1">
                <div class="img_avatar_1">
                    <img class="w_70_h_70" alt="av" src="image/afri.png"/>
                </div>
                <div class="float_l ">
                    <br><br>
                    <a href="index.php?origin=admin&action=profilAdmin">
                        <div>&nbsp;&nbsp;&nbsp;<label class="lab_prenom ">emmanuel</label></div>
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="lab_nom">TOUKAS</label></div>
                    </a>
                </div>
            </div>
            <div class="div_menu">
                <a href="index.php?origin=admin&action=listQuestion"><div class="li  sm_1" style="background-image:url(image/ic-liste.png);"><span>Liste Questions</span></div></a>
                <a href="index.php?origin=admin&action=createAdmin"><div class="li  sm_2" style="background-image: url(image/ic-ajout.png);" >Créer Admin</div></a>
                <a href="index.php?origin=admin&action=joueurs"><div class="li  sm_3" style="background-image:url(image/ic-liste.png);">Liste joueurs</div></a>
                <a href="index.php?origin=admin&action=createQuestion1"> <div class="li  sm_4 "style="background-image:url(image/ic-ajout.png);">Créer Questions</div></a>
            </div>
        </div>

        <div class="rotate_page">
                
<link rel="stylesheet" type="text/css" href="css/inscription.css">      
<div class="div1_1">
                <div class="div2_1">
            <div class="box_left_1">
                <div class="width_90_1">
                    <span class="h2">Profil</span><br>
                    <small> </small>
                    <hr/>
                    <form action="index.php?origin=changeProfil" onsubmit="return validateChange()" method="post" id="form_register" enctype="multipart/form-data">
                        <input type="hidden" name="profil" value="admin"/>
                        <small for="fisrtname">Prénom</small><small id="error_1" class="input_alert float_r"></small>
                        <div class="div_input_1"><input class="iptxt_1 iplogin_1"  error="error_1" type="text" name="firstname" id="firstname" value="emmanuel"/></div>
                        <small for="lastname">Nom</small><small id="error_2" class="input_alert float_r"> </small>
                         <div class="div_input_1 "><input class="iptxt_1 ippwd_1" error="error_2"  type="text" name="lastname" id="lastname" value="TOUKAS" /></div>
                        <small for="lastname">Login</small><small id="error_3" class="input_alert float_r"> </small>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" error="error_3"  type="text" id='login' name="login" value="123456789" /></div>
                        <!-- <small for="lastname">Password</small><small id="error_4" class="input_alert float_r"> </small>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1"  error="error_4" id="pwd"  type="password" name="pwd" /></div>
                        <small for="lastname">Confirm password</small><small id="pwd_ctxt" class="input_alert float_r"></small>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" type="password" id="pwd_c" name="confirmpwd" /></div> -->
                        <div class="div_input_1 "><label class="float_f">Avatar</label><label class="file float_r"  for="imgUser">changer d'image<input class="fileBtn_1 float_r" error="error_f" type="file" onchange="prevUpload()" name="imgUser" id="imgUser" accept="image/png, image/jpeg"/></label></div> 
                        <div class="div_input_1"><button class="ipbtn_1" type="submit" name="changeProfil" >Actualiser</button>&nbsp;&nbsp;&nbsp;
                    
                        </div>
                    </form>
                </div>
            </div>
            <div class="box_right_1">
                <img class="imgProfil_1" alt='logo' id="avatar" src="image/avatar1.png">
                
                <p class="center">Avatar  <br><small id="error_f" class="input_alert float_r"> </small></p>
            </div>
            </div>
            </div>
</div>
    </div>
        </div>
    </div>

   
        <div>
    </body>
</html>