
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


/*** FONCTIONS D4ACTIVATION DES BLOC DU FORMULAIRE SUIVANT LE CHOIX "JeSuis ***/
//Ouverture du formulaire EuropeOcaz
function activerCmd(){
    $('#numcommande').empty();
    $('#numcommande').append(numdecommande()+mois+annee);
    $('#ServiceDemande strong').removeClass('greyoff');
    $('#ServiceDemande strong').addClass('red');
}

function desactiverCmd(){
    $('#ServiceDemande strong').removeClass('red');
    $('#ServiceDemande strong').addClass('greyoff');
    $('#numcommande').empty();
    $('#collapseTwo').hide(300);

}

//Traitement suivant pour etudiant
function Suivantetudiant(){
    if($('#nometprenoms3').attr('datacheck')==3 && $('#adressemail3').attr('datacheck')==3 && $('#telephone3').attr('datacheck')==3 && $('#adresse3').attr('datacheck')==3){
        $('#servicesListe').show(300);
        $('#collapseOne').hide(300);
        $('#collapseTwo').show(300);
        $('#collapseetude').hide(300);

        $('#ServiceDemande strong').removeClass('greyoff');
        $('#ServiceDemande strong').addClass('red');

    }else{
        desactiverCmd();
        $('#collapseTwo').hide(300);
        alert('Veuillez vérifiez les informations saisies et recommencer.');
    }

}

//Traitement suivant pour pariculier
function Suivantparticulier(){
    if($('#nometprenoms').attr('datacheck')==3 && $('#adressemail2').attr('datacheck')==3 && $('#telephone2').attr('datacheck')==3 && $('#adresse2').attr('datacheck')==3){
        $('#collapseOne').hide(300);
        $('#collapseTwo').show(300);
        $('#ServiceDemande strong').removeClass('greyoff');
        $('#ServiceDemande strong').addClass('red');

    }else{
        alert('Veuillez vérifiez les informations saisies et recommencer.');
    }

}


//Traitement suivant pour entreprise et commercant
function SuivantentrepriseCommercant(){
    if($('#raisonsociale').attr('datacheck')==3 && $('#adressemail1').attr('datacheck')==3 && $('#telephone1').attr('datacheck')==3 && $('#adresse1').attr('datacheck')==3 && $('#personnescontact').attr('datacheck')==3){
        $('#collapseOne').hide(300);
        $('#collapseTwo').show(300);
        $('#ServiceDemande strong').removeClass('greyoff');
        $('#ServiceDemande strong').addClass('red');
    }else{
        alert('Veuillez vérifiez les informations saisies et recommencer.');
    }

}

//Bouton precedent : On choisi l'action du bouton précédent selon le choix du select --> profil
function precedent(){
    switch ($('#jeSuis option:selected').val()){
        case 'etudiant':
            desactiverCmd();
            $('#collapseTwo').hide(300);
            break;
        case 'particulier':
            break;

        case 'entreprise':
            break;

        case 'commercant':
            break;
    }
    $('#collapseOne').show(300);


}
function serviceDemande(){
    switch ($('#QvvClient option:selected').val()){
        case 'inscription':
            $('#div_optionsuniversite').fadeIn(300);
            $('#monservicedemande').text('INSCRIPTION UNIVERSITAIRE - N°');
            break;
        case 'zero':
            $('#div_optionsuniversite').hide();
            break;
    }

}



function insc_univ(){

    if($('#QvvClient option:selected').val()=='inscription'){
        $('#div_optionsuniversite').fadeIn(300);
        // $('#div_piecepour').show(300);


    }else if($('#QueVoulezVous option:selected').val()==3){

        $('#div_NbrPortes').hide();

        $('#div_chassismoto').show();


        $('#div_nompiece').hide(300);



        $('#div_carburant').hide(300);


        $('#div_piecepour').hide(300);

    }else if($('#QueVoulezVous option:selected').val()==2){
        $('#div_NbrPortes').show(300);


        $('#div_chassismoto').hide(300);


        $('#div_nompiece').hide(300);

        $('#div_carburant').show(300);


        $('#div_piecepour').hide(300);
    }else{
        $('#div_optionsuniversite').hide(300);


        $('#div_NbrPortes').hide(300);


        $('#div_chassismoto').hide(300);

        //$('#nompiece').val()='';
        $('#div_nompiece').hide(300);

        $('#div_carburant').show(300);


        $('#div_piecepour').hide(300);
    }
}




