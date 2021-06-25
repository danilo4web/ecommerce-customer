<?php

declare(strict_types=1);

namespace Ecommerce\CustomerService\Entity;

use Doctrine\ORM\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="Ecommerce\CustomerService\Repository\RecipeRepository")
 */
class CustomerEntity
{
    /** @var integer */
    const STATUS_ENABLED = 1;

    /** @var integer */
    const STATUS_DISABLED = 0;

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="`name`", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="`email`", type="string")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="`phone`", type="string")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="`address`", type="string")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="`gender`", type="string")
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="`status`", type="integer")
     */
    private $status;

    /** @return integer */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }


    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer $status
     * @return \Ecommerce\CustomerService\Entity\CustomerEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
