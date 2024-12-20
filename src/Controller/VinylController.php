<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        // die('Infunisa');
        // return new Response('INFUNISA');

        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'Infunisa',
            'tracks' => $tracks,
        ]);
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
