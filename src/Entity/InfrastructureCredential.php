<?php

namespace App\Entity;

use App\Repository\InfrastructureCredentialRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfrastructureCredentialRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class InfrastructureCredential
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apiKey;

    /**
     * @ORM\Column(type="text", length=65535 , nullable=true)
     */
    private $apiKeySecret;

    /**
     * @ORM\Column(type="text", length=65535 , nullable=true)
     */
    private $attributes;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="text", length=65535 , nullable=true)
     */
    private $apiToken;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userAccount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $connectionLimit;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    /** @ORM\PrePersist */
    public function setCreatedAtAutomatically()
    {
        if ($this->getCreatedAt() === null) {
            $this->setCreatedAt(new \DateTime());
        }
    }
    
    /** @ORM\PreUpdate */
    public function setUpdatedAtAutomatically()
    {
        $this->setUpdatedAt(new \DateTime());
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiKeySecret(): ?string
    {
        return $this->apiKeySecret;
    }

    public function setApiKeySecret(?string $apiKeySecret): self
    {
        $this->apiKeySecret = $apiKeySecret;

        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(?string $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(?string $apiToken): self
    {
        $this->apiToken = $apiToken;

        return $this;
    }

    public function getUserAccount(): ?string
    {
        return $this->userAccount;
    }

    public function setUserAccount(?string $userAccount): self
    {
        $this->userAccount = $userAccount;

        return $this;
    }

    public function getConnectionLimit(): ?int
    {
        return $this->connectionLimit;
    }

    public function setConnectionLimit(?int $connectionLimit): self
    {
        $this->connectionLimit = $connectionLimit;

        return $this;
    }
}
