<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    #[Route('/gamme/index', name: 'app_gamme')]
    public function index(): Response
    {
        $articles=
        [
        ["id"=>101,
        "libelle"=>"Asus i3",
        "quantite"=>30,
        "gamme"=>"ordinateur"],
        ["id"=>102,
        "libelle"=>"laser Brother",
        "quantite"=>10,
        "gamme"=>"imprimante"],
        ["id"=>103,
        "libelle"=>"Epson S31",
        "quantite"=>12,
        "gamme"=>"videoprojecteur"],];
        return $this->render('gamme/lister.html.twig',['articles'=>$articles]);
    }
}
