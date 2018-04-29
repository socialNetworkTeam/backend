<?php

namespace app\models;

use Da\User\Model\User as BaseUser;

class User extends BaseUser
{
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }

}