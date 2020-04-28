<?php

namespace App\Controllers;
    
use App\Models\Job;
use Respect\Validation\Validator as v;

class JobsController extends BaseController {

    public function getAddJobAction($request) {
        $responseMessage = '';
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $jobValidator = v::key('title', v::stringType()->notEmpty())
                            ->key('description', v::stringType()->notEmpty());
            try {
                $jobValidator->assert($postData);
                $job = new Job();
                $job->title = $postData['title'];
                $job->description = $postData['description'];
                $job->visible = true;
                $job->months = 3;
                $job->save();
                $responseMessage = 'Saved';
            } catch (\Exception $e) {
                $responseMessage = $e->getMessage();
            }
        }

        return $this->renderHTML('addJob.twig', [
            'responseMessage' => $responseMessage
        ]);
    }
}