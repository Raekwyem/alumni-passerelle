<?php

namespace App\Form;

use App\Entity\Groups;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,
                [
                    'label'=> 'Nom du groupe'
                ]
            )
            ->add('tag', TextType::class,
                [
                    'label' => 'Tags'
                ]
            )
            /*->add('author', TextType::class,
                [
                    'label' => 'Auteur'
                ]
            )*/
            ->add('parent')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Groups::class,
        ]);
    }
}
