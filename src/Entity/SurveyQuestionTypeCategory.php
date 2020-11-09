<?php

namespace App\Entity;

use App\Repository\SurveyQuestionTypeCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SurveyQuestionTypeCategoryRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class SurveyQuestionTypeCategory
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
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity=SurveyQuestionType::class, mappedBy="categoryId")
     */
    private $surveyQuestionTypes;

    public function __construct()
    {
        $this->surveyQuestionTypes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    /**
     * @return Collection|SurveyQuestionType[]
     */
    public function getSurveyQuestionTypes(): Collection
    {
        return $this->surveyQuestionTypes;
    }

    public function addSurveyQuestionType(SurveyQuestionType $surveyQuestionType): self
    {
        if (!$this->surveyQuestionTypes->contains($surveyQuestionType)) {
            $this->surveyQuestionTypes[] = $surveyQuestionType;
            $surveyQuestionType->setCategotyId($this);
        }

        return $this;
    }

    public function removeSurveyQuestionType(SurveyQuestionType $surveyQuestionType): self
    {
        if ($this->surveyQuestionTypes->removeElement($surveyQuestionType)) {
            // set the owning side to null (unless already changed)
            if ($surveyQuestionType->getCategotyId() === $this) {
                $surveyQuestionType->setCategotyId(null);
            }
        }

        return $this;
    }

}
