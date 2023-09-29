<?php

require_once 'UserPersistInterface.php';

class FileUserPersist implements UserPersistInterface
{
    const FILENAME = 'Users.txt';
    public function save(User $user): void
    {
        if (file_exists(self::FILENAME)){
            $fileContains =json_decode(file_get_contents(self::FILENAME), true);
        } else {
            $fileContains = [];
        }

        $fileContains[] = $this->getUserToPersistByUser($user);

        file_put_contents(self::FILENAME, json_encode($fileContains));
    }

    public function get(string $login): ?User
    {
        if (!file_exists(self::FILENAME)){
            return null;
        } 
        
        $rowUsers = json_decode(file_get_contents(self::FILENAME), true);

        foreach($rowUsers as $item) {
            if($item['login'] === $login) {
                return new User($item['fio'], $item['email'], $item['login'], $item['pswrd'], $item['pswrd'], DateTimeImmutable::createFromFormat('d.m.Y H:i.s', $item['createdAD']));
            }
        }

        return null;
    }

    private function getUserToPersistByUser(User $user): array
    {
        return [
            'fio' => $user->getFIO(),
            'email' => $user->getEmail(),
            'login' => $user->getLogin(),
            'pswrd' => sha1($user->getPswrd()),
            'createdAD' => $user->getCreatedAD()->format('d.m.Y H:i.s'),
        ];
    }
}