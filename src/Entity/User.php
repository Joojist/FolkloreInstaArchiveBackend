<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="username", type="string", length=20)
     */
    private $username;

    /**
     * @ORM\Column(name="password", type="string", length=155)
     */
    private $password;

    /**
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(name="deleted_at", type="datetime")
     */
    private $deletedAt;

    // Getters and setters...

    // Get the value of id
    public function getId()
    {
        return $this->id;
    }

    // Set the value of id
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    // Get the value of username
    public function getUsername()
    {
        return $this->username;
    }

    // Set the value of username
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    // Get the value of password
    public function getPassword()
    {
        return $this->password;
    }

    // Set the value of password
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    // Get the value of email
    public function getEmail()
    {
        return $this->email;
    }

    // Set the value of email
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    // Get the value of name
    public function getName()
    {
        return $this->name;
    }

    // Set the value of name
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    // Get the value of createdAt
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    // Set the value of createdAt
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    // Get the value of updatedAt
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    // Set the value of updatedAt
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    // Get the value of deletedAt
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    // Set the value of deletedAt
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }
}
