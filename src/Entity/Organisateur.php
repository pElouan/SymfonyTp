<?php

namespace App\Entity;

use App\Repository\OrganisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrganisateurRepository::class)]
class Organisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $statut = null;

    #[ORM\Column(length: 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siteweb = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    /**
     * @var Collection<int, Hackathon>
     */
    #[ORM\ManyToMany(targetEntity: Hackathon::class, mappedBy: 'organisateurs')]
    private Collection $Hackathons;

    public function __construct()
    {
        $this->Hackathons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSiteweb(): ?string
    {
        return $this->siteweb;
    }

    public function setSiteweb(?string $siteweb): static
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection<int, Hackathon>
     */
    public function getHackathons(): Collection
    {
        return $this->Hackathons;
    }

    public function addHackathon(Hackathon $hackathon): static
    {
        if (!$this->Hackathons->contains($hackathon)) {
            $this->Hackathons->add($hackathon);
            $hackathon->addOrganisateur($this);
        }

        return $this;
    }

    public function removeHackathon(Hackathon $hackathon): static
    {
        if ($this->Hackathons->removeElement($hackathon)) {
            $hackathon->removeOrganisateur($this);
        }

        return $this;
    }
}
