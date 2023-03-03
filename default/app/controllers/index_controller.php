<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController
{

    public function index()
    {
        View::template(null);
        View::select(null);
        echo 'hola k ase ps un cambiao jsjsjsjs';
    }
}
