<?php

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adminAction()
    {
        $userManager = $this->get('fos_user.user_manager');

// Pour charger un utilisateur
        $userss = $userManager->findUsers();
        $users = array();
        $n = 0;
        foreach ($userss AS $user ) {
            if($user->hasRole('ROLE_ADMIN') or $user->hasRole('ROLE_SUPER_ADMIN'))
            {
                $users[$n]=$user ;
                $n = $n+1;
            }
        }

        return $this->render('UtilisateurBundle:Liste:liste-admin.html.twig',array('users' =>$users));
    }
    public function supprimeAdminAction($id)
    {
        $userManager = $this->get('fos_user.user_manager');

// Pour charger un utilisateur
        $user = $userManager->findUserBy(array('id' => $id));
// Pour supprimer un utilisateur
        $userManager->deleteUser($user);
        return $this->redirect($this->generateUrl('admin_listeadmin'));
    }

}
