<?php

namespace App\Controller;

use App\Entity\Deck;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game_index")
     */
    public function gameIndex(): Response
    {
        // variables needed for if game is played fullscreen instead of from iframe in /game
        $deck = new Deck();

        return $this->render('game/index.html.twig', [
            "cards" => $deck->getDeck(),
        ]);
    }
}
