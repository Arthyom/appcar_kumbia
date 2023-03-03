<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController
{

    public function index()
    {
        try {
            View::select(null);
            View::template(null);
    
            $pull = "/usr/bin/git pull https://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@github.com/arthyom/appcar_kumbia.git  master 2>&1";
            $response = shell_exec($pull);
            echo var_dump($response);

            echo('okokoko ???');
        } catch ( Throwable $th) {
            echo('error');
            echo var_dump($th);
            //throw $th;
        }
       

    }

    public function hola()
    {
        # code...
        View::select(null);
        View::template(null);
        echo 'holaaa';
    }

    public function adios()
    {
        # code...
        View::select(null);
        View::template(null);
        echo 'adios';
    }

    public function saludos()
    {
        # code...
        View::select(null);
        View::template(null);
        echo 'saludos';
    }

    public function regards()
    {
        # code...
        View::select(null);
        View::template(null);
        echo 'saludos';
        echo 'and best regards';

    }
}
