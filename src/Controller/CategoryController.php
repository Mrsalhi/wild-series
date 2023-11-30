<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\Response\ResponseStream;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;

#[Route('/category/', name: 'category_index')]

class CategoryController extends AbstractController
{
    #[Route('/category/', name: 'category_index')]
    public function index(ProgramRepository $programRepository): Response
    {
        $category = $categoryRepository->findBy();

        return $this->render(
            'category/category_index.html.twig',
             ['category' => $category]);
    }

    #[Route('/category/{categoryName}', name: 'category_show')]
public function show(int $id, CategoryRepository $categoryRepository):Response
{
    $category = $categoryRepository->findBy(['id' => $id]);
    // same as $category = $categoryRepository->findBy($id);

    if (!$category) {
        throw $this->createNotFoundException(
            'No category with id : '.$id.' found in category\'s table.'
        );
    }
    return $this->render('category/category_show.html.twig', [
        'category' => $category,
    ]);
}
}
