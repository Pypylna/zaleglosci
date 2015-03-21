<?php

namespace Acme\Bundle\BookWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Tests\Fixtures\AuthorType;


class AdminBookWebController extends Controller
{
    /**
     * @Route("/BookWeb/Admin/")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/BookWeb/Admin/addAuthor")
     * @Template()
     */    
    public function addAuthorAction()
    {
        $author = new AuthorType;       //PROBLEM!
        $form = $this->createForm(new AuthorType(), $author);
        
        return $this->render('AdminBookWeb/addAuthor.html.twig',
                array(
                    'form' => $form->createView(),
                    ));
    }
    
}
