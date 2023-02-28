<?php

class Usuario extends ActiveRecord
{

    public function initialize()
    {
        //this->belongs_to('TargetModelName');
        //this->has_one('TargetModelName');
        //this->has_many('TargetModelName');
        //this->has_and_belongs_to_many('TargetModelName');
    }

    public function authenticate($pass, $user)
    {
        $authResult = new Auth('model', 'class: Usuario', "pass: $pass", "user: $user");
        return $authResult->authenticate();
    }

    public function logout()
    {
        Auth::destroy_identity();
        return 'ok';
    }
}
