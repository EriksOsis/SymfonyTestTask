<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column]
    private ?int $Number = null;

    #[ORM\Column(length: 255)]
    private ?string $Issuer = null;

    #[ORM\Column(length: 255)]
    private ?string $Owner = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $IssueDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DueDate = null;

    #[ORM\Column(length: 255)]
    private ?string $InvoiceTemplate = null;

    #[ORM\Column(length: 255)]
    private ?string $Agreement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PeriodFrom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PeriodTo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ReminderScheme = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Product = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $JIRA = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $JIRAtask = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ClientJIRAtask = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?int $Price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Unit = null;

    #[ORM\Column(length: 255)]
    private ?string $Quantity = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?string
    {
        return $this->Client;
    }

    public function setClient(string $Client): self
    {
        $this->Client = $Client;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->Number;
    }

    public function setNumber(int $Number): self
    {
        $this->Number = $Number;

        return $this;
    }

    public function getIssuer(): ?string
    {
        return $this->Issuer;
    }

    public function setIssuer(string $Issuer): self
    {
        $this->Issuer = $Issuer;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->Owner;
    }

    public function setOwner(string $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getIssueDate(): ?\DateTimeInterface
    {
        return $this->IssueDate;
    }

    public function setIssueDate(\DateTimeInterface $IssueDate): self
    {
        $this->IssueDate = $IssueDate;

        return $this;
    }

    public function getDueDate(): ?\DateTimeInterface
    {
        return $this->DueDate;
    }

    public function setDueDate(\DateTimeInterface $DueDate): self
    {
        $this->DueDate = $DueDate;

        return $this;
    }

    public function getInvoiceTemplate(): ?string
    {
        return $this->InvoiceTemplate;
    }

    public function setInvoiceTemplate(string $InvoiceTemplate): self
    {
        $this->InvoiceTemplate = $InvoiceTemplate;

        return $this;
    }

    public function getAgreement(): ?string
    {
        return $this->Agreement;
    }

    public function setAgreement(string $Agreement): self
    {
        $this->Agreement = $Agreement;

        return $this;
    }

    public function getPeriodFrom(): ?string
    {
        return $this->PeriodFrom;
    }

    public function setPeriodFrom(?string $PeriodFrom): self
    {
        $this->PeriodFrom = $PeriodFrom;

        return $this;
    }

    public function getPeriodTo(): ?string
    {
        return $this->PeriodTo;
    }

    public function setPeriodTo(?string $PeriodTo): self
    {
        $this->PeriodTo = $PeriodTo;

        return $this;
    }

    public function getReminderScheme(): ?string
    {
        return $this->ReminderScheme;
    }

    public function setReminderScheme(?string $ReminderScheme): self
    {
        $this->ReminderScheme = $ReminderScheme;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->Product;
    }

    public function setProduct(?string $Product): self
    {
        $this->Product = $Product;

        return $this;
    }

    public function getJIRA(): ?string
    {
        return $this->JIRA;
    }

    public function setJIRA(?string $JIRA): self
    {
        $this->JIRA = $JIRA;

        return $this;
    }

    public function getJIRAtask(): ?string
    {
        return $this->JIRAtask;
    }

    public function setJIRAtask(?string $JIRAtask): self
    {
        $this->JIRAtask = $JIRAtask;

        return $this;
    }

    public function getClientJIRAtask(): ?string
    {
        return $this->ClientJIRAtask;
    }

    public function setClientJIRAtask(?string $ClientJIRAtask): self
    {
        $this->ClientJIRAtask = $ClientJIRAtask;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->Unit;
    }

    public function setUnit(?string $Unit): self
    {
        $this->Unit = $Unit;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->Quantity;
    }

    public function setQuantity(string $Quantity): self
    {
        $this->Quantity = $Quantity;

        return $this;
    }
}
