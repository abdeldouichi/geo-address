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

        $page_param = $this->get("helper.page_meta_param");
        $page_param->setTitle("");
        $page_param->setDescription("");
        $page_param->setImagePage("");
        $page_param->setTwitterAcount("");
        $page_param->setUri("");
        $page_param->setIfPaginator(false);
        $page_param->setUrlPrev("");
        $page_param->setUrlNext("");
        $page_param->setIfCanonical(false);
        $page_param->setIfNointex("");
        $page_param->setSchemaScript("");
        $page_param->setIfAmp("");



        return $this->render('geo_adresse/index.html.twig', [
            'page_param' => $page_param,

        ]);
    }


}
