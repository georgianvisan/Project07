<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=45)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45)
     */
    public $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45)
     */
    public $email;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryaddress", type="string", length=255)
     */
    private $deliveryaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="invoiceaddress", type="string", length=255)
     */
    private $invoiceaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45)
     */
    private $phone;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }


    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return client
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Set password
     *
     * @param string $password
     *
     * @return client
     */
    public function setPassword($password)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set deliveryaddress
     *
     * @param string $deliveryaddress
     *
     * @return client
     */
    public function setDeliveryaddress($deliveryaddress)
    {
        $this->deliveryaddress = $deliveryaddress;

        return $this;
    }

    /**
     * Get deliveryaddress
     *
     * @return string
     */
    public function getDeliveryaddress()
    {
        return $this->deliveryaddress;
    }

    /**
     * Set invoiceaddress
     *
     * @param string $invoiceaddress
     *
     * @return client
     */
    public function setInvoiceaddress($invoiceaddress)
    {
        $this->invoiceaddress = $invoiceaddress;

        return $this;
    }

    /**
     * Get invoiceaddress
     *
     * @return string
     */
    public function getInvoiceaddress()
    {
        return $this->invoiceaddress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

}

