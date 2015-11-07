<?php

namespace CPANA\ClassifiedsBundle\Controller\Pub;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdsController extends Controller
{
    public function showAllAction()
    {
		$em = $this->getDoctrine()->getEntityManager();
		$allAds = $em->getRepository('CPANAClassifiedsBundle:Ads')->findAll();
		$allSpecificItems = $em->getRepository('CPANAClassifiedsBundle:SpecificItems')->findAll();

        if (!$allAds) {
            throw $this->createNotFoundException('Unable to find categories.');
        }
        
        return $this->render('CPANAClassifiedsBundle:Pub\Ads:show_all.html.twig', array( 'all_ads' => $allAds, 'all_items' => $allSpecificItems ) );
    
	
	
    }
}
