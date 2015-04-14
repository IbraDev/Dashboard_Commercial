<?php

namespace Utilisateur\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UtilisateurBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
