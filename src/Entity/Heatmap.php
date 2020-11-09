<?php

namespace App\Entity;

use App\Repository\HeatmapRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HeatmapRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class Heatmap
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $defaultName;

    /**
     * @ORM\Column(type="datetime" , nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity=HeatmapRoute::class, mappedBy="heatmapId")
     */
    private $heatmapRoutes;

    public function __construct()
    {
        $this->heatmapRoutes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDefaultName(): ?string
    {
        return $this->defaultName;
    }

    public function setDefaultName(string $defaultName): self
    {
        $this->defaultName = $defaultName;

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
       return $this->defaultName;
   }

   /**
    * @return Collection|HeatmapRoute[]
    */
   public function getHeatmapRoutes(): Collection
   {
       return $this->heatmapRoutes;
   }

   public function addHeatmapRoute(HeatmapRoute $heatmapRoute): self
   {
       if (!$this->heatmapRoutes->contains($heatmapRoute)) {
           $this->heatmapRoutes[] = $heatmapRoute;
           $heatmapRoute->setHeatmapId($this);
       }

       return $this;
   }

   public function removeHeatmapRoute(HeatmapRoute $heatmapRoute): self
   {
       if ($this->heatmapRoutes->removeElement($heatmapRoute)) {
           // set the owning side to null (unless already changed)
           if ($heatmapRoute->getHeatmapId() === $this) {
               $heatmapRoute->setHeatmapId(null);
           }
       }

       return $this;
   }
}
