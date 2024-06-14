<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/games')]
class GamesController extends AbstractController
{
    #[Route(path: '', methods: ['POST'])]
    public function create(): Response
    {
        return $this->json('Create games');
    }

    #[Route(path: '', methods: ['GET'])]
    public function list(): Response
    {
        return $this->json('List games');
    }

    #[Route(path: '/{id<\d+>}', methods: ['GET'])]
    public function listOne(int $id): Response
    {
        return $this->json(sprintf('List game: %d', $id));
    }
}
