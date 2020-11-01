<?php


namespace App\Repository;


use App\Library\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{
    public function getAll()
    {
        return User::latest()->paginate(15);
    }
}
