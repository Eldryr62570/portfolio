<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_projet;

    #[ORM\Column(type: 'string', length: 255)]
    private $image_projet;

    #[ORM\Column(type: 'string', length: 255)]
    private $link_github;

    #[ORM\Column(type: 'string', length: 255)]
    private $link_extern;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProjet(): ?string
    {
        return $this->nom_projet;
    }

    public function setNomProjet(string $nom_projet): self
    {
        $this->nom_projet = $nom_projet;

        return $this;
    }

    public function getImageProjet(): ?string
    {
        return $this->image_projet;
    }

    public function setImageProjet(string $image_projet): self
    {
        $this->image_projet = $image_projet;

        return $this;
    }

    public function getLinkGithub(): ?string
    {
        return $this->link_github;
    }

    public function setLinkGithub(string $link_github): self
    {
        $this->link_github = $link_github;

        return $this;
    }

    public function getLinkExtern(): ?string
    {
        return $this->link_extern;
    }

    public function setLinkExtern(string $link_extern): self
    {
        $this->link_extern = $link_extern;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
