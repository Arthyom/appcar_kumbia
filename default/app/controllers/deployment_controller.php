<?php

class DeploymentController extends PublicResourceController
{
    public function post()
    {
        if ((new Deployment())->runMergeDeployment($this->param())) {
            $this->data = 'ok';
        }

        $this->data = $this->error('Not comes from allowed origin');
    }
}
