<?php
namespace App\Controller;
use App\Entity\Actor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActorController extends AbstractController{
    #[Route('actor/{id}', name: 'app_actor_show', methods: ['GET'])]
    public function show(Actor $Actor): Response
    {
        return $this->render('actor/show.html.twig', [
            'actor' => $Actor;
        ]);
    }

}