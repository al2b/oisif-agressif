<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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

    /**
     * @param Request $request
     * @return BinaryFileResponse
     * @Route("compil-train/download", name="download-compiltrain")
     * @Method({"GET", "POST"})
     */

    public function downloadAction(Request $request)
    {

        /**
         * Generate file to upload
         */

        $path = $this->get('kernel')->getRootDir() . '/../public/music/compil-train.wav';

        $response = new BinaryFileResponse($path);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'compil-train.wav');

        return $response;
    }


}
