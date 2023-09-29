<?php
declare(strict_types=1);


class DatabaseUserPersist implements UserPersistInterface
{
    public function save(User $user): void
    {
        echo __METHOD__;
    }
}