<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul/some/{a}/{b}', name: 'app_some')]
   
        public function some($a,$b): Response
    {
        $s=$a+$b;
       
        return $this->render('calcul\some.html.twig',['a'=>$a,'b'=>$b,'s'=>$s]);
       
    }
    #[Route('/calcul/soustraction/{a}/{b}', name: 'app_sous')]
   
        public function soustraction($a,$b): Response
    {
        $s=$a-$b;
        
        return $this->render('calcul\sous.html.twig',['a'=>$a,'b'=>$b,'s'=>$s]);
       
    }
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
             
        
        return $this->render('calcul\accueil.html.twig');
       
    }
  
  
    }

