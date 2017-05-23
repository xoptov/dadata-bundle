<?php

namespace Xoptov\DaDataBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class StandardResponseSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => "preSubmit"
        );
    }

    /**
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();

        if (is_array($data) && count($data)) {
            $result = array(
                "addresses" => $data
            );

            $event->setData($result);
            return;
        }

        $event->setData(null);
    }
}