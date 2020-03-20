<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReceivedMessageRepository")
 */
class ReceivedMessage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $telegramId;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isReplied;

    /**
     * @ORM\Column(type="integer")
     */
    private $fromId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelegramId(): ?int
    {
        return $this->telegramId;
    }

    public function setTelegramId(int $telegramId): self
    {
        $this->telegramId = $telegramId;

        return $this;
    }

    public function getIsReplied(): ?bool
    {
        return $this->isReplied;
    }

    public function setIsReplied(bool $isReplied): self
    {
        $this->isReplied = $isReplied;

        return $this;
    }

    public function getFromId(): ?int
    {
        return $this->fromId;
    }

    public function setFromId(int $fromId): self
    {
        $this->fromId = $fromId;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
