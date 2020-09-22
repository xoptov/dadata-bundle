<?php

namespace Xoptov\DaDataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Xoptov\DaDataBundle\Model\Coordinates;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CoordinatesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("latitude", TextType::class)
            ->add("longitude", TextType::class)
            ->add("accuracy", TextType::class);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Coordinates::class);
    }
}