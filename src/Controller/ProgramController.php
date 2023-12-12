<?php

namespace App\Controller;

use App\Entity\Season;
use App\Entity\Episode;
use App\Entity\Program;
use App\Form\ProgramType;
use App\Repository\SeasonRepository;
use App\Repository\EpisodeRepository;
use App\Repository\ProgramRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\Response\ResponseStream;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProgramRepository $programRepository): Response
    {
        $programs = $programRepository->findAll();

        return $this->render(
            'program/index.html.twig',
             ['programs' => $programs]);
    }
    #[Route('/new', name: 'new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $program = new Program();

        // Create the form, linked with $category
        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);
       
        if ($form->isSubmitted()&& $form->isValid()) {
            $entityManager->persist($program);
            $entityManager->flush(); 
            
            $this->addFlash('success', 'The new program has been created');

        return $this->redirectToRoute('program_index');
        }
        return $this->render('program/new.html.twig', [
            'form' => $form,
            'program' => $program,
        ]);
    
}
#[Route('/{id}', name: 'delete', methods: ['POST'])]
public function delete(Request $request, Program $program, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$program->getId(), $request->request->get('_token'))) {
        $entityManager->remove($program);
        $entityManager->flush();
     $this->addFlash('danger','le programme a bien été supprimer');

    }

    return $this->redirectToRoute('program_index', [], Response::HTTP_SEE_OTHER);
}
#[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Program $program, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(ProgramType::class, $program);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        $this->addFlash('success','le programme a bien été modifier');
        return $this->redirectToRoute('program_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('program/edit.html.twig', [
        'program' => $program,
        'form' => $form,
    ]);
}
    #[Route('/show/{id<^[0-9]+$>}', name: 'show')]
public function show(int $id, ProgramRepository $programRepository):Response
{
    $program = $programRepository->findOneBy(['id' => $id]);
    // same as $program = $programRepository->find($id);

    if (!$program) {
        throw $this->createNotFoundException(
            'No program with id : '.$id.' found in program\'s table.'
        );
    }
    return $this->render('program/show.html.twig', [
        'program' => $program,
    ]);
}
 #[Route('/{programId}/seasons/{seasonId}', name:'season_show')]
public function showSeason(int $programId, int $seasonId, ProgramRepository $programRepository, SeasonRepository $seasonRepository):Response
{

    $program = $programRepository->findOneBy(['id'=> $programId]);
    $season = $seasonRepository->find($seasonId);
    if (!$program) {
        throw $this->createNotFoundException(
            ''.$programId.''
            );
        }
        return $this->render('program/season_show.html.twig', [
            'program' => $program,
             'season' => $season,
        ]);
    }
    
 #[Route('/{program}/seasons/{season}/episode{episode}', name:'episode_show')]
 public function showEpisode(Program $program, Season $season, Episode $episode):Response
 {
     if (!$program) {
         throw $this->createNotFoundException(
             ''.$program.''
             );
         }
         return $this->render('program/episode_show.html.twig', [
             'program' => $program,
              'season' => $season,
              'episode' => $episode,
         ]);
     }
 }


