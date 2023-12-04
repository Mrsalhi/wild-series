<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\Response\ResponseStream;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\CategoryRepository;

#[Route('/category', name: 'category_')]

class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render(
            'category/index.html.twig',
             ['categories' => $categories]);
    }
 
 
    #[Route('/show/{categoryName}', name: 'show')]
    public function show(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository): Response
    {
        $categories = $categoryRepository->findOneBy(['name' => $categoryName]);
        if (!$categories)
        {
            throw $this->createNotFoundException(
                'No program with id : found in category\'s table.'
            );
        }
        
        $programs = $programRepository->findBy(['category' => $categories->getId()], ['id' => 'DESC'], 3);
        if (!$programs)
        {
            throw $this->createNotFoundException(
                'No program with id : found in program\'s table.'
            );
        }

        return $this->render('category/show.html.twig', [
            'programs' => $programs,
            'category' => $categories,
        ]);
    }
}
