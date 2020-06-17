<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    var $email;
    var $login;
    var $password;

    public function __construct($email, $login, $password)
    {
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
    }


}
