<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  
    public function adminAction()
    {
        return $this->render('SuiviVenteBundle:Default:admin.html.twig');
    }
    public function chefAction()
    {
        return $this->render('SuiviVenteBundle:Default:chef.html.twig');
    }
     public function supAction()
    {
        return $this->render('SuiviVenteBundle:Default:sup.html.twig');
    }
}
