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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getIgUrl(): string
    {
        return $this->igUrl;
    }

    public function setIgUrl(string $igUrl): self
    {
        $this->igUrl = $igUrl;
        return $this;
    }

    public function getIgUserId(): int
    {
        return $this->igUserId;
    }

    public function setIgUserId(int $igUserId): self
    {
        $this->igUserId = $igUserId;
        return $this;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;
        return $this;
    }

    public function getCreatorId(): int
    {
        return $this->creatorId;
    }

    public function setCreatorId(int $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }

    public function getUpdaterId(): int
    {
        return $this->updaterId;
    }

    public function setUpdaterId(int $updaterId): self
    {
        $this->updaterId = $updaterId;
        return $this;
    }

    public function getIgCreatedAt(): \DateTimeInterface
    {
        return $this->igCreatedAt;
    }

    public function setIgCreatedAt(\DateTimeInterface $igCreatedAt): self
    {
        $this->igCreatedAt = $igCreatedAt;
        return $this;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getDeletedAt(): \DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }
}
