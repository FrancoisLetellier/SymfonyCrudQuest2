<?php

namespace FrancoisBundle\Controller;

use FrancoisBundle\Entity\terrain;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Terrain controller.
 *
 */
class terrainController extends Controller
{
    /**
     * Lists all terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terrains = $em->getRepository('FrancoisBundle:terrain')->findAll();

        return $this->render('terrain/index.html.twig', array(
            'terrains' => $terrains,
        ));
    }

    /**
     * Finds and displays a terrain entity.
     *
     */
    public function showAction(terrain $terrain)
    {

        return $this->render('terrain/show.html.twig', array(
            'terrain' => $terrain,
        ));
    }
}
