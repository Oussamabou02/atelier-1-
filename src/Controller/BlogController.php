<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/list', name: 'list_blog')]
    public function list(): Response
    {
        return new Response('<h1>liste</h1>');
    }


    #[Route('/blog/show/{id}/{name}', name: 'blog_detail')]
    public function show($id,$name): Response
    {
        return $this->render('blog\show.html.twig',['a'=>$id,'b'=>$name]);
       
    }
  
    #[Route('/blog/test', name: 'blog_test')]
    public function method(): Response
    {
        $url=$this->generateUrl('blog_detail',['id'=>100,'name'=>'ihjz']);
    dd($url);

        #return $this->redirect($url);
    }






}
