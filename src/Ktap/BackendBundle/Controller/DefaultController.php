<?php

namespace Ktap\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use FOS\UserBundle\Model\User as BaseUser;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KtapBackendBundle:Default:index.html.twig');
    }
    
    public function promoteUserAction()
    {
        $userManager = $container->get('fos_user.user_manager');
        //$user = $userManager->createUser();
        return $this->render('KtapBackendBundle:Default:promoteUser.html.twig');
    }    
}
