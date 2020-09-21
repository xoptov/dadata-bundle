<?php

namespace Xoptov\DaDataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Xoptov\DaDataBundle\Model\StandardResponse;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Xoptov\DaDataBundle\Form\EventListener\StandardResponseSubscriber;

class StandardResponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('addresses', CollectionType::class, [
                'entry_type' => AddressType::class,
                'allow_add' => true
            ]);

        $builder->addEventSubscriber(new StandardResponseSubscriber());
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', StandardResponse::class);
    }
}