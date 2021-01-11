<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, array(
                'label' => 'Désignation Client '))
            ->add('responsable', TextType::class, array(
                'label' => 'Responsable  :'))
           
            ->add('adresse', TextType::class, array(
                'label' => 'Adresse Client'))
            ->add('ville', TextType::class, array(
                    'label' => 'Ville :  '))
            ->add('tel', TextType::class, array(
                'label' => 'Téléphone'))
             ->add('email', TextType::class, array(
                'label' => 'Email'))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
