<?php

namespace Xoptov\DaDataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Xoptov\DaDataBundle\Model\AddressObject;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddressObjectType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fiasId', TextType::class)
            ->add('kladrId', TextType::class)
            ->add('type', TextType::class)
            ->add('withType', TextType::class)
            ->add('typeFull', TextType::class)
            ->add('value', TextType::class);
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', AddressObject::class);
    }
}