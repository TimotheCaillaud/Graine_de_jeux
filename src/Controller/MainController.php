<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main_homepage')]
    public function homepage(): Response
    {

        // Simulate adding a new slide
        $intro_slides = [
            ['image' => 'images/ludotheque_canape.jpg', 'title' => 'Slide 1', 'description' => ''],
            ['image' => 'images/ludotheque_piece.jpg', 'title' => 'Slide 2', 'description' => ''],
        ];

        $graine_de_jeux_slides = [
            ['image' => 'images/graine-de-jeux-loft.jpg', 'title' => 'Loft', 'description' => ''],
            ['image' => 'images/graine-de-jeux-riviere.jpg', 'title' => 'Rivière', 'description' => 'Parfait pour une baignade'],
            ['image' => 'images/ludotheque_canape.jpg', 'title' => '', 'description' => ''],
            ['image' => 'images/graine-de-jeux-neige.jpg', 'title' => 'Vue sous la neige', 'description' => ''], // New slide
        ];

        $around_slides = [
            ['image' => 'images/cascade-de-la-beaume-proche.jpg', 'title' => 'Cascade de la Beaume', 'description' => ''],
            ['image' => 'images/orgues-de-prades.jpg', 'title' => 'Orgues de Prades', 'description' => ''],
            ['image' => 'images/pinatelle-du-zouave.jpg', 'title' => 'Pinatelle du Zouave', 'description' => ''],
            ['image' => 'images/ravin-de-corboeuf.jpg', 'title' => 'Ravin de Corboeuf', 'description' => ''], // New slide
            ['image' => 'images/rando-rond-de-l-ange.jpg', 'title' => 'Rando du Rond de l\'Ange', 'description' => ''], // New slide
        ];

        $events_slides = [
            ['image' => 'images/festival-du-roi-de-l-oiseau.jpg', 'title' => 'Festival du Roi de l\'Oiseau', 'description' => ''],
            ['image' => 'images/interfolk.png', 'title' => 'Interfolk', 'description' => ''],
        ];


        return $this->render('main/homepage.html.twig', [
            'controller_name' => 'MainController',
            'intro_slides' => $intro_slides,
            'graine_de_jeux_slides' => $graine_de_jeux_slides,
            'around_slides' => $around_slides,
            'events_slides' => $events_slides,
        ]);
    }
}
