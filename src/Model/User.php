<?php
namespace src\Model;

class User {
    private ?int $Id = null;
    private String $NomPrenom;
    private String $Mail;
    private String $Password;
    private Array $Roles;

    public function getId(): ?int
    {
        return $this->Id;
    }

    public function setId(?int $Id): User
    {
        $this->Id = $Id;
        return $this;
    }

    public function getNomPrenom(): string
    {
        return $this->NomPrenom;
    }

    public function setNomPrenom(string $NomPrenom): User
    {
        $this->NomPrenom = $NomPrenom;
        return $this;
    }

    public function getMail(): string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): User
    {
        $this->Mail = $Mail;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): User
    {
        $this->Password = $Password;
        return $this;
    }

    public function getRoles(): array
    {
        return $this->Roles;
    }

    public function setRoles(array $Roles): User
    {
        $this->Roles = $Roles;
        return $this;
    }



}