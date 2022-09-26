<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 20);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
    // src/Controller/LuckyController.php

// ...



