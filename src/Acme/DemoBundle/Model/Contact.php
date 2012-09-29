<?php

namespace Acme\DemoBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Zymfony\Component\Validator\Constraint;

class Contact
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min = "2")
     */
    protected $name;

    /**
     * @Constraint(validator = "creditcard")
     */
    protected $creditCard;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     */
    protected $message;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }

    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}
