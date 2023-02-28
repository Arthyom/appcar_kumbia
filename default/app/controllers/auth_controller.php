<?php

class AuthController extends PublicResourceController
{
    public function post()
    {
        $request =  $this->param();
        $this->data = (new Usuario)->authenticate($request['pass'], $request['user']);
    }
}
