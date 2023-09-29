<?php

class User
{
    private ?\DateTimeImmutable $createdAD;

    public function __construct(
        private readonly string $fio,
        private readonly string $email,
        private readonly string $login,
        private readonly string $pswrd,
        private readonly string $pswrd_confirm,
        $createdAD = null, 
    )
    {
        $this->createdAD = $createdAD;
        if (null === $this -> createdAD){
            $this -> createdAD = new \DateTimeImmutable();
        }

    }

    public function getFIO(): string
    {
        return $this->fio;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPswrd(): string
    {
        return $this->pswrd;
    }

    public function getPswrdConfirm(): string
    {
        return $this->pswrd_confirm;
    }

    public function getCreatedAD(): DateTimeImmutable
    {
        return $this->createdAD;
    }


    public function isPassworsEquals(): bool
    {
        return $this->pswrd === $this->pswrd_confirm;
    }
}