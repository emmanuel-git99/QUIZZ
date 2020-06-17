<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Home admin</title>
        <link rel="stylesheet" type="text/css" href="css/Liste_Joueur.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
    
            
    <body  style="background-image:url(image/img-bg.jpg);">
        <div class="transparent">
        <header>
            <nav>
                <div class="logo"></div>
                <div style="" class="titre">Le plaisir de jouer</div> 
                <img src="image/logo.png">
            </nav>
                    </header>
            <div class="container">
        <div class="box w92">
            <div class="head_box">
                                <p><br>Créer et paramétrer vos quizz</p>
                <!-- The Modal -->
<link rel="stylesheet" type="text/css" href="./public/css/modal.css">
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
                    <a href="">
                        <div>&nbsp;&nbsp;&nbsp;<label class="lab_prenom ">emmanuel</label></div>
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="lab_nom">TOUKAS</label></div>
                    </a>
                </div>
            </div>
            <div class="div_menu"> 
        
                <a href="Liste_Question.php"><div class="li  sm_1" style="background-image:url(image/ic-liste.png);"><span>Liste Questions</span></div></a>
                <a href="AdminPage.php"><div class="li  sm_2" style="background-image: url(image/ic-ajout.png);" >Créer Admin</div></a>
                <a href="Liste_Joueur.php"><div class="li  sm_3" style="background-image:url(image/ic-liste-active.png);">Liste joueurs</div></a>
                <a href="Creer_Question.php"> <div class="li  sm_4 "style="background-image:url(image/ic-ajout.png);">Créer Questions</div></a>
            </div>
        </div>

        <div class="rotate_page">
                <!-- The Modal -->
<link rel="stylesheet" type="text/css" href="modal.css">
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <p class="big_font" id="id_title">Changer Statut Joueur</p>
    </div>
    <div class="modal-body">
      <p class='col_r' id='id_msg'>Vous étes sur de changer le statut du Joueur</p>
    </div>
    <div class="modal-footer ">
      <button id='close1' class='close1 ipbtn col_r'> Annuler</button> <a id="ref_id" href="#"> <button name='submit' class="ipbtn float_r" >Confirmer</button></a>
    </div>
  </div>

</div>	<div class="contain_pl">
	    <h2 class="h2">Listes des joueurs par score</h2>
	    <div class="contain_sub">

							<table class="table">
					<caption> </caption>
				<tr><th scope="col">Nom</th><th scope="col">Prénom</th><th scope="col">Score</th></th>
										<tr><td style=' text-transform: uppercase;'>JEREMY</td><td style=' text-transform: capitalize;'>JETO</td><td>90pts</td><td> <span onclick="removeUser(17)">&#x274C;</span> &nbsp;&nbsp;&nbsp;
						<span onclick='changeStatut(17);'>&#128275;</span>							</td></tr>
													<tr><td style=' text-transform: uppercase;'>RAMA</td><td style=' text-transform: capitalize;'>MARAFA</td><td>85pts</td><td> <span onclick="removeUser(8)">&#x274C;</span> &nbsp;&nbsp;&nbsp;
						<span onclick='changeStatut(8);'>&#128275;</span>							</td></tr>


                        <tr><td style=' text-transform: uppercase;'>EMMANUEL</td><td style=' text-transform: capitalize;'>GLOIRE</td><td>76pts</td><td> <span onclick="removeUser(17)">&#x274C;</span> &nbsp;&nbsp;&nbsp;
                        <span onclick='changeStatut(17);'>&#128275;</span>                          </td></tr>
                                                    <tr><td style=' text-transform: uppercase;'>GUEYE</td><td style=' text-transform: capitalize;'>Aminata</td><td>55pts</td><td> <span onclick="removeUser(8)">&#x274C;</span> &nbsp;&nbsp;&nbsp;
                        <span onclick='changeStatut(8);'>&#128275;</span>                           </td></tr>


                        <tr><td style=' text-transform: uppercase;'>Hakeem</td><td style=' text-transform: capitalize;'>OLAJUWON</td><td>49pts</td><td> <span onclick="removeUser(17)">&#x274C;</span> &nbsp;&nbsp;&nbsp;
                        <span onclick='changeStatut(17);'>&#128275;</span>                          </td></tr>
                                                    <tr><td style=' text-transform: uppercase;'>ADAMA</td><td style=' text-transform: capitalize;'>GUEYE</td><td>47pts</td><td> <span onclick="removeUser(8)">&#x274C;</span> &nbsp;&nbsp;&nbsp;
                        <span onclick='changeStatut(8);'>&#128275;</span>                           </td></tr>
											</table>
					        
	    </div>

        <div class="div_nav">
			
		                <a href='index.php?origin=admin&action=joueurs&p=6' class='ipbtn float_r'>Suivant</a>           
                     </div>
	</div>
          </div>
    </div>
        </div>
    </div>
        <div>
    </body>
</html>