<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        // die('Infunisa');
        return new Response('INFUNISA');
    }

    #[Route('/browse/{slug}', name: 'browse')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Esta es la paǵina de búsqueda: ' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'Todas las búsquedas';
        }

        return new Response($title);
    }
}
