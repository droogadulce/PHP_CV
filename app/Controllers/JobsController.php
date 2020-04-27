<?php

namespace App\Controllers;
    
use App\Models\Job;

class JobsController extends BaseController {

    public function getAddJobAction($request) {
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $job = new Job();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->visible = true;
            $job->months = 3;
            $job->save();
        }

        return $this->renderHTML('addJob.twig');
    }
}