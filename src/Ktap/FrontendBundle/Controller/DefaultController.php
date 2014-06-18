<?php

namespace Ktap\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KtapFrontendBundle:Default:index.html.twig');
    }
    
    public function afilieriAction()
    {
        return $this->render('KtapFrontendBundle:Default:afilieri.html.twig');
    }    
    public function membriAction()
    {
        return $this->render('KtapFrontendBundle:Default:membri.html.twig');
    }    
    public function contactAction()
    {
        return $this->render('KtapFrontendBundle:Default:contact.html.twig');
    }   
    
    public function regulamenteAction()
    {
        return $this->render('KtapFrontendBundle:Default:regulamente.html.twig');
    }    
    
    public function echipamenteAction()
    {
        return $this->render('KtapFrontendBundle:Default:echipamente.html.twig');
    }
    
    public function evenimenteAction()
    {
        return $this->render('KtapFrontendBundle:Default:evenimente.html.twig');
    }    
    
    public function imaginiAction()
    {
        return $this->render('KtapFrontendBundle:Default:imagini.html.twig');
    }    
}