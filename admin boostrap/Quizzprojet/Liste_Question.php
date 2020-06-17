<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Liste questions</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    </head>
       
    <body>
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
                
<link rel="stylesheet" type="text/css" href="./assets/css/modal.css">
<div id="myModal" class="modal">

  
  <div class="modal-content">
    <div class="modal-header">
      <span class="close cl">&times;</span>
      <p class="big_font">Déconnexion</p>
    </div>
    <div class="modal-body">
      <p class='col_r'> Etes vous surs de vouloir vous déconnecter?</p>
    </div>
    <div class="modal-footer ">
      <button class='close ipbtn col_r'> Annuler</button> <a id="href_id" href="index.php?origin=deconnexion"> <button name='submit' class="ipbtn float_r" ><a href="index.html"> Confirmer</a></button></a>
    </div>
  </div>

</div>                
                    <button class="ipbtn pos_abs float_r" id="myBtn" >Déconnexion</button>

            </div>
                   <link rel="stylesheet" type="text/css" href="assets/css/homeAdmin.css">
       <link rel="stylesheet" type="text/css" href="assets/css/styleCheck.css">
       <link rel="stylesheet" type="text/css" href="assets/css/styleCheckAdmin.css">
        
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
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="lab_nom">toukas</label></div>
                    </a>
                </div>
            </div>
            <div class="div_menu"> 
                
                <a href="Liste_Question.php"><div class="li active  sm_1" ><span>Liste Questions</span></div></a>
                <a href="AdminPage.php"><div class="li  sm_2" >Créer Admin</div></a>
                <a href="Liste_Joueur.php"><div class="li  sm_3" >Liste joueurs</div></a>
                <a href="Creer_Question.php"> <div class="li  sm_4 " >Créer Questions</div></a>
            </div>
        </div>

        <div class="rotate_page">
                <link rel="stylesheet" type="text/css" href="assets/css/styleBreadcrumb.css">
        
