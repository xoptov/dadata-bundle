<?php

namespace Xoptov\DaDataBundle\Service;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Xoptov\DaDataBundle\Model\StandardResponse;
use DaDataBundle\Exception\InvalidFormException;
use Symfony\Component\Form\FormFactoryInterface;
use Xoptov\DaDataBundle\Form\Type\StandardResponseType;

class AddressManager
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @param ClientInterface      $client
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(
        ClientInterface $client,
        FormFactoryInterface $formFactory
    ) {
        $this->client = $client;
        $this->formFactory = $formFactory;
    }

    /**
     * @param mixed $value
     *
     * @return StandardResponse|false
     *
     * @throws GuzzleException
     * @throws \Exception
     */
    public function standardize($value)
    {
        $json = json_encode(array($value));

        if (!$json) {
            throw new \Exception('Can\'t encode $value content to json');
        }

        $response = $this->client->request('POST', null, ['body' => $json]);

        $content = (string)$response->getBody();
        $data = json_decode($content,true);

        if (!$data) {
            throw new \Exception('Can\'t decode $data content to array');
        }

        $form = $this->formFactory->create(StandardResponseType::class, null, [
            'csrf_protection' => false
        ]);

        $form->submit($data);

        if (!$form->isValid()) {
            throw new InvalidFormException($form, 'Invalid form');
        }

        return $form->getData();
    }

    /**
     * @param mixed $value
     *
     * @return StandardResponse|false
     *
     * @throws GuzzleException
     * @throws \Exception
     */
    public function clean($value)
    {
        $json = json_encode(array($value));

        if (!$json) {
            throw new \Exception('Can\'t encode $value content to json');
        }

        $response = $this->client->request('POST', null, ['body' => $json]);

        $content = (string)$response->getBody();
        $data = json_decode($content, true);

        if (!$data) {
            throw new \Exception('Can\'t decode $data content to array');
        }

        $form = $this->formFactory->create(StandardResponseType::class, null, [
            'csrf_protection' => false
        ]);

        $form->submit($data);

        if (!$form->isValid()) {
            throw new InvalidFormException($form, 'Invalid form');
        }

        return $form->getData();
    }
}