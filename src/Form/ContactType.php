<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => 'Votre nom * :', 'required' => true, 'attr' => array('maxlength' => 35)))
            ->add('e-mail', EmailType::class, array('label' => 'Votre e-mail * :', 'required' => true, 'attr' => array('maxlength' => 35)))
            ->add('message', TextareaType::class, array('label' => 'Votre message * :', 'required' => true, 'attr' => array('maxlength' => 450)));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
