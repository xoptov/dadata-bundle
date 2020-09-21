<?php

namespace DaDataBundle\Exception;

use Throwable;
use Symfony\Component\Form\FormInterface;

class InvalidFormException extends \Exception
{
    /**
     * @var FormInterface
     */
    private $form;

    /**
     * @param FormInterface  $form
     * @inheritdoc
     */
    public function __construct(
        FormInterface $form,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);

        $this->form = $form;
    }

    /**
     * @return FormInterface
     */
    public function getForm()
    {
        return $this->form;
    }
}