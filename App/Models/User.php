<?php

namespace App\Models;

use App\AModel;


class User extends AModel
{
    const TABLE= 'users';

    public $email;
    public $name;

}