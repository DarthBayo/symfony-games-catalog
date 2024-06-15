<?php

namespace App\Controller\V1;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/platforms')]
class PlatformsController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    #[Route('', name: 'platforms_create', methods: ['POST'])]
    public function create(): Response
    {
        try {
            return $this->json(['data' => [
                'class' => self::class,
                'function' => __FUNCTION__
            ]]);
        } catch (\Throwable $t) {
            $this->logger->error(sprintf('Error in class: %s | Method: %s\nMessage: %s\nTraceError: %s', self::class, __FUNCTION__, $t->getMessage(), $t->getTraceAsString()));
            return $this->json([], status: Response::HTTP_BAD_REQUEST);
        }
    }
}
