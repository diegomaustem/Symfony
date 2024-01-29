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
            ['id' => 1, 'title' => '1 - Primeira postagem', 'slug' => 'Postagem teste 1'],
            ['id' => 2, 'title' => '2 - Segunda postagem', 'slug' => 'Postagem teste 2'],
            ['id' => 3, 'title' => '3 - Terceira postagem', 'slug' => 'Postagem teste 3'],
            ['id' => 4, 'title' => '4 - Quarta postagem', 'slug' => 'Postagem teste 4'],
            ['id' => 5, 'title' => '5 - Quinta postagem', 'slug' => 'Postagem teste 5'],
            ['id' => 6, 'title' => '6 - Sexta postagem', 'slug' => 'Postagem teste 6'],
            ['id' => 7, 'title' => '7 - Sétima postagem', 'slug' => 'Postagem teste 7'],

        ];
    }
}
