<?php

namespace App\Entity;

use App\Repository\AttributesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttributesRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class Attributes
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
    private $logo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $favicon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $styleSheet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $translationDomain;

    /**
     * @ORM\Column(type="text")
     */
    private $loginTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $loginDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $challengeText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $viewChallengeText;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $terms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $privacyLink;

    /**
     * @ORM\Column(type="text")
     */
    private $expoAreaVideo;

    /**
     * @ORM\Column(type="text")
     */
    private $expoAreaImageTitle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $multiAudience;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visibleRanking;

    /**
     * @ORM\Column(type="boolean")
     */
    private $eventRedemption;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailInfo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $questionAudience;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $videoTutorial;

    /**
     * @ORM\Column(type="boolean")
     */
    private $premium;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $estimateParticipants;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $welcomeVideo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $termFooter;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $htmlPageAccess;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

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

    public function getFavicon(): ?string
    {
        return $this->favicon;
    }

    public function setFavicon(string $favicon): self
    {
        $this->favicon = $favicon;

        return $this;
    }

    public function getStyleSheet(): ?string
    {
        return $this->styleSheet;
    }

    public function setStyleSheet(string $styleSheet): self
    {
        $this->styleSheet = $styleSheet;

        return $this;
    }

    public function getTranslationDomain(): ?string
    {
        return $this->translationDomain;
    }

    public function setTranslationDomain(string $translationDomain): self
    {
        $this->translationDomain = $translationDomain;

        return $this;
    }

    public function getLoginTitle(): ?string
    {
        return $this->loginTitle;
    }

    public function setLoginTitle(string $loginTitle): self
    {
        $this->loginTitle = $loginTitle;

        return $this;
    }

    public function getLoginDescription(): ?string
    {
        return $this->loginDescription;
    }

    public function setLoginDescription(string $loginDescription): self
    {
        $this->loginDescription = $loginDescription;

        return $this;
    }

    public function getChallengeText(): ?string
    {
        return $this->challengeText;
    }

    public function setChallengeText(string $challengeText): self
    {
        $this->challengeText = $challengeText;

        return $this;
    }

    public function getViewChallengeText(): ?string
    {
        return $this->viewChallengeText;
    }

    public function setViewChallengeText(string $viewChallengeText): self
    {
        $this->viewChallengeText = $viewChallengeText;

        return $this;
    }

    public function getTerms(): ?string
    {
        return $this->terms;
    }

    public function setTerms(?string $terms): self
    {
        $this->terms = $terms;

        return $this;
    }

    public function getPrivacyLink(): ?string
    {
        return $this->privacyLink;
    }

    public function setPrivacyLink(string $privacyLink): self
    {
        $this->privacyLink = $privacyLink;

        return $this;
    }

    public function getExpoAreaVideo(): ?string
    {
        return $this->expoAreaVideo;
    }

    public function setExpoAreaVideo(string $expoAreaVideo): self
    {
        $this->expoAreaVideo = $expoAreaVideo;

        return $this;
    }

    public function getExpoAreaImageTitle(): ?string
    {
        return $this->expoAreaImageTitle;
    }

    public function setExpoAreaImageTitle(string $expoAreaImageTitle): self
    {
        $this->expoAreaImageTitle = $expoAreaImageTitle;

        return $this;
    }

    public function getMultiAudience(): ?bool
    {
        return $this->multiAudience;
    }

    public function setMultiAudience(bool $multiAudience): self
    {
        $this->multiAudience = $multiAudience;

        return $this;
    }

    public function getVisibleRanking(): ?bool
    {
        return $this->visibleRanking;
    }

    public function setVisibleRanking(bool $visibleRanking): self
    {
        $this->visibleRanking = $visibleRanking;

        return $this;
    }

    public function getEventRedemption(): ?bool
    {
        return $this->eventRedemption;
    }

    public function setEventRedemption(bool $eventRedemption): self
    {
        $this->eventRedemption = $eventRedemption;

        return $this;
    }

    public function getEmailInfo(): ?string
    {
        return $this->emailInfo;
    }

    public function setEmailInfo(string $emailInfo): self
    {
        $this->emailInfo = $emailInfo;

        return $this;
    }

    public function getQuestionAudience(): ?string
    {
        return $this->questionAudience;
    }

    public function setQuestionAudience(?string $questionAudience): self
    {
        $this->questionAudience = $questionAudience;

        return $this;
    }

    public function getVideoTutorial(): ?string
    {
        return $this->videoTutorial;
    }

    public function setVideoTutorial(?string $videoTutorial): self
    {
        $this->videoTutorial = $videoTutorial;

        return $this;
    }

    public function getPremium(): ?bool
    {
        return $this->premium;
    }

    public function setPremium(bool $premium): self
    {
        $this->premium = $premium;

        return $this;
    }

    public function getEstimateParticipants(): ?int
    {
        return $this->estimateParticipants;
    }

    public function setEstimateParticipants(?int $estimateParticipants): self
    {
        $this->estimateParticipants = $estimateParticipants;

        return $this;
    }

    public function getWelcomeVideo(): ?string
    {
        return $this->welcomeVideo;
    }

    public function setWelcomeVideo(?string $welcomeVideo): self
    {
        $this->welcomeVideo = $welcomeVideo;

        return $this;
    }

    public function getTermFooter(): ?string
    {
        return $this->termFooter;
    }

    public function setTermFooter(?string $termFooter): self
    {
        $this->termFooter = $termFooter;

        return $this;
    }

    public function getHtmlPageAccess(): ?string
    {
        return $this->htmlPageAccess;
    }

    public function setHtmlPageAccess(?string $htmlPageAccess): self
    {
        $this->htmlPageAccess = $htmlPageAccess;

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
}
