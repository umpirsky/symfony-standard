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
     * @Assert\NotBlank()
     * @Constraint(validator = "postcode", options = {"locale" = "en_GB"})
     */
    protected $postCode;

    /**
     * @Assert\NotBlank()
     * @Constraint(validator = "hostname")
     */
    protected $domain;

    /**
     * @Assert\NotBlank()
     * @Constraint(validator = "isbn")
     */
    protected $isbn;

    /**
     * @Assert\NotBlank()
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

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
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
