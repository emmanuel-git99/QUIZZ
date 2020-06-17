<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Home admin</title>
        <link rel="stylesheet" type="text/css" href="css/Liste_Question.css">
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
                        <div>&nbsp;&nbsp;&nbsp;<label class="lab_prenom ">moussa</label></div>
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="lab_nom">ndiaye</label></div>
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
                <link rel="stylesheet" type="text/css" href="public/css/styleBreadcrumb.css">
        
<div class="contain_pl">
        
        <div class="div_head">
            <span>
                <form id="form-number" onsubmit="return isNumbervalide()" action="index.php?origin=admin" method="POST">
                    Nbr de question/jeu
                    <input type="text"id="nombre" class="inNumber" name="nbrQJ"  value="5"/>
                    <input type="submit" name="rnbrQuestion" value="OK"/>
                </form>
            </span>
        </div>
            <span id="error_number"><br></span>
        <br><br>
        <div class="contain_sub">

            			   		<div class='ol'>
											<div><input type="checkbox" name="check" class="mod" id="q_check_0" value="0"></span><span id='error_glob_0'></span>
							1							<div id="0">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_0">Que signifie PHP </strong>
							<input type="hidden" id="data_0" typeChoix="cm" score="9" nbrRep="4"/>
			            	
					   
				<ul class='ul admin'>
										<label class="c_rep sm_font" id="rep_0_1">Personal Home Page<input type="checkbox" id="chk_0_1" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_0_2">Hypertext Preprocessor<input type="checkbox" id="chk_0_2" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_0_3">Pretext Hypertext Processor<input type="checkbox" id="chk_0_3" disabled  name="rep_user[]" value=""
							/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_0_4">Preprocessor Home Page<input type="checkbox" id="chk_0_4" disabled  name="rep_user[]" value=""
							/>
							<span class="check" ></span>
						</label>
									</ul>
									
						</div>
													<div><input type="checkbox" name="check" class="mod" id="q_check_1" value="1"></span><span id='error_glob_1'></span>
							2							<div id="1">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_1">le pays le plus peuplé </strong>
							<input type="hidden" id="data_1" typeChoix="cs" score="9" nbrRep="4"/>
			            	
					   					<ul>
										<label class="c_rep sm_font" id="rep_1_1">chine<input type="radio" disabled id="chk_1_1" name="rep_user2[]" 
								checked								/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_1_2">senegal<input type="radio" disabled id="chk_1_2" name="rep_user2[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_1_3">maroc	<input type="radio" disabled id="chk_1_3" name="rep_user2[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_1_4">tunisie<input type="radio" disabled id="chk_1_4" name="rep_user2[]" 
																/>
								<span class="checkmark"></span>
							</label>	
												</ul>
												
						</div>
													<div><input type="checkbox" name="check" class="mod" id="q_check_2" value="2"></span><span id='error_glob_2'></span>
							3							<div id="2">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_2">Lequel des éléments suivants doit être installé sur votre ordinateur pour exécuter des scripts PHP </strong>
							<input type="hidden" id="data_2" typeChoix="cm" score="8" nbrRep="4"/>
			            	
					   
				<ul class='ul admin'>
										<label class="c_rep sm_font" id="rep_2_1">Adobe Dreamweaver<input type="checkbox" id="chk_2_1" disabled  name="rep_user[]" value=""
							/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_2_2">PHP<input type="checkbox" id="chk_2_2" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_2_3">Apache<input type="checkbox" id="chk_2_3" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_2_4">IIS<input type="checkbox" id="chk_2_4" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
									</ul>
									
						</div>
													<div><input type="checkbox" name="check" class="mod" id="q_check_3" value="3"></span><span id='error_glob_3'></span>
							4							<div id="3">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_3">Quelle version de PHP a introduit Try/catch Exception </strong>
							<input type="hidden" id="data_3" typeChoix="cs" score="7" nbrRep="4"/>
			            	
					   					<ul>
										<label class="c_rep sm_font" id="rep_3_1">PHP 4<input type="radio" disabled id="chk_3_1" name="rep_user4[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_3_2">PHP 5	<input type="radio" disabled id="chk_3_2" name="rep_user4[]" 
								checked								/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_3_3">PHP 5.3<input type="radio" disabled id="chk_3_3" name="rep_user4[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_3_4">PHP 7.2<input type="radio" disabled id="chk_3_4" name="rep_user4[]" 
																/>
								<span class="checkmark"></span>
							</label>	
												</ul>
												
						</div>
													<div><input type="checkbox" name="check" class="mod" id="q_check_4" value="4"></span><span id='error_glob_4'></span>
							5							<div id="4">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_4">Laquelle parmi les instructions php suivantes va stocker 55 dans la variable nbr </strong>
							<input type="hidden" id="data_4" typeChoix="cs" score="9" nbrRep="4"/>
			            	
					   					<ul>
										<label class="c_rep sm_font" id="rep_4_1">int $nbr= 55;	<input type="radio" disabled id="chk_4_1" name="rep_user5[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_4_2">int nbdfqjr = 55;				<input type="radio" disabled id="chk_4_2" name="rep_user5[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_4_3">$nbr= 55;			<input type="radio" disabled id="chk_4_3" name="rep_user5[]" 
								checked								/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_4_4">55= $nbr		<input type="radio" disabled id="chk_4_4" name="rep_user5[]" 
																/>
								<span class="checkmark"></span>
							</label>	
												</ul>
												
						</div>
											</div>
					        
	    </div>

        <div class="div_nav">
                            <a href='index.php?origin=admin&action=listQuestion&p=2' class='ipbtn float_r'>Suivant</a>           
                </div>
</div>
<script type="text/javascript" src="./public/js/validateNumber.js"></script>
<script type="text/javascript" src="./public/js/updateQuestion.js"></script>        </div>
    </div>
        </div>
    </div>

    <script type="text/javascript" src="./public/js/modal.js"></script>
        <div>
    </body>
</html>