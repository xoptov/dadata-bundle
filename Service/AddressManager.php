<?php

namespace Xoptov\DaDataBundle\Service;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Form\FormFactoryInterface;
use Xoptov\DaDataBundle\Form\Type\StandardResponseType;

class AddressManager
{
    /** @var ClientInterface */
    private $client;

    /** @var FormFactoryInterface */
    private $formFactory;

    /**
     * AddressManager constructor.
     * @param ClientInterface $client
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(ClientInterface $client, FormFactoryInterface $formFactory)
    {
        $this->client = $client;
        $this->formFactory = $formFactory;
    }

    /**
     * @param $value
     * @return bool|mixed
     */
    public function standardize($value)
    {
        $json = json_encode(array($value));

        try {
            $response = $this->client->request("POST", null, array("body" => $json));
        } catch (RequestException $e) {
            return false;
        }

        $content = (string)$response->getBody();
        $data = json_decode($content,true);
        $form = $this->formFactory->create(StandardResponseType::class, null, array(
            "csrf_protection" => false
        ));

        $form->submit($data);

        if ($form->isValid()) {
            return $form->getData();
        }

        return false;
    }
}