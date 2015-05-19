<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suivi\SuiviBundle\Form\VenteForm;
use Suivi\SuiviBundle\Entity\Vente1;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SuiviVenteBundle:Default:index.html.twig');
    }

    public function adminAction()
    {
        return $this->render('SuiviVenteBundle:Default:admin.html.twig');
    }
    public function chefAction()
    {
        $message='';
        $vente=new Vente1();

        $form = $this->get('form.factory')->create(new  VenteForm(),$vente);
        $request = $this->get('request');//recupere de donner de formuliare etdestingue la methode get ou post

        if ($request->getMethod() == 'POST') {


            $form->bind($request);//ajouter le contenu dans la base de donner
            if ($form->isValid()) {
                $message='Ajout effectué avec succès';
                $em = $this->getDoctrine()->getManager();
                $em->persist($vente);
                $em->flush();
                $vente=new Vente1();
                $form = $this->get('form.factory')->create(new  VenteForm(),$vente);

            }
        }
        return $this->render('SuiviVenteBundle:Default:ajoutventechef.html.twig', array(
            'form' => $form->createView(),'message' => $message,'vente' =>$vente

        ));
    }
    
}
