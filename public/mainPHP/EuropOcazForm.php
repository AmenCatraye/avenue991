<?php

switch ($_POST['code']){
    case 'particulier' :
        validationEuropeOcazparticulier();
        break;
    case 'entreprise' :
         validationEuropeOcazparticulier();
        break;

}




function validationEuropeOcazparticulier(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=991db;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e) //CONFIGUERE MESAGE SI ERREUR DE CONNEXION
    {
        die('Erreur : ' . $e->getMessage());
    }

         $rer = $bdd->prepare('INSERT INTO europeOcaz(numCommande, typ_elem, chassis, marque, model, telephone, annee, prixmax, kilometrage, boitevitesse, carburant, portes, InfoComp, ladate, nompiece, nonprenom, adressemail,adresse,type_client,etat, piecepour) VALUES(:numcmd, :qvv, :chassis, :marque, :model, :tel, :annee, :prixmax, :kilometrage, :bvitesse, :carburant, :NbrPortes, :infoComp, :datecmd, :nompiece, :nompren, :admail, :ad, :client, :etat, :piecepour)');
         $rer->execute(array(
            'numcmd' => $_POST['numcommande'],
            'qvv' => $_POST['qvv'],
            'chassis' => $_POST['chassis'],
            'marque' => $_POST['chassis'],
            'model' => $_POST['modele'],
            'tel' => $_POST['tel2'],
            'annee' => $_POST['annee'],
            'prixmax' => $_POST['prixmax'],
            'kilometrage' => $_POST['kilometrage'],
            'bvitesse' => $_POST['bvitesse'],
            'carburant' => $_POST['carburant'],
            'NbrPortes' => $_POST['NbrPortes'],
            'infoComp' => $_POST['infoComp'],
            'datecmd' => $_POST['ladate'],
            'nompiece' => $_POST['nompiece'],
            'nompren' => $_POST['nomcomplet'],
            'admail' => $_POST['adressemail'],
            'ad' => $_POST['adresse2'],
            'client' => $_POST['code'],
            'etat' => $_POST['etat'],
            'piecepour' => $_POST['piecepour']));

//sendmail_client($nom, $email, $num_cmd, $pref, $serv, $mont, $tel,$la_date);
}

function validationEuropeOcazentreprise(){
include('/mainPHP/include.php');

$rer = $bdd->prepare('INSERT INTO europeOcaz(numCommande, typ_elem, chassis, marque, model, telephone, annee, prixmax, kilometrage, boitevitesse, carburant, portes, InfoComp, ladate, nompiece, adressemail,adresse,raisonsociale,type_client,etat, piecepour) VALUES(:numcmd, :qvv, :chassis, :marque, :model, :tel, :annee, :prixmax, :kilometrage, :bvitesse, :carburant, :NbrPortes, :infoComp, :datecmd, :nompiece, :admail, :ad, :raissoc, :client, :etat, :piecepour)');
         $rer->execute(array(
            'numcmd' => $_POST['numcommande'],
            'qvv' => $_POST['qvv'],
            'chassis' => $_POST['chassis'],
            'marque' => $_POST['marque'],
            'model' => $_POST['modele'],
            'tel' => $_POST['tel'],
            'annee' =>$_POST['annee'],
            'prixmax' => $_POST['prixmax'],
            'kilometrage' => $_POST['kilometrage'],
            'bvitesse' => $_POST['bvitesse'],
            'carburant' => $_POST['carburant'],
            'NbrPortes' => $_POST['NbrPortes'],
            'infoComp' => $_POST['infoComp'],
            'datecmd' => $_POST['ladate'],
            'nompiece' => $_POST['nompiece'],
            'admail' => $_POST['adressemail'],
            'ad' => $_POST['adresse'],
            'raissoc' => $_POST['raisonsoc'],
            'client' => $_POST['code'],
            'etat' => $_POST['etat'],
            'piecepour' => $_POST['piecepour']));

//sendmail_client($nom, $email, $num_cmd, $pref, $serv, $mont, $tel,$la_date);
}

?>