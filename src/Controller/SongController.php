<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{

    #[Route('/api/songs/{id}', name: 'home')]
    public function getSong($id): Response
    {
        // return $this->render('template.html.twig');
        // dd($id);
        // TODO query the database
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];
        // return new JsonResponse($song);
        return $this->json($song);
    }
}
