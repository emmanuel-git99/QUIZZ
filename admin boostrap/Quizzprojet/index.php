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
                        <div class="div_input"><input class="iptxt iplogin" error="error-1" type="text" name="username" placeholder="Login"value="" ><div id="error-1" class="input_alert"></div> </div>
                        <div  class="div_input "><input style="background-image: url(image/lock-security-pad-key.png);" class="iptxt ippwd" error="error-2" type="password" name="password" placeholder="Password" ><div id="error-2" class="input_alert"></div> </div>
                        <div class="div_input"><Button class="ipbtn" type="submit" name="connexion" >Connexion</button>&nbsp;&nbsp;&nbsp;<a href="inscription.php"><small>s'inscrire pour jouer</small></a></div>
                    </form>
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