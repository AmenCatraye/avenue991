<?php

namespace App\Controller;

use App\Entity\CommandeOcaz;
use App\Entity\Entreprises;
use App\Entity\Etudiants;
use App\Entity\FormaliteCourse;
use App\Entity\Hebergement;
use App\Entity\Particuliers;
use App\Entity\Commercants;
use App\Entity\Shoppings;
use App\Entity\UnivInsc;
use App\Entity\Avi;
use App\Entity\Transport;





use Doctrine\Persistence\ObjectManager;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request as HttpRequest;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Routing\Annotation\Route;
use function App\Controller\avi;
use function App\Controller\hebergement;
use function App\Controller\shoppings;
use function App\Controller\transport;

class IndexController extends AbstractController
{
    /**
     * @Route("/Accueil", name="Accueil")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/EuropeOcaz", name="EuropeOcaz")
     */
    public function europeOcaz(): Response
    {
        return $this->render('index/europeOcaz.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }


    /**
     * @Route("/cmdEuropOcaz", name="cmdEuropOcaz")
     */
    public function CommandeEuropeOcaz(HttpRequest $request, EntityManagerInterface $manager): Response
    {
        if ($request->request->count() > 0) {
            $commandeOcaz = new CommandeOcaz();
            $particulier = new Particuliers();
            $typeClient = $request->request->get('jeSuis');

            switch ($typeClient) {
                case 'particulier':
                    $commandeOcaz->setNumCommande($request->request->get('numcommande'))
                        ->setTypElem($request->request->get('QueVoulezVous'))
                        ->setMarque($request->request->get('marques'))
                        ->setModele($request->request->get('modele'))
                        ->setAnnee($request->request->get('annee'))
                        ->setPrixmax($request->request->get('PrixMax'))
                        ->setKilometrage($request->request->get('kilometrage'))
                        ->setBoitevitesse($request->request->get('BoiteVitesse'))
                        ->setCarburant($request->request->get('Carburant'))
                        ->setPortes($request->request->get('NbrPortes'))
                        ->setEtat($request->request->get('neufouocaz'))
                        ->setPiecepour($request->request->get('piecepour'))
                        ->setInfoComp($request->request->get('InfoComplementaire'))
                        ->setLadate($request->request->get(''))
                        ->setNompiece($request->request->get('nompiece'))
                        ->setNonprenom($request->request->get('nometprenoms'))
                        ->setAdressemail($request->request->get('adressemail2'))
                        ->setAdresse($request->request->get('adresse2'))
                        ->setTelephone($request->request->get('telephone2'))
                        ->setChassis($request->request->get('ChassisMoto'));

                    $manager->persist($commandeOcaz);
                    $manager->flush();

                    $particulier->setNomprenoms($request->request->get('nometprenoms'))
                        ->setEmail($request->request->get('adressemail2'))
                        ->setTelephone($request->request->get('telephone2'))
                        ->setResidence($request->request->get('adresse2'));

                    $manager->persist($particulier);
                    $manager->flush();
                    break;
                case 'entreprise':
                        $commandeOcaz = new CommandeOcaz();
                        $entreprise = new Entreprises();

                        $commandeOcaz->setNumCommande($request->request->get('numcommande'))
                            ->setTypElem($request->request->get('QueVoulezVous'))
                            ->setMarque($request->request->get('marques'))
                            ->setModele($request->request->get('modele'))
                            ->setAnnee($request->request->get('annee'))
                            ->setPrixmax($request->request->get('PrixMax'))
                            ->setKilometrage($request->request->get('kilometrage'))
                            ->setBoitevitesse($request->request->get('BoiteVitesse'))
                            ->setCarburant($request->request->get('Carburant'))
                            ->setPortes($request->request->get('NbrPortes'))
                            ->setEtat($request->request->get('neufouocaz'))
                            ->setPiecepour($request->request->get('piecepour'))
                            ->setInfoComp($request->request->get('InfoComplementaire'))
                            ->setLadate($request->request->get(''))
                            ->setNompiece($request->request->get('nompiece'))
                            ->setNonprenom($request->request->get('personnescontact'))
                            ->setAdressemail($request->request->get('adressemail1'))
                            ->setAdresse($request->request->get('adresse1'))
                            ->setTelephone($request->request->get('telephone1'))
                            ->setRaisonsociale($request->request->get('raisonsociale'))
                            ->setChassis($request->request->get('ChassisMoto'));

                        $manager->persist($commandeOcaz);
                        $manager->flush();


                        $entreprise->setContacts($request->request->get('personnescontact'))
                            ->setEmail($request->request->get('adressemail1'))
                            ->setAdressesiege($request->request->get('adresse1'))
                            ->setTelephone($request->request->get('telephone1'))
                            ->setRaisonsociale($request->request->get('raisonsociale'));

                        $manager->persist($entreprise);
                        $manager->flush();

                        break;
                case 'commercant':
                    $commandeOcaz = new CommandeOcaz();
                    $commercant = new Commercants();

                    $commandeOcaz -> setNumCommande($request->request->get('numcommande'))
                        -> setTypElem($request->request->get('QueVoulezVous'))
                        -> setMarque($request->request->get('marques'))
                        -> setModele($request->request->get('modele'))
                        -> setAnnee($request->request->get('annee'))
                        -> setPrixmax($request->request->get('PrixMax'))
                        -> setKilometrage($request->request->get('kilometrage'))
                        -> setBoitevitesse($request->request->get('BoiteVitesse'))
                        -> setCarburant($request->request->get('Carburant'))
                        -> setPortes($request->request->get('NbrPortes'))
                        -> setEtat($request->request->get('neufouocaz'))
                        -> setPiecepour($request->request->get('piecepour'))
                        -> setInfoComp($request->request->get('InfoComplementaire'))
                        -> setLadate($request->request->get('12/12/2021'))
                        -> setNompiece($request->request->get('nompiece'))
                        -> setNonprenom($request->request->get('personnescontact'))
                        -> setAdressemail($request->request->get('adressemail1'))
                        -> setAdresse($request->request->get('adresse1'))
                        -> setTelephone($request->request->get('telephone1'))
                        -> setRaisonsociale($request->request->get('raisonsociale'))
                        -> setChassis($request->request->get('ChassisMoto'));
                    $manager->persist($commandeOcaz);
                    $manager->flush();

                    $commercant -> setContact($request->request->get('personnescontact'))
                                    -> setEmail($request->request->get('adressemail1'))
                                    -> setResidence($request->request->get('adresse1'))
                                    -> setTelephone($request->request->get('telephone1'))
                                    -> setRaisonsociale($request->request->get('raisonsociale'));

                                $manager->persist($commercant);
                                $manager->flush();

                    break;
            }
            return $this->render('index/europeOcaz.html.twig');
        }
    }


    /**
     * @Route("/arrivebientot", name="arrivebientot")
     */
    public function arrivebientot(): Response
    {
        return $this->render('index/arrivebientot.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/shopping&demarches", name="shopping&demarches")
     */
    public function shoppingdemarches(): Response
    {

        return $this->render('index/shoppingdemarches.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/shoppingscourses", name="shoppingscourses")
     */
    public function inscriptionUniv(HttpRequest $request, EntityManagerInterface $manager): Response
    {
        dump($request);

        //FONCTION DES INSCRIPTIONS UNIVERSITAIRES
        function InscriptionUniversite($request, $manager){
            $inscriptionUniversite = new UnivInsc();
            $inscriptionUniversite->setNumservice($request->request->get('numservice'))
                ->setIdetudiant($request->request->get('adressemail3'))
                ->setPays($request->request->get('paysdetude'))
                ->setVille($request->request->get('villesdetude'))
                ->setAnnee($request->request->get('anneeuniv'))
                ->setUniversite($request->request->get('nomuniversite'))
                ->setSiteweb($request->request->get('urluniversite'))
                ->setAdresseuniversite($request->request->get('adresseuniversite'))
                ->setStatut($request->request->get('statutUniversite'))
                ->setBudget($request->request->get('scolartite'))
                ->setInfoSup($request->request->get('InfoComplementaire'));
            $manager->persist($inscriptionUniversite);
            $manager->flush();
        }

        //FONCTION SHOPPING
        function shoppings($request, $manager, $y){
            //Création de la table pannier -> Liste des articls  commander
            $panier = array();
            $panier['designation'] = array();
            $panier['lienInternet'] = array();
            $panier['qt'] = array();
            $panier['PrixUnite'] = array();

            //Récupération du nombre d'articles à commander choisi par le client
            $x = $request->request->get('spy_nbr_articles');

            //Boucle de remplissage de la table panier des articles à commander en fonction du nombre d'article $x choisi par le client
            for($i = 1; $i < $x; $i++){
                array_push($panier['designation'],$request->request->get($i.'designation'));
                array_push($panier['lienInternet'],$request->request->get($i.'urlarticle'));
                array_push($panier['qt'],$request->request->get($i.'qutShopping'));
                array_push($panier['PrixUnite'],$request->request->get($i.'prixunite'));
            }

            //Transformation de la table panier en format : Chaine de caractère.
            $panier = serialize($panier);


            $shopping = new Shoppings();

            $shopping->setNumService($request->request->get('numservice'))
                ->setOrders($panier)
                ->setIdClient($y)
                ->getCommentaire($request->request->get('commentaires'));

                $manager->persist($shopping);
                $manager->flush();
        }

        //FONCTION HEBERGEMENT
        function hebergement($request, $manager, $y){
            $hebergement = new Hebergement();
            $hebergement->setNumService($request->request->get('numservice'))
                ->setIdClient($y)
                ->setPays($request->request->get('payshebergement'))
                ->setVille($request->request->get('villehebergement'))
                ->setDuree($request->request->get('dureehebergement'))
                ->setTypeHebergement($request->request->get('typehebergement'))
                ->setLoyerMax($request->request->get('MontantLoyerMAx'))
                ->setCommentaire($request->request->get('commentaires'));
            $manager->persist($hebergement);
            $manager->flush();

        }

        //FONCTION TRANSPORT
        function transport($request, $manager, $y){

            $deplacement= new Transport();
            $deplacement->setNumService($request->request->get('numservice'))
                ->setIdClient($y)
                ->setPays($request->request->get('paysdarrivee'))
                ->setAeroport($request->request->get('aeroparrivee'))
                ->setDate($request->request->get('datearrivee'))
                ->setHeureArrivee($request->request->get('heurearrivee'))
                ->setNbrPassager($request->request->get('nbrpassager'))
                ->setCommentaires($request->request->get('commentaires'));
            $manager->persist($deplacement);
            $manager->flush();

        }

        //FONCTION ATTESTATION AVI
        function avi($request, $manager, $y){
            $avi = new Avi();
            $avi->setNumService($request->request->get('numservice'))
                ->setIdClient($y)
                ->setPays($request->request->get('paysCaution'))
                ->setAdresse($request->request->get('adresseCaution'))
                ->setFrequence($request->request->get('freqCaution'))
                ->setMontant($request->request->get('Caution'))
                ->setMotif($request->request->get('motifCaution'))
                ->setCommentaires($request->request->get('commentaires'));
            $manager->persist($avi);
            $manager->flush();

        }

        //FONCTION SOS ETUDIANT
        function sosetudiant($request, $manager, $y){
        // Le contact SOS etudiant se fait par mail. sos.etudiants@avenue991.com
        }

        //FONCTION AUTRE COURSES
        function autrescourses($request, $manager, $y){

            $formaliteCourse = new FormaliteCourse();
            $formaliteCourse ->setNumService($request->request->get('numservice'))
                ->setIdClient($y)
                ->setDetailsCourse($request->request->get('detailsCourse'));

            $manager->persist($formaliteCourse);
            $manager->flush();

        }

        if ($request->request->count() > 0) {

            $QvvClient = $request->request->get('QvvClient');
            $profilClient = $request->request->get('profilClientSelect');

        if($profilClient=='etudiant'){
            //Enregistrement du nom de l'étudiant dans la table etudiant
            $etudiant = new Etudiants();
            $etudiant->setNomprenoms($request->request->get('nometprenoms3'))
                ->setEmail($request->request->get('adressemail3'))
                ->setTelephone($request->request->get('telephone3'))
                ->setAdresse($request->request->get('adresse3'));
            $manager->persist($etudiant);
            $manager->flush();

            $mail = $request->request->get('adressemail3');
            $tel= $request->request->get('telephone3');

            //Création de l'identifiant client = mail/tel
            $y = $mail.'/'.$tel;

            //Enregistrement des services demandés
            switch ($QvvClient){
                case'inscription':
                    InscriptionUniversite($request, $manager);
                    break;
                case'shopping':
                    shoppings($request, $manager, $y);
                    break;
                case 'hebergement':
                    hebergement($request, $manager, $y);
                    break;
                case 'avi':
                    avi($request, $manager, $y);
                    break;
                case'autrecourse':
                    autrescourses($request, $manager, $y);
                    break;
                case'deplacement':
                    transport($request, $manager, $y);
                    break;
            }

        }elseif ($profilClient=='particulier'){
            $particulier= New Particuliers();
            $particulier->setNomprenoms($request->request->get('nometprenoms'))
                ->setEmail($request->request->get('adressemail2'))
                ->setTelephone($request->request->get('telephone2'))
                ->setResidence($request->request->get('adresse2'));

            $manager->persist($particulier);
            $manager->flush();

            $mail = $request->request->get('adressemail2');
            $tel= $request->request->get('telephone2');

            //Création de l'identifiant client = mail/tel
            $y = $mail.'/'.$tel;

            switch ($QvvClient){
                case'shopping':
                    shoppings($request, $manager, $y);
                    break;
                case 'hebergement':
                    hebergement($request, $manager, $y);
                    break;
                case 'avi':
                    avi($request, $manager, $y);
                    break;
                case'autrecourse':
                    autrescourses($request, $manager, $y);
                    break;
                case'deplacement':
                    transport($request, $manager, $y);
                    break;
            }
        }elseif ($profilClient=='professionnel'){
            $professionnel = new Entreprises();
            $professionnel -> setContact($request->request->get('personnescontact'))
                -> setEmail($request->request->get('adressemail'))
                -> setResidence($request->request->get('adresse'))
                -> setTelephone($request->request->get('telephone'))
                -> setRaisonsociale($request->request->get('raisonsociale'));

            $manager->persist($professionnel);
            $manager->flush();

            $mail = $request->request->get('adressemail');
            $tel= $request->request->get('telephone');

            //Création de l'identifiant client = mail/tel
            $y = $mail.'/'.$tel;

            switch ($QvvClient){
                case'shopping':

                    shoppings($request, $manager, $y);
                    break;
                case 'hebergement':
                    hebergement($request, $manager, $y);
                    break;
                case 'avi':
                    avi($request, $manager, $y);
                    break;
                case'autrecourse':
                    autrescourses($request, $manager, $y);
                    break;
                case'deplacement':
                    transport($request, $manager, $y);
                    break;
            }


        }
       return $this->render('index/shoppingdemarches.html.twig');

        }
    }

}
?>