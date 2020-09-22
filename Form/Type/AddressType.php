<?php

namespace Xoptov\DaDataBundle\Form\Type;

use Xoptov\DaDataBundle\Model\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Xoptov\DaDataBundle\Form\EventListener\AddressSubscriber;

class AddressType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('source', TextType::class)
            ->add('result', TextType::class)
            ->add('region', AddressObjectType::class)
            ->add('area', AddressObjectType::class, [
                'required' => false
            ])
            ->add('locality', AddressObjectType::class, [
                'required' => false
            ])
            ->add('district', AddressObjectType::class, [
                'required' => false
            ])
            ->add('street', AddressObjectType::class, [
                'required' => false
            ])
            ->add('house', AddressObjectType::class, [
                'required' => false
            ])
            ->add('fiasId', TextType::class)
            ->add('kladrId', TextType::class)
            ->add('fiasLevel', TextType::class)
            ->add('coordinates', CoordinatesType::class, [
                'required' => false
            ]);

        $builder->addEventSubscriber(new AddressSubscriber());
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Address::class);
    }
}