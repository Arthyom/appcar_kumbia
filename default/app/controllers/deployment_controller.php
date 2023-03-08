<?php

class DeploymentController extends PublicResourceController
{
    public function post()
    {
        $this->data =  (new Deployment())->runMergeDeployment($this->param());
    }
}
