<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        // die('Infunisa');
        return new Response('INFUNISA');
    }
}
