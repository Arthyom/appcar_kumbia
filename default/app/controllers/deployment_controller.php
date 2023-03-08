<?php

class DeploymentController extends PublicResourceController
{
    public function post()
    {
        $this->data = $this->param();
        if ((new Deployment())->runMergeDeployment($this->param())) {
            $this->data = 'ok';
        }

        $this->data = $this->error('Not comes from allowed origin');
    }
}
