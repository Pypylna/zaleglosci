<?php

namespace OurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', 'textarea')
            ->add('lastName', 'textarea')
            ->add('birthday', null, array('widget' => 'single_text'))    //??? Po co ta tablica?
            ->add('knownNicknames','textareas')
            ->add('books', 'textarea', array('required' => false))
            ->add('isDead');
    }

    public function getName()
    {
        return 'Author';
    }
}
