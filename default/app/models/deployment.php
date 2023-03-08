<?php

    class Deployment
    {
        public function runMergeDeployment($data)
        {
            //code...
            $repositoryResponse = $data['repository']['id'];
            if ($repositoryResponse == 607534641) {
                //echo var_dump($data);
                $pull = "/usr/bin/git pull https://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@github.com/arthyom/appcar_kumbia.git  master 2>&1";
                $response = shell_exec($pull);
                //echo var_dump($response);
                return strpos($response, 'FETCH_HEAD');
            }
            return false;
        }
    }
