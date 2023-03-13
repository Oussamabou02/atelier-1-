<?php
namespace App\Controller;
use App\taxe\calculateur;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{ 
    
    #[Route('/hello')]
    function show()
    {
        var_dump("hello");die;
    }
    #[Route('/test',name:'test')]
    function test(calculateur $calcul)
    {
        $tva=$calcul->prixtva(100);
        $ttc=$calcul->prixttc(50);
        dd("le prix est $tva");
        
    }
    
}
