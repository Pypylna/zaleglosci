<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Series;

/**
 * Series1 controller.
 *
 * @Route("/series1")
 */

class Series1Controller extends Controller
{
    
    /**
    * @Route("/")
    */
    public function indexAction()
    {
        return $this->render('series1/index.html.twig');
    }
    
    /**
    * Pokazuje konkretny rekord series1
    *
    * @Route("/show/{id}")
    */
   public function showAction($id)
   {
       $serial = $this->getDoctrine()->getRepository("AppBundle:Series")->find($id);
       
       return $this->render( 'series1/show.html.twig', array(
           'serial' => $serial
       ));
       
   }
    
    /**
    * Dodaje rekord do series1
    *
    * @Route("/add")
    */
   public function addAction()
   {
       //FUTURE
        //tu będą formularze

   }   
   
   /**
    * Usuwa rekord z series1
    * 
    * @Route("/remove/{id}")
    */
   public function removeAction($id)
   {
        $serial = $this->getDoctrine()->getRepository("AppBundle:Series")->find($id);

        $dm = $this->getDoctrine()->getManager();
        $dm->remove($serial);                                        //remove przy usuwaniu
        
        $dm->flush();   
        
        
        return $this->render('series1/remove.html.twig');       
   }

}