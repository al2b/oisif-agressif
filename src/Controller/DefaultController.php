<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
        ]);
    }

    /**
     * @Route("/1", name="oisif1")
     */
    public function oisifAgressif1Action()
    {
        return $this->render('default/1.html.twig', [
        ]);
    }

    /**
     * @Route("/2", name="oisif2")
     */
    public function oisifAgressif2Action()
    {
        return $this->render('default/2.html.twig', [
        ]);
    }

    /**
     * @Route("/3", name="oisif3")
     */
    public function oisifAgressif3Action()
    {
        return $this->render('default/3.html.twig', [
        ]);
    }

    /**
     *
      @Route("/3/compil-train", name="compil3")
     */
    public function compil()
    {
        return $this->render('default/compil3.html.twig', [
        ]);
    }



}
