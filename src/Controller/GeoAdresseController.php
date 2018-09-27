<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeoAdresseController extends AbstractController
{
    /**
     * @Route("/geo-adresse", name="geo_adresse")
     */
    public function index()
    {
        return $this->render('geo_adresse/index.html.twig', [
            'controller_name' => 'GeoAdresseController',
        ]);
    }


}
