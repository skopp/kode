<?php

namespace Kode\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PlayController extends Controller
{
    /**
     * @Route("/", name="_play")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

}
