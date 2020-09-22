<?php

namespace Xoptov\DaDataBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddressSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit'
        );
    }

    /**
     * @param FormEvent $event
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $resultData = array(
            'source' => $data['source'],
            'result' => $data['result']
        );

        $this->resolveSubData('region', $data, $resultData);
        $this->resolveSubData('area', $data, $resultData);
        $this->resolveSubData('locality', $data, $resultData, 'city');

        if (empty($resultData['locality'])) {
            $this->resolveSubData('locality', $data, $resultData, 'settlement');
        }

        $this->resolveSubData('district', $data, $resultData, 'city_district');
        $this->resolveSubData('street', $data, $resultData);
        $this->resolveSubData('house', $data, $resultData);

        if (!empty($data['fias_id'])) {
            $resultData['fiasId'] = $data['fias_id'];
        }

        if (!empty($data['kladr_id'])) {
            $resultData['kladrId'] = $data['kladr_id'];
        }

        if (!empty($data['fias_level'])) {
            $resultData['fiasLevel'] = $data['fias_level'];
        }

        if (isset($data['qc_geo']) && intval($data['qc_geo']) < 5) {
            if (!empty($data['geo_lat']) && !empty($data['geo_lon'])) {
                $resultData['coordinates'] = array(
                    'latitude' => $data['geo_lat'],
                    'longitude' => $data['geo_lon'],
                    'accuracy' => $data['qc_geo']
                );
            }
        }

        $event->setData($resultData);
    }

    private function resolveSubData($type, &$data, &$resultData, $prefix = null)
    {
        if (!$prefix) {
            $prefix = $type;
        }

        if (!empty($data[$prefix])) {
            $subData = array(
                'value' => $data[$prefix]
            );

            if (!empty($data[$prefix . '_fias_id'])) {
                $subData['fiasId'] = $data[$prefix . '_fias_id'];
            }

            if (!empty($data[$prefix . '_kladr_id'])) {
                $subData['kladrId'] = $data[$prefix . '_kladr_id'];
            }

            if (!empty($data[$prefix . '_with_type'])) {
                $subData['withType'] = $data[$prefix . '_with_type'];
            }

            if (!empty($data[$prefix . '_type'])) {
                $subData['type'] = $data[$prefix . '_type'];
            }

            if (!empty($data[$prefix . '_type_full'])) {
                $subData['typeFull'] = $data[$prefix . '_type_full'];
            }

            $resultData[$type] = $subData;
        }
    }
}