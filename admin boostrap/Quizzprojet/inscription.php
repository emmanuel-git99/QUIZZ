<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>S'inscrire</title>
<script type="text/javascript">

     window.onload = function() {
            setTimeout(function(){ 
                    document.getElementById("alert").style.display='none';
                }, 3000);
            }
        </script>

        <link rel="stylesheet" type="text/css" href="css/inscription.css">
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
        <div class="content_inscription">
    
<link rel="stylesheet" type="text/css" href="public/css/styleInscription.css">      
<div class="div1_1">
                <div class="div2_1">
            <div class="box_left_1">
                <div class="width_90_1">
                    <span class="h2">s'inscrire</span><br>
                    <small>Pour tester votre niveau de culture générale </small>
                    <hr/>
                    <form action="inscription.php" method="post" id="form_register" enctype="multipart/form-data">
                        <input type="hidden" name="profil" value="user"/>
                        <small for="prenom">Prénom</small><small id="error_1" class="input_alert float_r"></small>
                        <span class="error" id="erreurprenom"></span>
                        <div class="div_input_1"><input class="iptxt_1 iplogin_1" id="er" error="error_1" type="text" name="prenom" value=""/></div>
                        <small for="nom">Nom</small><small id="error_2" class="input_alert float_r"> </small>
                        <span class="error" id="erreurnom"></span>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" error="error_2"  type="text" name="nom" value="" /></div>
                        <small for="login">Login</small><small id="error_3" class="input_alert float_r"> </small>
                        <span class="error" id="erreurlogin"></span>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" error="error_3"  type="text" name="login" /></div>
                        <small for="password">Password</small><small id="error_4" class="input_alert float_r"> </small>
                        <span class="error" id="erreurpassword"></span>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1"  error="error_4" id="pwd"  type="password" name="pwd" /></div>
                        <small for="lastname">Confirm password</small><small id="pwd_ctxt" class="input_alert float_r"></small>
                        <div class="div_input_1 "><input class="iptxt_1 ippwd_1" type="password" id="pwd_c" name="confirmpwd" /></div>
                        <div class="div_input_1 "><label class="float_f">Avatar</label><label class="file float_r"  for="imgUser">choisir une image<input class="fileBtn_1 float_r" error="error_f" type="file" onchange="prevUpload()" name="imgUser" id="imgUser" accept="image/png, image/jpeg"/></label></div>
                        <div class="div_input_1"><button class="ipbtn_1" type="submit" name="inscription" >Créer compte</button>&nbsp;&nbsp;&nbsp;
                                                    <a href="index.php" class="a"><small>Se connecter</small></a>
                                                </div>
                    </form>
                    <script>

                const inputs = document.getElementsByTagName("input");
                for(input of inputs)
                {
                    input.addEventListener("keyup",function(e)
                    {
                        if(e.target.hasAttribute("error"))
                        {
                            var idDivError=e.target.getAttribute("error");
                            if(e.target.getAttribute("type")=="password")
                            {
                                if(e.target.value.length < 5)
                                {
                                    document.getElementById(idDivError).innerText="Doit contenir au moins 5 caracteres";
                                }
                                else
                                {
                                    document.getElementById(idDivError).innerText="";
                                }
                            }
                            else
                            {
                                document.getElementById(idDivError).innerText="";
                            }
                        }
                    })
                }

            document.getElementById("pwd_c").addEventListener("keyup",function()
            {
                var pwd=document.getElementById("pwd").value;
                var pwd_c=document.getElementById("pwd_c").value;
                if(pwd_c===pwd)
                {
                    document.getElementById('pwd_ctxt').innerText="";

                }
                else
                {
                    document.getElementById('pwd_ctxt').innerText="les mots de passes ne sont pas identiques";

                }
            });

                document.getElementById("form_register").addEventListener("submit",function(e)
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
                                if(input.type==='file')
                                {
                                    document.getElementById(idDivError).innerText='choisir une photo';
                                }
                                else
                                {
                                    document.getElementById(idDivError).innerText='ce champ est obligatoitre';
                                }
                                error=true;
                            }
                        }

                    }

                    
                    var pwd=document.getElementById("pwd").value.trim();
                    var pwd_c=document.getElementById("pwd_c").value.trim();
                    errorpwd=false;
                    if(pwd!==pwd_c || pwd.length<5)
                    {
                        document.getElementById('error_4').innerText="le mot de passe doit avoir au moins 5 caracteres";
                        errorpwd=true;
                    }
                    
                    if(error || errorpwd)
                    {
                        e.preventDefault();
                        return false;
                    }
                })

                function prevUpload()
                {
                    document.getElementById('error_f').innerText="";
                    var file = document.getElementById("imgUser").files[0];
                    var reader = new FileReader();
                    if (file) {
                        reader.readAsDataURL(file);
                        reader.onloadend = function () {
                        document.getElementById("avatar").src = reader.result;
                        }
                    }
                    }
            </script>
            
                </div>
            </div>
            <div class="box_right_1">
                <img class="imgProfil_1" alt='logo' id="avatar" src="image/avatar1.png">
                
                <p class="center">Avatar du joueur <br><small id="error_f" class="input_alert float_r"> </small></p>
            </div>
            </div>
            </div>
</div>
        <div>

    </body>
</html>