<?php

namespace App\Controller;

use App\Entity\CommandeOcaz;
use App\Entity\Entreprises;
use App\Entity\Particuliers;
use App\Entity\Commercants;

use Doctrine\Persistence\ObjectManager;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request as HttpRequest;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Routing\Annotation\Route;


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
                        -> setLadate($request->request->get('adresse2'))
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
}
?>