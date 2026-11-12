<?php

namespace App\Controller;

use App\Repository\ParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ParticipantDisplayController extends AbstractController
{
    #[Route('/partlist', name: 'parti_show')]
    public function show(ParticipantRepository $participantRepository): Response
    {
        $participants = $participantRepository->findAll();

        return $this->json($participants);
    }
}
