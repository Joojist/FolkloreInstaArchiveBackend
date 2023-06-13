<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Post")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="string")
    */
    private $igUrl;


    /**
     * @ORM\Column(type="integer")
     */
    private $igUserId;

    /**
     * @ORM\Column(type="integer")
     */
    private $likes;

    /**
     * @ORM\Column(type="integer")
     */
    private $creatorId;

    /**
     * @ORM\Column(type="integer")
     */
    private $updaterId;

    /**
     * @ORM\Column(type="datetime")
     */
    private $igCreatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deletedAt;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of igUrl
     */ 
    public function getIgUrl()
    {
        return $this->igUrl;
    }

    /**
     * Set the value of igUrl
     *
     * @param int $igUrl
     * @return  self
     */ 
    public function setIgUrl($igUrl)
    {
        $this->igUrl = $igUrl;

        return $this;
    }

    /**
     * Get the value of igUserId
     */ 
    public function getIgUserId()
    {
        return $this->igUserId;
    }

    /**
     * Set the value of igUserId
     *
     * @param int $igUserId
     * @return  self
     */ 
    public function setIgUserId($igUserId)
    {
        $this->igUserId = $igUserId;

        return $this;
    }

    /**
     * Get the value of likes
     */ 
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set the value of likes
     *
     * @param int $likes
     * @return  self
     */ 
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get the value of creatorId
     */ 
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * Set the value of creatorId
     *
     * @param int $creatorId
     * @return  self
     */ 
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get the value of updaterId
     */ 
    public function getUpdaterId()
    {
        return $this->updaterId;
    }

    /**
     * Set the value of updaterId
     *
     * @param int $updaterId
     * @return  self
     */ 
    public function setUpdaterId($updaterId)
    {
        $this->updaterId = $updaterId;

        return $this;
    }

    /**
     * Get the value of igCreatedAt
     */ 
    public function getIgCreatedAt()
    {
        return $this->igCreatedAt;
    }

    /**
     * Set the value of igCreatedAt
     *
     * @param \DateTime $igCreatedAt
     * @return  self
     */ 
    public function setIgCreatedAt($igCreatedAt)
    {
        $this->igCreatedAt = $igCreatedAt;

        return $this;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param \DateTime $createdAt
     * @return  self
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of updatedAt
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param \DateTime $updatedAt
     * @return  self
     */ 
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get the value of deletedAt
     */ 
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set the value of deletedAt
     *
     * @param \DateTime $deletedAt
     * @return  self
     */ 
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
}
