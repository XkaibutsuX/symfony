<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;



class DefaultController extends AbstractController
{

    /**
     * @Route("/hello/{name}")
     */

    public function index($name, LoggerInterface $logger)
    {




        return $this->render('default/index.html.twig', ['name' => $name,]);

    }

    /**
     * @Route("/simplicity")
     */

    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }
}

 ?>