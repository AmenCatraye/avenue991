
/*** LES ELEMENTS DE BASE ***/
//Construction de la date
       var now = new Date();
       var annee   = now.getFullYear();
       var mois    = now.getMonth() + 1;
       var jour    = now.getDate();

// Génération des numeros de commande
function numdecommande(){
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPRSTUVWXYZ0123456789";

  for (var i = 0; i < 7; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

//Construction du nemero de commande
$('#numcommande').append(numdecommande()+mois+annee);


/*** FONCTIONS DE VERIFICATION DES SAISIE ***/
//Gestion des erreurs de saisie
function erreursaisie(champtexte, validation){
            champtexte.next().next().empty();
            champtexte.next().next().append('saisie invalide');
            champtexte.css('border-color', 'red');
           // champtexte.attr('data-check','');
            
            champtexte.attr({datacheck : validation});
            champtexte.next().next().css('color', 'red');
            champtexte.next().next().css('font-weight', 'bolder');
        }
       
// Fonction de validation de saisie (champTexte)
function validationsaisie(champtexte, validation){
            champtexte.next().next().empty();
            champtexte.css('border-color', '#31B404');
            //champtexte.attr('data-check','');
            //champtexte.attr('data-check',validation);
            champtexte.attr({datacheck : validation});
        }

// Fonction de vérification des champs texte alphanumerique
function AlphaNumverification(champtexte){
                $.post(
                    '/mainPHP/verifications_securite.php',
                    {
                        code:'alphanum',
                        texte:champtexte.val()
                    },
                    function(data){
                       var Rep = JSON.parse(data);
                       if(Rep.res===2){
                            erreursaisie(champtexte,Rep.res);
                        }else{
                            
                            validationsaisie(champtexte,Rep.res); 
                        }
                    },
                    'text'
                );
        }


// Fonction de vérification des champs texte alphabétique
function Alphaverification(champtexte){
                $.post(
                    '/mainPHP/verifications_securite.php',
                    {
                        code:'alpha',
                        texte:champtexte.val()
                    },
                    function(data){
                       var Rep = JSON.parse(data);
                    if(Rep.res===2){
                            erreursaisie(champtexte,Rep.res);
                        }else{
                            validationsaisie(champtexte,Rep.res);
                     }
                      
                    },
                    'text'
                );
        }
       

// Fonction de vérification des champs numériques
function Numverification(champtexte){
                $.post(
                    '/mainPHP/verifications_securite.php',
                    {
                        code:'num',
                        texte:champtexte.val()
                    },
                   function(data){
                       var Rep = JSON.parse(data);
                       if(Rep.res==2){
                            erreursaisie(champtexte,Rep.res);
                        }else{
                            
                            validationsaisie(champtexte,Rep.res); 
                        }
                      
                       // alert(champtexte.attr('datacheck'));
                    },
                    'text'
                );
        }
       

// Fonction de vérification des champs mail
function Mailverification(champtexte){
                $.post(
                    '/mainPHP/verifications_securite.php',
                    {
                        code:'mail',
                        texte:champtexte.val()
                    },
                    function(data){
                       var Rep = JSON.parse(data);
                       if(Rep.res==2){
                            erreursaisie(champtexte,Rep.res);
                        }else{
                           validationsaisie(champtexte,Rep.res); 
                        }
                        
                        //alert(champtexte.attr('datacheck'));
                    },
                    'text'
                );
             
             
        }

/*** FONCTIONS DE VALIDATION DES FORMULAIRES ***/
// Clique sur bouton de validation finale
function validerCommande(){
          
          if($('#raisonsociale').attr('datacheck')===3
             && $('#adressemail1').attr('datacheck')===3
             && $('#telephone1').attr('datacheck')===3
             && $('#adresse1').attr('datacheck')===3
              ){
            
             $('#collapseTwo').show(300);
              
          }else{
              
          }
      }


/*** FONCTIONS MDE GESTIONS DES BOUTONS SUIVANT ET PRECEDENT DU FORMULAIRE ***/
//Ouverture du formulaire EuropeOcaz
$('#jeSuis').change(function(){
           
            if ($('#jeSuis option:selected').val()==0){
                $('#user').empty();
                $('#collapseOne').hide(300);
                $('#collapseTwo').hide(300);
            }else{
                
                 $('#collapseOne').show(300);
                if($('#jeSuis option:selected').val()==1){
                            $('#user').empty();
                            $('#user').append('<i class="fas fa-user"></i>');
                            $('#entreprisesCommercants').hide();
                            $('#etudiantsParticuliers').show(300);

                }else if($('#jeSuis option:selected').val()==2){
                            $('#user').empty();
                            $('#user').append('<i class="fas fa-landmark"></i>');
                            $('#entreprisesCommercants').show(300);
                            $('#etudiantsParticuliers').hide();
                    
                }else if($('#jeSuis option:selected').val()==3){
                            $('#user').empty();
                            $('#user').append('<i class="fas fa-store"></i>');
                            $('#entreprisesCommercants').show(300);
                            $('#etudiantsParticuliers').hide();
                }
          
           
       }})
       
       
//Traitement suivant pour pariculier
function Suivantparticulier(){
        if($('#nometprenoms').attr('datacheck')==3 && $('#adressemail2').attr('datacheck')==3 && $('#telephone2').attr('datacheck')==3 && $('#adresse2').attr('datacheck')==3){
             $('#collapseOne').hide(300);
             $('#collapseTwo').show(300);
              
        }else{
           alert('Veuillez vérifiez les informations saisies et recommencer.');
          }
           
       }
       
       
//Traitement suivant pour entreprise et commercant
function SuivantentrepriseCommercant(){
        if($('#raisonsociale').attr('datacheck')==3 && $('#adressemail1').attr('datacheck')==3 && $('#telephone1').attr('datacheck')==3 && $('#adresse1').attr('datacheck')==3 && $('#personnescontact').attr('datacheck')==3){
             $('#collapseOne').hide(300);
             $('#collapseTwo').show(300);
          }else{
           alert('Veuillez vérifiez les informations saisies et recommencer.');
          }
           
       }

//Bouton precedent
function precedent(){
           $('#collapseOne').show(300);
           $('#collapseTwo').hide(300);
       }




/*** FONCTIONS MODIFICATION DU FORMULAIRES SELON LES CHOIX SELECT ***/
//Fonction de validation de services pour les entreprises
function ValidationFormParticulier(){

                  $.post(
                    '/mainPHP/EuropOcazForm.php',
                    {
                        code:'particulier',
                        nomcomplet:$('#nometprenoms').val(),
                        adressemail:$('#adressemail2').val(),
                        adresse:$('#adresse2').val(),
                        qvv:$('#QueVoulezVous option:selected').text(),
                        chassis:$('#ChassisMoto option:selected').val(),
                        marque:$('#marques').val(),
                        modele:$('#modele').val(),
                        annee:$('#annee').val(),
                        prixmax:$('#PrixMax').val(),
                        kilometrage:$('#kilometrage').val(),
                        bvitesse:$('#BoiteVitesse option:selected').val(),
                        carburant:$('#Carburant option:selected').val(),
                        NbrPortes:$('#NbrPortes option:selected').val(),
                        infoComp:$('#InfoComplementaire').val(),
                        persocont:$('#personnescontact').val(),
                        tel:$('#telephone2').val(),
                        nompiece:$('#nompiece').val(),
                        numcommande:$('#numcommande').text(),
                        ladate: jour+'/'+mois+'/'+annee,
                        etat:$('#neufouocaz option:selected').text(),
                        piecepour:$('#piecepour option:selected').text()
                    },
                    function(data){

                    },
                    'text'
                );
}


//Fonction de validation de services pour les entreprises
function ValidationFormEntreprise(){
                  $.post(
                    '/mainPHP/EuropOcazForm.php',
                    {
                        code:'entreprise',
                        adressemail:$('#adressemail1').val(),
                        adresse:$('#adresse1').val(),
                        qvv:$('#QueVoulezVous option:selected').text(),
                        chassis:$('#ChassisMoto option:selected').val(),
                        marque:$('#marques').val(),
                        modele:$('#modele').val(),
                        annee:$('#annee').val(),
                        prixmax:$('#PrixMax').val(),
                        kilometrage:$('#kilometrage').val(),
                        bvitesse:$('#BoiteVitesse option:selected').val(),
                        carburant:$('#Carburant option:selected').val(),
                        NbrPortes:$('#NbrPortes option:selected').val(),
                        infoComp:$('#InfoComplementaire').val(),
                        persocont:$('#personnescontact').val(),
                        tel:$('#telephone1').val(),
                        raisonsoc:$('#raisonsociale').val(),
                        nompiece:$('#nompiece').val(),
                        numcommande:$('#numcommande').text(),
                        ladate: jour+'/'+mois+'/'+annee,
                        etat:$('#neufouocaz option:selected').text(),
                        piecepour:$('#piecepour option:selected').text()
                    },
                    function(data){

                    },
                    'text'
                );
}
    

// Fonction de validation de formulaire
function ValidationForm(){
        if($('#QueVoulezVous option:selected').val() !=1 && $('#marques').attr('datacheck')==3 && $('#modele').attr('datacheck')==3 && $('#annee').attr('datacheck')==3 && $('#PrixMax').attr('datacheck')==3){
            // && $('#Carburant option:selected').val() !=1
            // Si tous les champs bligatoires ont été rensignés, on passe  la validation d formulaire selon le cas
          /*  if($('#jeSuis option:selected').val()===2){
                var route = "{{ path('cmdOcazPart', {'slug': 'cmdOcazPart'})|escape('js') }}";
                $('#accordion').attr({action : route});


               }else if($('#jeSuis option:selected').val()===3){
                $('#accordion').attr({action : path('cmdOcazEnt')});
               }else if($('#jeSuis option:selected').val()===4){
                $('#accordion').attr({action : path('cmdOcazCom')});
            }*/

            $('#accordion').submit();

        }else{
           alert('Veuillez vérifier les informations des champs obligatoires (*).');
          }
           
       }

$("#my_form").submit(function(event) {
    event.preventDefault(); //prevent default action
    let post_url = $(this).attr("action"); //get form action url
    let form_data = $(this).serialize(); //Encode form elements for submission
    $.post(post_url, form_data, function(response) {
        $("#server-results").html(response);
    });
});

// Fonction pour choix piéces detachée
function piecedetache(){
    if($('#QueVoulezVous option:selected').val()==8){
        $('#div_nompiece').show(300);
        $('#div_piecepour').show(300);
        
        $('#NbrPortes option:selected').val()=='';
        $('#div_NbrPortes').hide(300);
        
        $('#div_BoiteVitesse option:selected').val()=='';
        $('#div_BoiteVitesse').hide(300);
       
       }else if($('#QueVoulezVous option:selected').val()==3){
           $('#NbrPortes option:selected').val()=='';
           $('#div_NbrPortes').hide(300);
           
           $('#div_chassismoto').show(300);
           
           $('#nompiece').val()=='';
           $('#div_nompiece').hide(300);
           
           
           $('#Carburant option:selected').val()=='';
           $('#div_carburant').hide(300);
           
           $('#piecepour option:selected').val()=='';
           $('#div_piecepour').hide(300);
       }else if($('#QueVoulezVous option:selected').val()==2){
           $('#div_NbrPortes').show(300);
           
           $('#chassismoto option:selected').val()=='';
           $('#div_chassismoto').hide(300);
           
           $('#nompiece').val()=='';
           $('#div_nompiece').hide(300);
           
           $('#div_carburant').show(300);
           
           $('#piecepour option:selected').val()=='';
           $('#div_piecepour').hide(300);
       }else{
           $('#NbrPortes option:selected').val()=='';
           $('#div_NbrPortes').hide(300);
           
           $('#chassismoto option:selected').val()=='';
           $('#div_chassismoto').hide(300);
           
           //$('#nompiece').val()='';
           $('#div_nompiece').hide(300);
           
           $('#div_carburant').show(300);
           
           $('#piecepour option:selected').val()=='';
           $('#div_piecepour').hide(300);
       }  
}


