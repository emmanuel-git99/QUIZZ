<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Home admin</title>
        <link rel="stylesheet" type="text/css" href="css/Creer_Question.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <script type="text/javascript">

     window.onload = function() {
            setTimeout(function(){ 
                    document.getElementById("alert").style.display='none';
                }, 3000);
            }
        </script>
        
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
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="lab_nom">TOUKAS</label></div>
                    </a>
                </div>
            </div>
            <div class="div_menu"> 
               
                <a href="Liste_Question.php"><div class="li  sm_1" style="background-image:url(image/ic-liste.png);"><span>Liste Questions</span></div></a>
                <a href="AdminPage.php"><div class="li  sm_2" style="background-image: url(image/ic-ajout.png);" >Créer Admin</div></a>
                <a href="Liste_Question.php"><div class="li  sm_3" style="background-image:url(image/ic-liste.png);">Liste joueurs</div></a>
                <a href="Creer_Question.php"> <div class="li  sm_4 "style="background-image:url(image/ic-liste-active.png);">Créer Questions</div></a>
            </div>
        </div>

        <div class="rotate_page">
                
		<link rel="stylesheet" type="text/css" href="public/css/styleCQ.css">
<div class="contain_pl">
	    <h2 class="h2">Parametrer votre question 2</h2>
	    <div class="contain_sub">
		        <form method="POST" id="mainform"action="index.php?origin=admin" onsubmit="return validate();" name="mainform" >
		            <div class="div_question">
		                <label>Questions</label>
                        <textarea name="question"  onkeyup='removeErrorTxt("error_1")' id="question" error='error_1'></textarea>
                        <small class="error" id='error_1'></small>
		            </div>
		            <div class="div_score">
		                <label>Nbr de point </label><input id="score" type="text" error='error_2' name="score" />
                        <small class="error" id='error_2'></small>
                    </div>
		            <div class="div_type">
		                <label>Type de reponse </label>
		                <select name="type" id="type" >
		                    <option value="cm">choix multiple</option>
		                    <option value="cs">choix simple</option>
		                    <option value="ct">choix text</option>
		                </select>
		                <span><input style="background-image:url(image/ic-ajout-réponse.png);" type="button" class="btn_gene"  id="btn_gene"  value="&nbsp;" ></span>
		            </div>
		            <br>
		            <span id="div_reponse" >
                    </span>
                    <small id="general_error" class="error"> </small>
		            <input type="submit" class="btn_enr" name="register_question" value="Enregistrer"/>
		        </form>
	    </div>
</div>


<script type="text/javascript" src="public/js/validationInput.js"></script>
<script type="text/javascript" src="public/js/validateQuestion.js"></script>
        </div>
    </div>
        </div>
    </div>

    <script type="text/javascript" src="./public/js/modal.js"></script>
        <div>
    </body>
</html>