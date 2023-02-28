<?php

class LogOutController extends PublicResourceController
{
    public function post()
    {
        $this->data = (new Usuario)->logout();
    }
}
