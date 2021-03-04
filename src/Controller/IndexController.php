<?php

namespace App\Controller;

use App\Entity\CommandeOcaz;
//use App\Entity\Particulier;
use Doctrine\Persistence\ObjectManager;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request as HttpRequest;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
     * @Route("/EuropeOcaz", name="EuropeOcaz")
     */
    public function CommandeEuropeOcaz(HttpRequest $request, EntityManagerInterface $manager): Response
    {
        //dump($request);
        if ($request->request->count() > 0){
            $commandeOcaz = new CommandeOcaz();
            $commandeOcaz -> setTypeClient($request->request->get('jeSuis'))
                          -> setNumCommande($request->request->get('numcommande'))
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

            //return $this->redirectRoute('EuropeOcaz');
        }

        return $this->render('index/europeOcaz.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function gotest(): Response
    {
        return new Response();
    }


}
?>