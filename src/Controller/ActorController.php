<?php
namespace App\Controller;
use App\Entity\Actor;
use App\DataFixtures\ActorFixtures;
use App\DataFixtures\ProgramFixtures;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActorController extends AbstractController
{
    #[Route('/actor/show/{id}', name: 'actor_show')]
    public function show(Actor $actor): Response
    {
            if (!$actor) {
            throw $this->createNotFoundException(
                  'no program with id : ' . $actor . 'found in program\'s table.'
            );
        }
        return $this->render('actor/show.html.twig', ['actor' => $actor]);
    }
  

} 