<div class="contain_pl">
        
        <div class="div_head">
            <span>
                <form id="form-number" onsubmit="return isNumbervalide()" action="index.php?origin=admin" method="POST">
                    Nombre de questions/jeu
                    <input type="text"id="nombre" class="inNumber" name="nbrQJ"  value=""/>
                    <input type="submit" name="rnbrQuestion" value="OK"/>
                </form>
            </span>
        </div>
            <span id="error_number"><br></span>
        <br><br>
        <div class="contain_sub">

            			   		<div class='ol'>
											<div><input type="checkbox" name="check" class="mod" id="q_check_0" value="0"></span><span id='error_glob_0'></span>
							1							<div id="0">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_0">Que signifie PHP ?</strong>
							<input type="hidden" id="data_0" typeChoix="cm" score="9" nbrRep="4"/>
			            	
					   
				<ul class='ul admin'>
										<label class="c_rep sm_font" id="rep_0_1">Personal Home Page							<input type="checkbox" id="chk_0_1" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_0_2">Hypertext Preprocessor							<input type="checkbox" id="chk_0_2" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_0_3">Pretext Hypertext Processor							<input type="checkbox" id="chk_0_3" disabled  name="rep_user[]" value=""
							/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_0_4">Preprocessor Home Page							<input type="checkbox" id="chk_0_4" disabled  name="rep_user[]" value=""
							/>
							<span class="check" ></span>
						</label>
									</ul>
									
						</div>
													<div><input type="checkbox" name="check" class="mod" id="q_check_1" value="1"></span><span id='error_glob_1'></span>
							2							<div id="1">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_1">le pays le plus peuplé </strong>
							<input type="hidden" id="data_1" typeChoix="cs" score="9" nbrRep="4"/>
			            	
					   					<ul>
										<label class="c_rep sm_font" id="rep_1_1">chine								<input type="radio" disabled id="chk_1_1" name="rep_user2[]" 
								checked								/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_1_2">senegal								<input type="radio" disabled id="chk_1_2" name="rep_user2[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_1_3">maroc								<input type="radio" disabled id="chk_1_3" name="rep_user2[]" 
																/>
								<span class="checkmark"></span>
							</label>	
										<label class="c_rep sm_font" id="rep_1_4">tunisie								<input type="radio" disabled id="chk_1_4" name="rep_user2[]" 
																/>
								<span class="checkmark"></span>
							</label>	
												</ul>
												
						</div>
													<div><input type="checkbox" name="check" class="mod" id="q_check_2" value="2"></span><span id='error_glob_2'></span>
							3							<div id="2">&nbsp;&nbsp;<strong class='sm_font13 mg_2' id="qts_2">Lequel des éléments suivants doit être installé sur votre ordinateur pour exécuter des scripts PHP </strong>
							<input type="hidden" id="data_2" typeChoix="cm" score="8" nbrRep="4"/>
			            	
					   
				<ul class='ul admin'>
										<label class="c_rep sm_font" id="rep_2_1">Adobe Dreamweaver							<input type="checkbox" id="chk_2_1" disabled  name="rep_user[]" value=""
							/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_2_2">PHP							<input type="checkbox" id="chk_2_2" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_2_3">Apache							<input type="checkbox" id="chk_2_3" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
										<label class="c_rep sm_font" id="rep_2_4">IIS							<input type="checkbox" id="chk_2_4" disabled  name="rep_user[]" value=""
							checked/>
							<span class="check" ></span>
						</label>
									</ul>
									
						</div>
													
												
						</div>
													
											
					        
	    </div>

        <div class="div_nav">
                            <a href='index.php?origin=admin&action=listQuestion&p=2' class='ipbtn float_r'>Suivant</a>           
                </div>
</div>
<script>
   
function isNumbervalide()
{
    var  nombre=document.getElementById('nombre').value;
    if(!nombre || !Number.isInteger(+nombre))
    {
        document.getElementById('error_number').innerText="Veuillez entrer un nombre";
        return false;
    }else if(nombre<5)
    {
        document.getElementById('error_number').innerText="Le nombre doit etre supÃŠrieur ou ÃŠgal a 5";
        return false
    }
return true ;
}
</script>
<script>
    var dataInitial={};

var checks=document.getElementsByClassName('mod')
for(let c of checks)
{
    c.addEventListener("click",function(e){
        let idf=c.value;
        if(e.target.checked==true)
        {
            initiateForm(idf)
        }else
        {
            initialState(idf);
        }
    });
}

function updateListener()
{
    var checks=document.getElementsByClassName('mod')
    for(let c of checks)
    {
        c.addEventListener("click",function(e){
            let idf=c.value;
            if(e.target.checked==true)
            {
                initiateForm(idf)
            }else
            {
                initialState(idf);
            }
        });
    }
}

function initialState(id)
{
    document.getElementById(id).innerHTML=dataInitial[id];
    
}

function initiateForm(id)
{
    var divTarget=document.getElementById(id);
    var intialData=divTarget.innerHTML;
        dataInitial[id]=intialData;

    var form=document.createElement("form");
        form.setAttribute("id","form_"+id);
        form.setAttribute("onsubmit","return sendData('"+id+"','form_"+id+"')");

    var div_reponse=document.createElement('div');
        div_reponse.setAttribute('id','div_reponse'+id)

    var inQuestion=document.createElement("textarea");

        inQuestion.setAttribute("name","question");
        inQuestion.setAttribute('value',"question")
        inQuestion.setAttribute('class',"stlIp inQuestion")

    var inScore=document.createElement("input");
        inScore.setAttribute('type','number');
        inScore.name="score";
        inScore.setAttribute('class',"stlIp")
    var inSelect=document.createElement("select");
        inSelect.name="type";
        inSelect.setAttribute('class',"stlIp")
        inSelect.id="div_reponse"+id+"Select";
        inSelect.setAttribute("onchange","selectChange('div_reponse"+id+"')")
    var opCm = document.createElement("option");
        opCm.value="cm";
        opCm.text="Choix Multiple"
    var opCs = document.createElement("option");
        opCs.value="cs";
        opCs.text="Choix Simple";
    var opCt = document.createElement("option");
        opCt.value="ct";
        opCt.text="Choix Texte"
    
        inSelect.appendChild(opCm);
        inSelect.appendChild(opCs);
        inSelect.appendChild(opCt);
    
    
    var btnAdd=document.createElement('input');
    btnAdd.setAttribute("class","btn_gene");
    btnAdd.setAttribute("type","button");
    btnAdd.value=" ";
    btnAdd.setAttribute("onclick","addChamp('div_reponse"+id+"','"+id+"')");
        

      let qcm=retrieveDataQ(id);
      inQuestion.value=qcm[1];
      inScore.value=qcm[2];
      inSelect.value=qcm[3];


    
    divTarget.innerHTML="";
    form.appendChild(inQuestion);
    form.appendChild(inScore);
    form.appendChild(inSelect);
    form.appendChild(btnAdd);
    if(qcm[3]=="cm" || qcm[3]=="cs" )
    {
        for(let i=0;i< qcm[4].length;i++)
        {
            let div_cont=document.createElement('span');
                div_cont.setAttribute('class','w_96')
                div_cont.setAttribute('id','id_'+id+'_'+i)
            let repIn=document.createElement("input");
                repIn.setAttribute('type',"text");
                repIn.setAttribute('class','stlIp');
                repIn.value=qcm[4][i];
                repIn.setAttribute("Name", "reponse_" + i);
            let repCk=document.createElement('input');
            repCk.setAttribute("Name", "check[]" );
            repCk.setAttribute("value", i );
            if(qcm[3]=="cm")
            {
                repCk.setAttribute('type',"checkbox");
            }
            else
            {
                repCk.setAttribute('type',"radio");
            }
            let btnRem=document.createElement('button')
               btnRem.textContent="."
                btnRem.setAttribute("class","btn_remove")
                btnRem.setAttribute('id','rv_'+id+'_'+i)
                btnRem.setAttribute("onclick", "removeElement('div_reponse"+id+"','id_"+id+"_"+i+"')");
                if(inArray(i+1,qcm[5]))
                {
                    repCk.checked=true
                }
                div_cont.appendChild(repIn);
                div_cont.appendChild(repCk);
                div_cont.appendChild(btnRem);
                div_reponse.appendChild(div_cont);
                
        }

    }
    else
    {
        let repIn=document.createElement("input");
        repIn.setAttribute('type','text')
        repIn.setAttribute('name','breponses[]')
        repIn.value=qcm[4]
        div_reponse.appendChild(repIn)
    }

    var btnSbmit=document.createElement('button');
        btnSbmit.setAttribute('type','submit');
        btnSbmit.name="updateQuestion";
        btnSbmit.value="ok";
        btnSbmit.textContent="Changer";
        
    form.appendChild(div_reponse);
    form.appendChild(btnSbmit)
    divTarget.appendChild(form);
}

function retrieveDataQ(id)
{
    var qcm= [];
    var reponses = [];  
    var brep= [];
    var qtn=document.getElementById("qts_"+id).innerText;
    var sc=document.getElementById('data_'+id).getAttribute("score");
    var ty=document.getElementById('data_'+id).getAttribute("typeChoix");
    var nbrRep=document.getElementById('data_'+id).getAttribute("nbrRep");

    if(nbrRep!=1)
    {
        for(let i=1;i<=nbrRep;i++)
        {
            var reponse=document.getElementById("rep_"+id+"_"+i).innerText;
            reponses.push(reponse);
             let ch=document.getElementById("chk_"+id+"_"+i)
              if(ch.checked)
              {
                  brep.push(i);
              }
        }
    }
    else
    {

        var repon=document.getElementById("rep_"+id).value;
        reponses.push(repon.trim());
    }

    qcm.push(id,qtn,sc,ty,reponses,brep);

    return qcm;
}


function inArray(val, arr) {
    var length = arr.length;
    for(var i = 0; i < length; i++) {
        if(arr[i] == val) return true;
    }
    return false;
}
var i=10;


function addChamp(idtarget,id)
{

    var type=document.getElementById(idtarget+"Select").value
    if(type==="cm" || type==="cs")
    {
        
        
        var r = document.createElement('span');
                r.setAttribute("class", "w_96");
        var l = document.createElement('LABEL');
            l.setAttribute("class", "lab");
    
        var y = document.createElement("INPUT");
            y.setAttribute("type", "text");
            y.setAttribute("class", "stlIp");

            r.appendChild(l);
                y.setAttribute("cp", "cp");
                
            
            var g = document.createElement("input");
            g.setAttribute("type", "button");
            g.setAttribute("class", "btn_remove");
            
            i++;
            
            y.setAttribute("Name", "reponse_" + i);
            y.setAttribute('onkeyup','removeErCk()');
            y.setAttribute("error0", "error_" +(i+3));
                r.appendChild(y);
            var c = document.createElement("INPUT");
                c.setAttribute("class", "ck");
                c.setAttribute("Name", "check[]" );
                c.setAttribute("onclick", "removeErCk()" );

                if(type==="cm")
                {
                    c.setAttribute("type", "checkbox");
                }
                else if(type==="cs")
                {
                    c.setAttribute("type", "radio");
                }
                c.setAttribute("value", i);
                r.appendChild(c);
            
            g.setAttribute("onclick", "removeElement('div_reponse"+id+"','id_" + id +"_"+i+"')");
            r.appendChild(g);
            
            var err=document.createElement("small");
            err.setAttribute("id", "error_" +(i+3));
            err.setAttribute("class", "error error_rep");
            r.appendChild(err);
            
            r.setAttribute("id", "id_" + id+"_"+i);
        document.getElementById(idtarget).appendChild(r);

    }
}




function resetElements(id_div)
{
    document.getElementById(id_div).innerHTML = '';
    
}


function removeElement(parentDiv, childDiv){
    if (childDiv == parentDiv)
    {
    	return ;
    }
    else
    if (document.getElementById(childDiv))
    {
    	var child = document.getElementById(childDiv);
    	var parent = document.getElementById(parentDiv);
        parent.removeChild(child);
    }
    else
    {
    	return false;
    }
}




function selectChange(id)
{

    resetElements(id);
    var typ = document.getElementById(id+"Select").value
    if(typ==="ct")
    {
     document.getElementById(id).innerHTML="<span class='al_c'><label>Reponse &nbsp; &nbsp;</label> <input type='text' class='stlIp' onkeyup='removeErrorTxt(\"errortxt\")' error='errortxt' name='breponses[]' required /></span> <br> <small id='errortxt' class='error'></small>";
    }
}


function sendData(id,idForm)
{
  if (!validate()) {
      alert(" les donnÃ©es de sont pas valide!");
   
    return false;
  } 
  else {
 
    
    var elements = document.getElementById(idForm).elements;
    var data ="id="+id+"&";
    var error=false;
    var comptCk=0;
    var comptRep=0;
    let type= elements.namedItem("type").value;
    for(var i = 0 ; i < elements.length ; i++)
    {
        var item = elements.item(i);
         
         if(item.type=="checkbox" || item.type=="radio")
         {
             
            if(item.checked)
            {
                data +=[item.name]+"="+ item.value;
                comptCk++;
            }
         }
         else
         {
            data +=[item.name]+"="+ item.value; 
            if(item.getAttribute('cp')=="cp" && item.value.trim())
            {
                
                comptRep++;
            }
         }

        if((i+1)!=elements.length )
        {
            data+="&";
        }
    }

    if(type=='cm' || type=='cs')
    {
        if(comptRep<2 || comptCk<1)
        {
            document.getElementById('error_glob_'+id).innerText="Veuillez complÃ©ter le formulaire";
            return false;
        }
    }

  
        
   var ajx = new XMLHttpRequest();
    ajx.onreadystatechange = function () {
        if (ajx.readyState == 4 && ajx.status == 200) {
            let data = ajx.responseText;
            replaceAfterChange(id,data);
            document.getElementById('error_glob_'+id).innerText="";
            
        }
    };
    ajx.open("POST", "index.php?origin=admin&updateQuestion=on", true);
    ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajx.send(data);
    
    
    return false;
   }
}


function validate()
{
    return true;
}


function replaceAfterChange(id,data)
{
    document.getElementById("q_check_"+id).checked=false ;
    let dataObj=JSON.parse(data)
    var d=document.getElementById(id);
    let type=dataObj['type'];
    d.innerHTML="";
    if(type=="cm")
    {
        d.innerHTML+='	<input type="hidden" id="data_'+id+'" typeChoix="'+dataObj['type']+'" score="'+dataObj['score']+'" nbrRep="'+dataObj['reponses'].length+'"/>'
                +'&nbsp;&nbsp;<strong class="sm_font13 mg_2" id="qts_'+id+'">'+ dataObj['question'] +'</strong>';
        for(let i=0;i< dataObj['reponses'].length;i++)
        {
            let rep=dataObj['reponses'][i];
           d.innerHTML+='<label class="c_rep sm_font" id="rep_'+id+'_'+i+'">'+rep
               if(inArray(i+1,dataObj['breponses']))
                { 
                    d.innerHTML +='<input type="checkbox" id="chk_'+id+'_'+i+'" disabled  name="rep_user[]" value="" checked /><span class="check" ></span></label>'    
                    
                }
                else
                {
                d.innerHTML +='<input type="checkbox" id="chk_'+id+'_'+i+'" disabled  name="rep_user[]" value="" /><span class="check" ></span></label>'
                }
        }
    }else if(type=="cs")
    {
        d.innerHTML+='	<input type="hidden" id="data_'+id+'" typeChoix="'+dataObj['type']+'" score="'+dataObj['score']+'" nbrRep="'+dataObj['reponses'].length+'"/>'
                +'&nbsp;&nbsp;<strong class="sm_font13 mg_2" id="qts_'+id+'">'+ dataObj['question'] +'</strong>';
        for(let i=0;i< dataObj['reponses'].length;i++)
        {
            let rep=dataObj['reponses'][i];
           d.innerHTML+='<label class="c_rep sm_font" id="rep_'+id+'_'+i+'">'+rep
               if(inArray(i+1,dataObj['breponses']))
                { 
                    d.innerHTML +='<input type="radio" id="chk_'+id+'_'+i+'" disabled  name="rep_user[]" value="" checked /><span class="checkmark" ></span></label>'    
                    
                }
                else
                {
                d.innerHTML +='<input type="radio" id="chk_'+id+'_'+i+'" disabled  name="rep_user[]" value="" /><span class="checkmark" ></span></label>'
                }
        }
    }
    else
    {
        d.innerHTML+='	<input type="hidden" id="data_'+id+'" typeChoix="'+dataObj['type']+'" score="'+dataObj['score']+'" nbrRep="1"/>'
                +'&nbsp;&nbsp;<strong class="sm_font13 mg_2" id="qts_'+id+'">'+ dataObj['question'] +'</strong>';
        d.innerHTML +='<input class="iptxt w80" disabled id="rep_<?=$i?>"  type="text" name="rep_user[]" value="'+dataObj['breponses'][0]+'"/>'
        
    }
}
</script>        </div>
    </div>
        </div>
    </div>

    <script>
        

var modal = document.getElementById("myModal");


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[1];

var span1 = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}


span1.onclick = function() {
  modal.style.display = "none";
}

span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
        <div>
    </body>
</html>