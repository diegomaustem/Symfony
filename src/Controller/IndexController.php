<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        $posts = $this->getPosts();

        return $this->render('index/index.html.twig', compact('posts'));
    }

    #[Route('/post/{slug?}', name: 'app_show')]
    public function show(string $slug = null): Response
    {
        return $this->render('index/single.html.twig', [
            'slug' => $slug,
        ]);
    }

    private function getPosts(): array 
    {
        return [
            ['id' => 1, 'title' => '1 - Primeira postagem',],
            ['id' => 2, 'title' => '2 - Segunda postagem',],
            ['id' => 3, 'title' => '3 - Terceira postagem',],
            ['id' => 4, 'title' => '4 - Quarta postagem',],
            ['id' => 5, 'title' => '5 - Quinta postagem',],
            ['id' => 6, 'title' => '6 - Sexta postagem',],
            ['id' => 7, 'title' => '7 - Sétima postagem',],

        ];
    }
}
