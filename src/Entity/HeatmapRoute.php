<?php

namespace App\Entity;

use App\Repository\HeatmapRouteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HeatmapRouteRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class HeatmapRoute
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Heatmap::class, inversedBy="heatmapRoutes")
     */
    private $heatmapId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $route;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeatmapId(): ?Heatmap
    {
        return $this->heatmapId;
    }

    public function setHeatmapId(?Heatmap $heatmapId): self
    {
        $this->heatmapId = $heatmapId;

        return $this;
    }

    public function getRoute(): ?string
    {
        return $this->route;
    }

    public function setRoute(string $route): self
    {
        $this->route = $route;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
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
}
