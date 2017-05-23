<?php

namespace Xoptov\DaDataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Xoptov\DaDataBundle\Form\EventListener\StandardResponseSubscriber;
use Xoptov\DaDataBundle\Model\StandardResponse;

class StandardResponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("addresses", CollectionType::class, array(
            "entry_type" => AddressType::class,
            "allow_add" => true
        ));

        $builder->addEventSubscriber(new StandardResponseSubscriber());
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", StandardResponse::class);
    }
}