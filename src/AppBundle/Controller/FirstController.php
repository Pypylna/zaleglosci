<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FirstController extends Controller
{
    /**
     * @Route("/first/programmer")
     */
    public function firstAction()
    {

        return $this->render('first/programmer.html.twig');
    }
    
    
    
    /**
     * @Route("/first/cutter/{slowo}/{znak}")
     */
    public function cutterAction($slowo,$znak)
    {

        $wynik=str_replace($znak, "", $slowo);
        
        return $this->render('first/cutter.html.twig',
                array(
                    'wynik'=>$wynik
                ));
    }
    
    
    /**
     * @Route("/first/calendar/{mies}")
     */
    public function calendarAction($mies)
    {
        $M=array("styczen","luty","marzec","kwiecien","maj","czerwiec","lipiec",
        "sierpien", "wrzesien","pazdziernik","listopad","grudzien");
        
        unset($M[$mies]);
        $M=  array_reverse($M);
        
        return $this->render('first/calendar.html.twig',
                array(
                    'M'=>$M
                ));
    }
    
    
    /**
     * @Route("/first/array")
     */
    public function arrayAction()
    {
        $items=$_GET['items'];
        
        //$items to string, ale moge się po nim poruszac jak po tablicy
        
        $j=0;
        $T=array();
        $b=false;       //czy T[j] zawiera jakiś element?
        //wprowadzam b, bo nie dziala $a.= dla pustego $a
        
        for($i=0; $i < strlen($items); $i++)
        {
            if($items[$i]==',')
            {
                $j++;
                $b=false;
            }
            else
            {
                if($b)
                {
                    $T[$j] .= $items[$i];
                }
                else
                {
                    $T[$j] = $items[$i];
                }
                $b=true;
            }
        }
        
        sort($T);
        
        return $this->render('first/array.html.twig',
                array(
                    'T'=>$T
                ));
    }

}