/*** FONCTIONS MODIFICATION DU FORMULAIRES SELON LES CHOIX SELECT ***/
//Fonction de validation de services pour les entreprises

/*function ValidationFormParticulier(){

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
}*/


//Fonction de validation de services pour les entreprises
/*function ValidationFormEntreprise(){
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
}*/


// Fonction de validation de formulaire
function ValidationForm(){
    if($('#QueVoulezVous option:selected').val() !=1 && $('#marques').attr('datacheck')==3 && $('#modele').attr('datacheck')==3 && $('#annee').attr('datacheck')==3 && $('#PrixMax').attr('datacheck')==3){
        // && $('#Carburant option:selected').val() !=1
        // Si tous les champs bligatoires ont été rensignés, on passe  la validation d formulaire selon le cas
        if($('#jeSuis option:selected').val()===2){
            var route = "{{ path('cmdOcazPart', {'slug': 'cmdOcazPart'})|escape('js') }}";
            $('#accordion').attr({action : route});


        }else if($('#jeSuis option:selected').val()===3){
            $('#accordion').attr({action : path('cmdOcazEnt')});
        }else if($('#jeSuis option:selected').val()===4){
            $('#accordion').attr({action : path('cmdOcazCom')});
        }

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

//CHOIX DES OPTIONS DE DE MANDE DE SERVCE QVV
function funivconnue(){
    if($('#univconnue option:selected').val()=='oui'){
            $('#div_universiteconnue').show(300);
            $('#div_inscriptionuniv').show(300);
    }else if($('#univconnue option:selected').val()=='non'){
        $('#div_universiteconnue').hide(300);
        $('#div_inscriptionuniv').show(300);
    }
}


function profilSelect(s){
    if(s.is(':checked')){
        switch (s.attr('id')){
            case 'etudiant':
                $('#profilClientSelect').val(s.attr('id'));

                $('#sessionParticulier').hide();
                $('#sessionProfessionnels').hide();
                $('#collapseprof').hide();

                $('#collapsepart').hide();
                $('#collapseetude').fadeIn(300);

                $('#sessionEtudiant').fadeIn(300);
                break;
            case 'particulier':
                $('#profilClientSelect').val(s.attr('id'));

                $('#sessionProfessionnels').hide();
                $('#collapseprof').hide();
                $('#sessionEtudiant').hide();
                $('#servicesEtudiants').hide();
                $('#collapseetude').hide();
                $('#collapsepart').fadeIn(300);
                $('#sessionParticulier').fadeIn(300);

                break;
            case 'professionnel':
                $('#profilClientSelect').val(s.attr('id'));
                $('#sessionProfessionnels').fadeIn(300);
                $('#collapseprof').fadeIn(300);
                $('#sessionEtudiant').hide();
                $('#servicesEtudiants').hide();
                $('#collapsepart').hide();
                $('#collapseetude').hide();
                $('#sessionParticulier').hide();
                break;

        }

    }

}

function scolarite(sco){
    $('#montantScolaite').empty();
    $('#montantScolaite').text(sco.val());
}

function loyer(loy){
    $('#montantLoyer').empty();
    $('#montantLoyer').text(loy.val());
}

function typeuniversite(){
   // alert($('#paysdetude option:selected').val());

switch($('#paysdetude option:selected').val()){

    case 'france':
        $('#statutUniversite').empty();
        $('#statutUniversite').append('<option value="privee">Université privée</option>');
        $('#solariteMin').text('3500');
        $('#scolartite').attr({value : 1500,
            max:25000,
            min:3500,
            step:250});

        break;
    case 'belgique':
        $('#statutUniversite').empty();
        $('#statutUniversite').append('<option value="choixZero">Statut de l\'universté</option>' +
            '<option value="privee">Université privée</option>' +
            '<option value="publique">Université publique</option>' +
            '<option value="publique">Publique & privée</option>');
        break;
    case 'allemagne':
        $('#statutUniversite').empty();
        $('#statutUniversite').append('<option value="choixZero">Statut de l\'université</option>' +
            '<option value="privee">Université privée</option>' +
            '<option value="publique">Université publique</option>' +
            '<option value="publique">Publique & privée</option>');
        break;
}
}



/*
function jesuis(){
    //Construction du nemero de commande
    switch ($('option:selected').val()){
        case 'france':
alert($('option:selected').val());
            break;

        case 'particulier':


            break;

        case 'entreprise':

            break

        case 'commercant':

            break;

    }
}
*/

