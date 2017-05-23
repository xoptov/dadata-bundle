<?php

namespace Xoptov\DaDataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Xoptov\DaDataBundle\Form\EventListener\AddressSubscriber;
use Xoptov\DaDataBundle\Model\Address;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("source", TextType::class)
            ->add("result", TextType::class)
            ->add("region", AddressObjectType::class)
            ->add("area", AddressObjectType::class, array(
                "required" => false
            ))
            ->add("locality", AddressObjectType::class, array(
                "required" => false
            ))
            ->add("district", AddressObjectType::class, array(
                "required" => false
            ))
            ->add("street", AddressObjectType::class, array(
                "required" => false
            ))
            ->add("house", AddressObjectType::class, array(
                "required" => false
            ))
            ->add("fiasId", TextType::class)
            ->add("kladrId", TextType::class)
            ->add("fiasLevel", TextType::class)
            ->add("coordinate", CoordinateType::class, array(
                "required" => false
            ));

        $builder->addEventSubscriber(new AddressSubscriber());
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Address::class);
    }
}