<?php

namespace App\Controller;

use App\Service\Zoo;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ZooController extends AbstractController
{
    private static $zoo;

    private function getZoo()
    {
        if (is_null(self::$zoo)) {
            self::$zoo = new Zoo();
        }

        return self::$zoo;
    }

    /**
     * @Route("/zoo")
     */
    public function zoo(): Response
    {
        return $this->render('zoo/index.html.twig', [
            'zoo' => $this->getZoo()->checkStatus(),
        ]);
    }

    /**
     * @Route("/zoo/decline")
     */
    public function zooDecline(): Response
    {
        $this->getZoo()->decline();

        return $this->render('zoo/index.html.twig', [
            'zoo' => $this->getZoo()->checkStatus(),
        ]);
    }

    /**
     * @Route("/zoo/feed")
     */
    public function zooFeed(): Response
    {
        $this->getZoo()->feed();

        return $this->render('zoo/index.html.twig', [
            'zoo' => $this->getZoo()->checkStatus(),
        ]);
    }
}