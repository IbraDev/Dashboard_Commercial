<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Suivi\SuiviBundle\Entity\Categorie;
use Suivi\SuiviBundle\Form\CategorieType;
class CategorieController extends Controller
{
  
    public function sendAction()
    {
        $categorie = new Categorie;
        $form = $this->createForm(new CategorieType,$categorie);
        $request = $this->getRequest();
        
        if($request->isMethod('Post')){
            $form->bind($request);
            
            if($form->isValid()){
                
                $categorie = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($categorie);
                $em->flush();
                
                return $this->redirect($this->generateUrl('suivi_vente_admin'));
                
                
                
        }
        }
        return $this->render('SuiviVenteBundle:categorie:send.html.twig', array( 'form'=>$form->createView()));
    }
    
    public function listAction()
    {
          return $this->render('SuiviVenteBundle:categorie:list.html.twig');
}
}